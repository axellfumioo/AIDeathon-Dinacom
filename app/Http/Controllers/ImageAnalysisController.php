<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Vision;
use Exception;

class ImageAnalysisController extends Controller
{
    public function index()
    {
        return view('image_analysis.index');
    }

    public function analyze(Request $request)
    {
        $request->validate([
            'image_url' => 'required|url',
        ]);

        $image_url = $request->input('image_url');
        $apiKey = env('GEMINI_API_KEY');

        $client = new Client();
        $client->setApplicationName('Gemini API Image Analysis');
        $client->setDeveloperKey($apiKey);

        $gemini = new Vision($client);

        try {
            // Get image from URL
            $image_data = file_get_contents($image_url);
            $base64_image = base64_encode($image_data);

            // Create request to Gemini API
             $request = new Vision\AnnotateImageRequest();
             $image = new Vision\Image();
             $image->setContent($base64_image);
             $request->setImage($image);

             $features = new Vision\Feature();
             $features->setType('LABEL_DETECTION'); // Example: label detection
             $features->setMaxResults(10);
             $request->setFeatures([$features]);

            $batch = new Vision\BatchAnnotateImagesRequest();
            $batch->setRequests([$request]);

             $response = $gemini->images->annotate($batch);


            $analysis_results = [];
            if ($response->getResponses()) {
              $annotations = $response->getResponses()[0]->getLabelAnnotations();
              if($annotations) {
                 foreach ($annotations as $annotation) {
                  $analysis_results[] = [
                     'description' => $annotation->getDescription(),
                     'score' => $annotation->getScore(),
                   ];
                 }
               }
           }

            return view('image_analysis.results', compact('analysis_results'));

        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
}
