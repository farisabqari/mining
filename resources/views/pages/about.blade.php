@extends('layouts.public')
@section('title', 'About Us')
@section('meta_description', 'Learn about Nusantara Mining Corporation - our story, vision, mission, leadership, and commitment to sustainable mining excellence in Indonesia.')
@push('styles')
<style>
    .timeline-line {
        background: linear-gradient(to bottom, #00754A, #006241);
    }
    .timeline-dot {
        box-shadow: 0 0 0 4px rgba(0, 117, 74, 0.2);
    }
</style>
@endpush
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">About Us</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            Leading Indonesia's mining industry with excellence, integrity, and sustainability
        </p>
    </div>
</section>

<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Company Profile</span>
                <h2 class="text-4xl font-bold text-[#006241] mt-3 mb-6">Our Story</h2>
                <p class="text-lg text-[rgba(0,0,0,0.58)] leading-relaxed">
                    Founded with a vision to become Indonesia's most respected mining company, Nusantara Mining Corporation has grown from a single exploration project into a diversified mining enterprise with operations spanning the archipelago.
                </p>
                <p class="text-lg text-[rgba(0,0,0,0.58)] leading-relaxed mt-4">
                    Our commitment to operational excellence, environmental stewardship, and community development has positioned us as a trusted partner in Indonesia's resource sector.
                </p>
            </div>
            <div data-aos="fade-left">
                <img src="https://picsum.photos/seed/612/800/600" alt="Mining operation" class="rounded-[12px] shadow-lg w-full">
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Leadership</span>
            <h2 class="text-4xl font-bold text-[#006241] mt-3">CEO Message</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
            <div class="lg:col-span-1" data-aos="fade-right">
                <div class="rounded-[12px] overflow-hidden shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)]">
                    <img src="https://picsum.photos/seed/243/800/600" alt="CEO" class="w-full h-80 object-cover object-center">
                </div>
            </div>
            <div class="lg:col-span-2" data-aos="fade-left">
                <blockquote class="text-2xl sm:text-3xl font-light text-[rgba(0,0,0,0.70)] leading-relaxed italic">
                    "Our vision is to build a mining company that Indonesians can be proud of — one that sets global standards in safety, environmental stewardship, and community partnership."
                </blockquote>
                <div class="mt-6">
                    <p class="font-semibold text-[#006241] text-lg">Ir. Andi Pratama</p>
                    <p class="text-[rgba(0,0,0,0.58)]">President Director & CEO</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-[#d4e9e2]/20 rounded-[12px] p-8" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-[#006241] mb-4">Our Vision</h3>
                <p class="text-lg text-[rgba(0,0,0,0.58)] leading-relaxed">
                    To be Indonesia's most respected and sustainable mining company, setting global standards in responsible resource development and creating lasting value for all stakeholders.
                </p>
            </div>
            <div class="bg-[#d4e9e2]/20 rounded-[12px] p-8" data-aos="fade-up" data-aos-delay="150">
                <h3 class="text-2xl font-bold text-[#006241] mb-4">Our Mission</h3>
                <ul class="space-y-2 text-lg text-[rgba(0,0,0,0.58)]">
                    <li class="flex items-start gap-2">• Operate with the highest standards of safety and environmental responsibility</li>
                    <li class="flex items-start gap-2">• Deliver superior value through operational excellence</li>
                    <li class="flex items-start gap-2">• Develop our people and empower local communities</li>
                    <li class="flex items-start gap-2">• Maintain transparent governance and ethical practices</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Milestones</span>
            <h2 class="text-4xl font-bold text-white mt-3">Our Journey</h2>
        </div>
        <div class="relative">
            <div class="absolute left-1/2 -translate-x-px top-0 bottom-0 w-0.5 bg-[rgba(255,255,255,0.15)] hidden lg:block"></div>
            @php
                $milestones = [
                    ['year' => '2010', 'title' => 'Company Founded', 'desc' => 'Nusantara Mining Corporation established with a focus on mineral exploration in Eastern Indonesia.', 'align' => 'left'],
                    ['year' => '2013', 'title' => 'First Production', 'desc' => 'Commenced commercial production at our first gold mining operation in West Nusa Tenggara.', 'align' => 'right'],
                    ['year' => '2016', 'title' => 'Strategic Expansion', 'desc' => 'Acquired copper and nickel exploration assets, diversifying our commodity portfolio across the archipelago.', 'align' => 'left'],
                    ['year' => '2019', 'title' => 'ESG Milestone', 'desc' => 'Launched comprehensive sustainability framework with measurable targets for carbon reduction and community development.', 'align' => 'right'],
                    ['year' => '2022', 'title' => 'Operational Excellence', 'desc' => 'Achieved record production levels while maintaining zero lost-time incidents across all operations.', 'align' => 'left'],
                    ['year' => '2025', 'title' => 'Global Recognition', 'desc' => 'Recognized as one of Indonesia\'s top mining companies with ISO certifications and international partnerships.', 'align' => 'right'],
                ];
            @endphp
            @foreach ($milestones as $index => $m)
            <div class="relative lg:grid lg:grid-cols-2 {{ $m['align'] === 'right' ? '' : '' }} py-8" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="{{ $m['align'] === 'right' ? 'lg:col-start-2' : 'lg:pr-12 lg:text-right' }}">
                    <div class="bg-white/5 rounded-[12px] p-6 border border-[rgba(255,255,255,0.1)] hover:bg-white/10 transition">
                        <span class="text-[#00754A] font-bold text-2xl">{{ $m['year'] }}</span>
                        <h3 class="text-white font-semibold text-lg mt-1">{{ $m['title'] }}</h3>
                        <p class="text-[rgba(255,255,255,0.70)] text-sm mt-2">{{ $m['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Values</span>
            <h2 class="text-4xl font-bold text-[#006241] mt-3">Our Core Values</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $values = [
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Safety First', 'desc' => 'Zero harm is our commitment to every employee and contractor.'],
                    ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Excellence', 'desc' => 'Continuous improvement in everything we do.'],
                    ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Sustainability', 'desc' => 'Balancing economic growth with environmental care.'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857', 'title' => 'Integrity', 'desc' => 'Honesty and transparency in all our dealings.'],
                ];
            @endphp
            @foreach ($values as $value)
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8 text-center hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
                <div class="w-14 h-14 bg-[#d4e9e2] rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $value['icon'] }}"/></svg>
                </div>
                <h3 class="text-lg font-semibold text-[#006241] mb-2">{{ $value['title'] }}</h3>
                <p class="text-sm text-[rgba(0,0,0,0.58)]">{{ $value['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Certifications</span>
            <h2 class="text-4xl font-bold text-[#006241] mt-3">Certifications & Standards</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
                $certs = [
                    ['name' => 'ISO 14001', 'desc' => 'Environmental Management', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['name' => 'ISO 45001', 'desc' => 'Occupational Health & Safety', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['name' => 'ISO 9001', 'desc' => 'Quality Management', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['name' => 'ICMM', 'desc' => 'Sustainable Mining Principles', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                ];
            @endphp
            @foreach ($certs as $cert)
            <div class="bg-[#d4e9e2]/20 rounded-[12px] p-6 text-center hover:bg-[#d4e9e2]/40 transition" data-aos="fade-up">
                <div class="w-12 h-12 bg-[#00754A] rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $cert['icon'] }}"/></svg>
                </div>
                <h3 class="font-semibold text-[#006241]">{{ $cert['name'] }}</h3>
                <p class="text-xs text-[rgba(0,0,0,0.58)] mt-1">{{ $cert['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Leadership</span>
            <h2 class="text-4xl font-bold text-[#006241] mt-3">Our Leadership Team</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $leaders = \App\Models\Team::all();
            @endphp
            @foreach ($leaders as $leader)
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden group" data-aos="fade-up">
                <div class="h-72 overflow-hidden">
                    <img src="{{ $leader->photo }}" alt="{{ $leader->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-[rgba(0,0,0,0.87)]">{{ $leader->name }}</h3>
                    <p class="text-sm text-[#00754A] font-medium">{{ $leader->position }}</p>
                    <p class="text-sm text-[rgba(0,0,0,0.58)] mt-3 line-clamp-3">{{ $leader->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
