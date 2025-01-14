<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Trash;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class AIController extends Controller
{

    /**
     * Menangani upload file dan menyimpan data sampah.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handleUpload(Request $request)
    {
        try {
            // 1. Validasi permintaan masuk
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi tipe file dan ukuran
            ]);

            // 2. Mengambil file yang diupload
            $file = $request->file('file');
            $fileID = date("dmy") . "-" . uniqid();
            $fileName =  $fileID . '.' . $file->getClientOriginalExtension();

            // 3. Menyimpan file ke storage 'r2'
            Storage::disk('r2')->put($fileName, file_get_contents($file));

            // 4. Menghasilkan URL gambar
            $imageUrl = "https://pub-8d062d8afb634f118a518401f95053f2.r2.dev/{$fileName}";

            // 5. Mengirim permintaan ke API eksternal
            $response = Http::withToken('axelgantengpoll')
                ->post('https://dinacom-ai.axellfumioo.my.id/analyze-image', [
                    'imageUrl' => $imageUrl,
                ]);

            // 6. Memeriksa apakah respons API berhasil
            if (!$response->successful()) {
                throw new \Exception('Permintaan API gagal dengan status ' . $response->status());
            }

            // 7. Menguraikan JSON luar
            $responseString = $response->body();
            $outer_data = json_decode($responseString, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('JSON luar tidak valid: ' . json_last_error_msg());
            }

            // 8. Mengambil nilai dari kunci 'result'
            if (!isset($outer_data['result'])) {
                throw new \Exception('Kunci "result" tidak ditemukan dalam JSON.');
            }

            $result = $outer_data['result'];

            // 9. Mengekstrak JSON dalam menggunakan regex
            if (!preg_match('/```json\s*(\{.*?\})\s*```/s', $result, $matches)) {
                throw new \Exception('JSON dalam tidak ditemukan atau format tidak sesuai.');
            }

            $inner_json = trim($matches[1]);

            // 10. Menguraikan JSON dalam
            $inner_data = json_decode($inner_json, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('JSON dalam tidak valid: ' . json_last_error_msg());
            }

            // 11. Menghasilkan UUID untuk sampah
            $trash_uuid = Str::uuid();

            // 12. Menyimpan data ke database menggunakan model Trash
            Trash::create([
                'user_id' => Auth::id(),
                'trash_uuid' => $trash_uuid,
                'trash_image' => $imageUrl,
                'trash_name' => $inner_data['kategori_sampah'] ?? null,
                'trash_type' => $inner_data['jenis_sampah'] ?? null,
                'description' => $inner_data['deskripsi'] ?? null,
                'dampak' => $inner_data['dampak_lingkungan'] ?? null,
                'cara_pengolahan' => $inner_data['cara_pengolahan'] ?? null,
                'faq_1' => $inner_data['faq']['faq_1'] ?? null,
                'faq_2' => $inner_data['faq']['faq_2'] ?? null,
                'faq_3' => $inner_data['faq']['faq_3'] ?? null,
            ]);

            // 13. Menghasilkan URL sukses menggunakan route yang dinamai (asumsi Anda memiliki route 'trash.show')
            $successURL = route('trash.show', ['uuid' => $trash_uuid]);

            // 14. Mengembalikan respons sukses
            return response()->json([
                'status' => 'OK',
                'url' => $successURL,
            ]);
        } catch (\Exception $e) {
            // 15. Menangani dan melaporkan error
            Log::error('Error di handleUpload: ' . $e->getMessage());

            return response()->json([
                'status' => 'ERROR',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function handleScanAI($imageUrl)
    {
        $response = OpenAI::chat()->create([
            // 'assistant' => 'asst_Db8XbCV5zZhhImwbomD912323', // Gunakan Assistant ID Anda
            'model' => 'gpt-4o',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => json_encode([
                        ['type' => 'text', 'text' => 'Jelaskan apa yang ada di gambar. Jenis sampah apa itu pada gambar?'],
                        [
                            'type' => 'image_url',
                            'image_url' => [
                                'url' => $imageUrl,
                            ],
                        ],
                    ]),
                ],
            ],
            'max_tokens' => 300,
        ]);

        return $response->choices[0]->message->content; // Hello! How can I assist you today?
    }
}
