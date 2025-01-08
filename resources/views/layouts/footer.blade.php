<div class="fixed bottom-0 w-full bg-[#16423C] flex justify-between items-center px-6 py-3 z-10 m-0">
    <!-- Home -->
    <a class="flex flex-col items-center text-white" href="{{ url('/home') }}">
        <i class="fas fa-home text-lg"></i>
        <span class="text-xs mt-1">Home</span>
    </a>
    <!-- Komunitas -->
    <a class="flex flex-col items-center text-white" href="{{ url('/leaderboard') }}">
        <i class="fas fa-ranking-star text-lg"></i>
        <span class="text-xs mt-1">Peringkat</span>
    </a>
    <!-- Kamera (Bigger Middle Circle Button) -->
    <a class="bg-[#6A9C89] py-4 px-5 rounded-full -mt-10 shadow-lg" href="{{ url('/scan') }}">
        <i class="fas fa-camera text-3xl text-white"></i>
    </a>
    <!-- Riwayat -->
    <a class="flex flex-col items-center text-white" href="{{ url('/edu') }}">
        <i class="fas fa-graduation-cap text-lg"></i>
        <span class="text-xs mt-1">Education</span>
    </a>
    <!-- Akun -->
    <a class="flex flex-col items-center text-white" href="{{ url('/profile') }}">
        <i class="fas fa-user text-lg"></i>
        <span class="text-xs mt-1">Akun</span>
    </a>
</div>
