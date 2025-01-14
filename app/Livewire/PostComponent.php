<?php

namespace App\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads; // Tambahkan ini
use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class PostComponent extends Component
{
    use WithFileUploads; // Tambahkan ini
    public $content; // Untuk menyimpan konten input pengguna
    public $posts = []; // Untuk menyimpan daftar postingan

    public $image; // Properti untuk file yang diunggah

    protected $rules = [
        'content' => 'required|max:255',
    ];

    public function mount()
    {
        $this->posts = Post::latest()->get(); // Ambil postingan terbaru saat komponen di-mount
    }

    public function post()
    {
        // Validasi input
        $this->validate([
            'content' => 'required|string|max:500',
            'image' => 'nullable|image|max:1024', // Validasi file gambar (opsional)
        ]);

        // Generate UUID untuk post_id
        $generateUUID = Str::uuid()->toString();

        // Inisialisasi variabel $imageUrl
        $imageUrl = null;

        // Jika ada file 'image' yang diunggah
        if ($this->image) {
            $fileID = now()->format('dmy') . '-' . uniqid();
            $fileName = "{$fileID}.{$this->image->getClientOriginalExtension()}";

            // Simpan file ke storage
            Storage::disk('r2')->put($fileName, file_get_contents($this->image->getRealPath()));

            // Buat URL gambar
            $imageUrl = "https://pub-8d062d8afb634f118a518401f95053f2.r2.dev/{$fileName}";
        }

        // Simpan ke database
        $post = Post::create([
            'user_id' => Auth::id(),
            'post_id' => $generateUUID,
            'content' => $this->content,
            'image' => $imageUrl,
            'activty_type' => 'feeds',
            'like_count' => 0,
        ]);

        // Tambahkan postingan baru ke array tanpa refresh
        $this->posts->prepend($post);

        // Kosongkan input setelah posting
        $this->reset(['content', 'image']);
    }


    public function render()
    {
        $user = Auth::user();
        $posts = Post::with('user')->get();
        return view('livewire.post-component', ['user' => $user, 'post' => $posts]);
    }
}
