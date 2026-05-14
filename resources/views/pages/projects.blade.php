@extends('layouts.public')
@section('title', 'Projects')
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">Our Projects</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            Delivering world-class mining projects across the Indonesian archipelago
        </p>
    </div>
</section>
<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php $projects = \App\Models\Project::all(); @endphp
            @foreach ($projects as $project)
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden group" data-aos="fade-up">
                <div class="h-52 overflow-hidden relative">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    <span class="absolute top-3 left-3 px-3 py-1 bg-[#00754A]/90 text-white text-xs font-semibold rounded-[50px]">{{ $project->category }}</span>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-[rgba(0,0,0,0.87)] mb-2">{{ $project->title }}</h3>
                    <p class="text-sm text-[rgba(0,0,0,0.58)] mb-4 line-clamp-3">{{ $project->description }}</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-xs text-[rgba(0,0,0,0,0.58)]">{{ $project->location }}</span>
                        <span class="text-xs font-semibold text-[#00754A]">{{ $project->status }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
