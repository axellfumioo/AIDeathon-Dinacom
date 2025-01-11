<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class AIController extends Controller
{
    private $OpenAIAPIKey;
    public function __construct()
    {
        $this->OpenAIAPIKey = env('OPENAI_API_KEY');
    }

    public function handleUpload(Request $request)
    {
        try {
            // Validate the incoming request
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validate file type and size
            ]);

            // Get the uploaded file
            $file = $request->file('file');
            $fileID = date("dmy") . "-" . uniqid();

            // Generate a unique file name
            $fileName =  $fileID . '.' . $file->getClientOriginalExtension();

            // Upload the file to Cloudflare R2
            Storage::disk('r2')->put($fileName, file_get_contents($file));

            // Manually construct the public URL
            $url = "https://pub-8d062d8afb634f118a518401f95053f2.r2.dev/{$fileName}";

            // Simulate or construct a redirect URL based on the uploaded file
            $redirectUrl = "https://example.com/view?file=" . $url;

            // Return success response
            return response()->json([
                'status' => 'OK',
                'url' => $redirectUrl,
            ]);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'status' => 'ERROR',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
