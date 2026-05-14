@extends('layouts.public')
@section('title', 'Application Submitted')
@section('content')
<section class="min-h-screen flex items-center justify-center bg-[#1E3932] pt-20">
    <div class="max-w-lg mx-auto px-4 text-center" data-aos="fade-up">
        <div class="w-20 h-20 bg-[#00754A] rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h1 class="text-4xl font-bold text-white mb-4">Application Submitted!</h1>
        <p class="text-lg text-[rgba(255,255,255,0.70)] mb-8">
            Thank you for applying for <strong class="text-white">{{ $career->title }}</strong>.
            Our recruitment team will review your application and get back to you soon.
        </p>
        <div class="bg-[rgba(255,255,255,0.05)] rounded-[12px] p-6 mb-8 text-left">
            <p class="text-sm text-[rgba(255,255,255,0.70)] mb-1">A confirmation email has been sent to:</p>
            <p class="font-semibold text-white">{{ session('email') ?? 'your email address' }}</p>
        </div>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('careers') }}" class="px-8 py-4 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">
                View More Positions
            </a>
            <a href="{{ route('home') }}" class="px-8 py-4 border-2 border-white text-white font-semibold rounded-[50px] hover:bg-white hover:text-[#1E3932] transition active:scale-[0.95]">
                Go to Homepage
            </a>
        </div>
    </div>
</section>
@endsection
