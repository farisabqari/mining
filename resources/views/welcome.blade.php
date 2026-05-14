@extends('layouts.public')

@section('title', 'Home')

@push('styles')
<style>
    .hero-gradient {
        background: linear-gradient(135deg, rgba(30,57,50,0.95) 0%, rgba(0,98,65,0.7) 50%, rgba(0,0,0,0.5) 100%);
    }
    .stat-card:hover {
        transform: translateY(-4px);
    }
    .project-card {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .project-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }
    .section-divider {
        height: 1px;
        background: linear-gradient(to right, transparent, rgba(0,117,74,0.3), transparent);
    }
</style>
@endpush

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=1920&q=80')] bg-cover bg-center">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>
    <div class="relative z-10 text-center max-w-5xl mx-auto px-4 sm:px-6">
        <h1 class="text-5xl sm:text-6xl lg:text-8xl font-bold text-white mb-6 leading-tight" data-aos="fade-up" data-aos-duration="1000">
            {{ $company->hero_title ?? 'Mining Indonesia\'s Future' }}
        </h1>
        <p class="text-xl sm:text-2xl text-[rgba(255,255,255,0.85)] mb-10 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            {{ $company->hero_subtitle ?? 'Sustainable Resource Development for Generations to Come' }}
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="400">
            <a href="#about" class="inline-flex px-8 py-4 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95]">
                Explore Our Operations
            </a>
            <a href="{{ route('contact') }}" class="inline-flex px-8 py-4 border-2 border-white text-white font-semibold rounded-[50px] hover:bg-white hover:text-[#1E3932] transition-all duration-200 active:scale-[0.95]">
                Contact Us
            </a>
        </div>
    </div>
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-8 h-8 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </div>
</section>

{{-- Company Overview --}}
<section id="about" class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">About Us</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-[#006241] mt-3 mb-6 leading-tight">
                    {{ $company->company_name ?? 'Nusantara Mining Corporation' }}
                </h2>
                <p class="text-lg text-[rgba(0,0,0,0.58)] leading-relaxed">
                    {{ $company->description ?? 'Leading Indonesian mining company committed to sustainable resource development.' }}
                </p>
                <a href="{{ route('about') }}" class="inline-flex mt-8 px-8 py-4 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95]">
                    Learn More About Us
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
                <div class="space-y-4">
                    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                        <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <p class="text-2xl font-bold text-[#006241]">25+</p>
                        <p class="text-sm text-[rgba(0,0,0,0.58)]">Years Experience</p>
                    </div>
                    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                        <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <p class="text-2xl font-bold text-[#006241]">6+</p>
                        <p class="text-sm text-[rgba(0,0,0,0.58)]">Active Sites</p>
                    </div>
                </div>
                <div class="space-y-4 mt-8">
                    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                        <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <p class="text-2xl font-bold text-[#006241]">8,000+</p>
                        <p class="text-sm text-[rgba(0,0,0,0.58)]">Employees</p>
                    </div>
                    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                        <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        </div>
                        <p class="text-2xl font-bold text-[#006241]">50+</p>
                        <p class="text-sm text-[rgba(0,0,0,0.58)]">Years Reserves</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Featured Projects --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Our Projects</span>
            <h2 class="text-4xl sm:text-5xl font-bold text-[#006241] mt-3">Featured Mining Projects</h2>
            <p class="text-lg text-[rgba(0,0,0,0.58)] mt-4 max-w-2xl mx-auto">
                Delivering world-class mining projects across the Indonesian archipelago
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
            <div class="project-card bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden group" data-aos="fade-up">
                <div class="relative h-52 overflow-hidden">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <span class="absolute top-3 left-3 px-3 py-1 bg-[#00754A]/90 text-white text-xs font-semibold rounded-[50px]">
                        {{ $project->category }}
                    </span>
                    <span class="absolute top-3 right-3 px-3 py-1 bg-black/50 text-white text-xs rounded-[50px]">
                        {{ $project->year }}
                    </span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-[rgba(0,0,0,0.87)] mb-2 group-hover:text-[#00754A] transition">{{ $project->title }}</h3>
                    <p class="text-sm text-[rgba(0,0,0,0.58)] mb-4 line-clamp-2">{{ Str::limit($project->description, 120) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-[rgba(0,0,0,0.58)]">{{ $project->location }}</span>
                        <span class="text-xs font-semibold text-[#00754A]">{{ $project->production_capacity }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('projects') }}" class="inline-flex px-8 py-4 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95]">
                View All Projects
            </a>
        </div>
    </div>
</section>

{{-- ESG & Sustainability --}}
<section class="py-24 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#cba258] font-semibold text-sm tracking-wider uppercase">Sustainability</span>
            <h2 class="text-4xl sm:text-5xl font-bold text-white mt-3">ESG & Sustainability</h2>
            <p class="text-lg text-[rgba(255,255,255,0.70)] mt-4 max-w-2xl mx-auto">
                Committed to environmental stewardship, social responsibility, and transparent governance
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-[rgba(255,255,255,0.05)] rounded-[12px] p-8 text-center" data-aos="fade-up">
                <div class="w-16 h-16 bg-[#00754A] rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Environmental</h3>
                <p class="text-[rgba(255,255,255,0.70)] text-sm leading-relaxed">
                    Reducing carbon footprint, implementing water recycling, and rehabilitating post-mining land to preserve biodiversity.
                </p>
            </div>
            <div class="bg-[rgba(255,255,255,0.05)] rounded-[12px] p-8 text-center" data-aos="fade-up" data-aos-delay="150">
                <div class="w-16 h-16 bg-[#00754A] rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Social</h3>
                <p class="text-[rgba(255,255,255,0.70)] text-sm leading-relaxed">
                    Empowering local communities through education, healthcare, and economic development programs.
                </p>
            </div>
            <div class="bg-[rgba(255,255,255,0.05)] rounded-[12px] p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-[#00754A] rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Governance</h3>
                <p class="text-[rgba(255,255,255,0.70)] text-sm leading-relaxed">
                    Maintaining transparent governance, ethical business practices, and anti-corruption compliance across all operations.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Latest News --}}
<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Updates</span>
            <h2 class="text-4xl sm:text-5xl font-bold text-[#006241] mt-3">Latest News</h2>
            <p class="text-lg text-[rgba(0,0,0,0.58)] mt-4 max-w-2xl mx-auto">
                Stay informed with the latest developments from Nusantara Mining
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($news as $article)
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden group" data-aos="fade-up">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $article->thumbnail }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <p class="text-xs text-[#00754A] font-semibold mb-2">{{ $article->published_at?->format('M d, Y') }}</p>
                    <h3 class="font-semibold text-[rgba(0,0,0,0.87)] mb-2 group-hover:text-[#00754A] transition">{{ $article->title }}</h3>
                    <p class="text-sm text-[rgba(0,0,0,0.58)] line-clamp-3">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('news') }}" class="inline-flex px-8 py-4 border-2 border-[#00754A] text-[#00754A] font-semibold rounded-[50px] hover:bg-[#00754A] hover:text-white transition-all duration-200 active:scale-[0.95]">
                View All News
            </a>
        </div>
    </div>
</section>
@endsection
