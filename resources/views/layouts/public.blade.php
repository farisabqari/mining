<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', 'Nusantara Mining Corporation - Leading Indonesia\'s mining industry with excellence, integrity, and sustainability. Premium mining and resource development company.')">
    <meta name="keywords" content="mining, Indonesia, Nusantara, gold, copper, nickel, coal, mining company, resource development">
    <meta name="author" content="Nusantara Mining Corporation">
    <meta property="og:title" content="@yield('title', config('app.name')) - Nusantara Mining Corporation">
    <meta property="og:description" content="@yield('meta_description', 'Leading Indonesia\'s mining industry with excellence, integrity, and sustainability.')">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nusantara Mining Corporation">
    <meta name="twitter:card" content="summary_large_image">
    <title>@yield('title', config('app.name')) - Nusantara Mining Corporation</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        html, body { height: auto; min-height: 100%; }
    </style>
</head>
<body class="font-sans antialiased bg-[#f2f0eb] text-[rgba(0,0,0,0.87)] overflow-x-hidden overflow-y-auto min-h-screen">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')


    @stack('scripts')
</body>
</html>
