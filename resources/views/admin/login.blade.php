<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Admin Nusantara Mining</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css'])
</head>
<body class="font-sans antialiased bg-[#1E3932] min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white">Nusantara Mining</h1>
            <p class="text-[rgba(255,255,255,0.70)] mt-2">Admin Panel</p>
        </div>
        <div class="bg-white rounded-[12px] shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-[rgba(0,0,0,0.87)] mb-6">Sign In</h2>
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
                </div>
                <button type="submit"
                    class="w-full bg-[#00754A] text-white font-semibold py-3 px-6 rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95]">
                    Sign In
                </button>
            </form>
            <p class="text-center text-sm text-[rgba(0,0,0,0.58)] mt-6">
                <a href="{{ url('/') }}" class="text-[#00754A] hover:underline">&larr; Back to Website</a>
            </p>
        </div>
    </div>
</body>
</html>
