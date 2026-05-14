@extends('layouts.public')
@section('title', 'Page Not Found')
@section('content')
<section class="relative min-h-screen flex items-center justify-center bg-[#1E3932]">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-8xl sm:text-9xl font-bold text-white opacity-10" data-aos="fade-up">404</h1>
        <div class="-mt-12" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mt-4">Page Not Found</h2>
            <p class="text-lg text-[rgba(255,255,255,0.70)] mt-4 max-w-md mx-auto">
                The page you're looking for doesn't exist or has been moved.
            </p>
            <div class="flex items-center justify-center gap-4 mt-8">
                <a href="{{ route('home') }}" class="px-8 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95]">
                    Back to Home
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3 border border-white text-white font-semibold rounded-[50px] hover:bg-white hover:text-[#1E3932] transition-all duration-200">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
