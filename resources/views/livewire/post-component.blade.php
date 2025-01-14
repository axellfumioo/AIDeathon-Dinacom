<div>
    <!-- Post Input Section -->
    <div class="bg-gray-100 p-4 rounded-2xl relative mx-2 mt-20">
        <!-- Profile Picture -->
        <div class="absolute top-1/2 left-4 transform -translate-y-1/2">
            <div class="w-10 h-10 rounded-full">
                <img class="rounded-full w-10" src="https://api.dicebear.com/9.x/pixel-art/svg?seed={{ $user->name }}">
            </div>
        </div>

        <!-- Input -->
        <div class="ml-16">
            <form wire:submit.prevent="post" class="mb-4">
                <h2 class="font-bold">{{ $user->name }}</h2>
                <textarea wire:model="content" type="text" placeholder="Ketik sesuatu..."
                    class="w-full bg-transparent text-gray-500 placeholder-gray-400 focus:outline-none border-gray-300"></textarea>
                @error('content')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <!-- Icons -->
                <div class="flex justify-between items-center mt-2">
                    <div class="flex space-x-2">
                        <div
                            class="flex items-center space-x-2 rounded-md text-gray-500 px-4 py-2 border border-gray-300 cursor-pointer">
                            <i class="fas fa-link"></i>
                            <input type="file" class="hidden" wire:model="image" id="mediaInput" />
                            <label for="mediaInput" class="flex items-center space-x-1 cursor-pointer text-sm">
                                <span>Add media</span>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="bg-[#16423C] text-white px-3.5 py-2 rounded">
                        Post
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Post Display Section -->

    @foreach ($posts as $post)
        <div class="max-w-sm mx-2 bg-gray-100 rounded-2xl my-4">
            <div class="flex items-center p-4">
                <div class="w-10 h-10 rounded-full">
                    <img src="https://api.dicebear.com/9.x/pixel-art/svg?seed={{ $post->user->name }}">
                </div>
                <div class="ml-3">
                    <h2 class="text-sm font-semibold">{{ $post->user->name }}</h2>
                    <p class="text-xs text-gray-500">
                        {{ \Carbon\Carbon::parse($post->created_at)->format('h:i A | d F Y') }}</p>
                </div>
            </div>
            <div class="px-4 pb-4">
                <p class="text-sm">{{ $post->content }}</p>
                @if ($post->image)
                    <img class="w-full rounded-md mt-2" src="{{ $post->image }}" alt="Candi">
                @endif
            </div>
            <div class="flex items-center justify-around p-4 border-t">
                <button class="text-gray-500 hover:text-blue-500 flex items-center">
                    <i class="fas fa-thumbs-up mr-1"></i> <span class="text-sm">Like</span>
                </button>
                <button class="text-gray-500 hover:text-blue-500 flex items-center">
                    <i class="fas fa-share mr-1"></i> <span class="text-sm">Share</span>
                </button>
                <button class="text-gray-500 hover:text-blue-500 flex items-center">
                    <i class="fas fa-comment mr-1"></i> <span class="text-sm">Comment</span>
                </button>
            </div>
            <a class="ml-2 text-xs text-red-400">Fitur ini belum tersedia, karena deadline sangat dekat</a>
        </div>
    @endforeach
</div>
