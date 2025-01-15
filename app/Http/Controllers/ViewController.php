<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\Models\Trash;
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
    public function community()
    {
        $user = Auth::user();
        return View::make('app.community.index', ['user' => $user]);
    }
    public function trash($trashid)
    {
        // Mencari data berdasarkan ID di model Trash
        $trash = Trash::where('trash_uuid', $trashid)->first();

        // Jika data tidak ditemukan, kembalikan respon 404
        if (!$trash) {
            abort(404);
        }
        $user = Auth::user();
        return View::make('app.trash.index', ['user' => $user, 'trash' => $trash]);
    }
    public function profile()
    {
        $user = Auth::user();

        if (!$user) {
            // Handle case when no user is authenticated
            return redirect()->route('login')->with('error', 'You need to log in to access your profile.');
        }

        $trash = Trash::where('user_id', $user->id)->get();

        return view('app.profile.index', [
            'user' => $user,
            'trash' => $trash,
        ]);
    }

}
