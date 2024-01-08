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
</head>

<body class="font-sans antialiased">
    {{-- class="font-sans text-gray-900 antialiased" --}}
    @include('layouts.home-nav')
    <div class="max-h-screen flex flex-col sm:justify-center items-center mt-14 sm:pt-0  bg-gray-100 dark:bg-gray-900">
        {{-- <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div> --}}

        <div class="w-full px-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
