<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="icon" type="image/x-icon"
        href="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link href="{{ asset('build/assets/app-48893011.css') }}" rel="stylesheet" />
    <script src="{{ asset('build/assets/app-6e0eadfb.js') }}"></script>

    <style>
        .min-h-with-nav {
            min-height: calc(100vh - 64px);
        }
    </style>
</head>

<body class="font-sans antialiased dark bg-gray-100">
    <header>
        @include('layouts.home-nav')
    </header>


    {{ $slot }}

    <div id="alert-1" class=" text-blue-800 rounded-lg bg-blue-50" role="alert">
        <div class="ml-3 text-lg font-semibold text-start align-middle">
            Build By
            <a href="{{ env('PORTFOLIO_URL') }}" class="font-extrabold text-xl text-red-500 hover:underline">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>Harraoui Sohaib
            </a>
        </div>
    </div>
</body>

</html>
