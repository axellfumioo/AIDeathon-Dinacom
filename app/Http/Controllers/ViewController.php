<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;

class ViewController extends Controller
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('YOUTUBE_API_KEY'); // Masukkan API key di .env file
    }

    public function home()
    {
        $user = Auth::user();
        $leaderboard = DB::table('users')->orderByDesc('total_sampah')->take(5)->get();
        return View::make('app.index', ['user' => $user, 'leaderboard' => $leaderboard]);
    }
    public function leaderboard()
    {
        $user = Auth::user();
        $podium_leaderboard = DB::table('users')->orderByDesc('total_sampah')->take(3)->get();
        $leaderboard = DB::table('users')->orderByDesc('total_sampah')->skip(3)->take(5)->get();

        return view('app.leaderboard.index', compact('user', 'podium_leaderboard', 'leaderboard'));
    }
    public function edu()
    {
        // List ID video yang ingin ditampilkan
        $videoIds = [
            'dQw4w9WgXcQ', // Contoh video 1
            '9bZkp7q19f0', // Contoh video 2
            'LXb3EKWsInQ', // Contoh video 3
            'YHTdbIpMyHw', // Contoh video 3
        ];

        // Ambil data video dari YouTube API
        $videos = collect($videoIds)->mapWithKeys(function ($id) {
            return [$id => Cache::remember("video_details_{$id}", 120, function () use ($id) {
                $client = new \GuzzleHttp\Client();
                $response = $client->get('https://www.googleapis.com/youtube/v3/videos', [
                    'query' => [
                        'part' => 'snippet,statistics,contentDetails',
                        'id' => $id,
                        'key' => $this->apiKey,
                    ]
                ]);

                $data = json_decode($response->getBody(), true);

                if (!empty($data['items'][0])) {
                    $video = $data['items'][0];
                    return [
                        'id' => $id,
                        'title' => $video['snippet']['title'],
                        'thumbnails' => $video['snippet']['thumbnails']['medium']['url'],
                        'description' => $this->shortenDescription($video['snippet']['description']),
                        'duration' => $this->convertDuration($video['contentDetails']['duration']),
                        'views' => $this->formatViews($video['statistics']['viewCount']),
                        'likes' => $video['statistics']['likeCount'] ?? 0,
                    ];
                }

                return null;
            })];
        });

        // Kirim data ke view
        return view('app.education.index', compact('videos'));
    }


    private function convertDuration($duration)
    {
        $interval = new \DateInterval($duration);
        return $interval->format('%H:%I:%S');
    }
    private function shortenDescription($description, $maxChars = 128)
    {
        if (strlen($description) > $maxChars) {
            return substr($description, 0, $maxChars) . '...';
        }

        return $description;
    }
    private function formatViews($view)
    {
        if ($view < 1000) {
            // Anything less than a million
            $view = number_format($view);
        } else if ($view < 1000000) {
            // Anything less than a billion
            $view = number_format($view / 1000000, 1) . 'K';
        } else if ($view < 1000000000) {
            // Anything less than a billion
            $view = number_format($view / 1000000, 1) . 'M';
        } else {
            // At least a billion
            $view = number_format($view / 1000000000, 1) . 'B';
        }
        return $view;
    }
}
