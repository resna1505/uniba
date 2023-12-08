<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Bootstrap CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Bootstrap Bundle with Popper -->
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

   
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            {{-- {{ Auth::user()->name }} --}}
            @if (Auth::user()->role_id == 3)
                @if (isset($header))
                    <header class="bg-white shadow">
                        <nav class="nav">
                            <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jadwal
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="#">Kalender Akademik</a></li>
                                <li><a class="dropdown-item" href="#">Jadwal Minggu Ini</a></li>
                                <li><a class="dropdown-item" href="#">Jadwal Semester</a></li>
                            </ul>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Akademik
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Pengisian KRS</a></li>
                                <li><a class="dropdown-item" href="#">Riwayat KRS</a></li>
                                <li><a class="dropdown-item" href="#">Kurikulum Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="#">Mengulang</a></li>
                                <li><a class="dropdown-item" href="#">Nilai Mahasiswa</a></li>
                            </ul>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tingkat Akhir
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Konsultasi</a></li>
                                <li><a class="dropdown-item" href="#">Kegiatan Pendukung</a></li>
                                <li><a class="dropdown-item" href="#">Daftar Proposal</a></li>
                                <li><a class="dropdown-item" href="#">Daftar Tugas Akhir</a></li>
                                <li><a class="dropdown-item" href="#">Pengajuan Yudisium</a></li>
                                <li><a class="dropdown-item" href="#">Pengajuan Wisuda</a></li>
                            </ul>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hasil Studi
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Kartu Hasil Studi</a></li>
                                <li><a class="dropdown-item" href="#">Transkrip</a></li>
                            </ul>
                        </nav>
                    </header>
                @endif  
            @endif
            
            @if (Auth::user()->role_id == 2)
                @if (isset($header))
                    <header class="bg-white shadow">
                        <nav class="nav">
                            <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                            
                        </nav>
                    </header>
                @endif  
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
