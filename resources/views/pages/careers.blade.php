@extends('layouts.public')
@section('title', 'Careers')
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">Join Our Team</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            Build your career with Indonesia's leading mining company
        </p>
    </div>
</section>
<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(session('success'))
        <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-[12px]" data-aos="fade-up">{{ session('success') }}</div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php $careers = \App\Models\Career::open()->get(); @endphp
            @forelse ($careers as $career)
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6 hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="fade-up">
                <div class="flex-1">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-lg font-semibold text-[rgba(0,0,0,0.87)]">{{ $career->title }}</h3>
                        <span class="px-3 py-1 bg-[#d4e9e2] text-[#00754A] text-xs font-semibold rounded-[50px] whitespace-nowrap">{{ $career->department }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-[rgba(0,0,0,0.58)] mb-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        {{ $career->location }}
                    </div>
                    <p class="text-sm text-[rgba(0,0,0,0.58)] mb-4 line-clamp-3">{{ $career->description }}</p>
                </div>
                <a href="{{ route('apply.form', $career) }}"
                   class="block w-full text-center px-4 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95]">
                    Apply Now
                </a>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-lg text-[rgba(0,0,0,0.58)]">No open positions at this time. Please check back later.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
