@extends('layouts.public')
@section('title', 'News')
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">News & Updates</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            Latest news and developments from Nusantara Mining
        </p>
    </div>
</section>
<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php $newsList = \App\Models\News::published()->latest()->get(); @endphp
            @foreach ($newsList as $article)
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden group" data-aos="fade-up">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $article->thumbnail }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <p class="text-xs text-[#00754A] font-semibold mb-2">{{ $article->published_at?->format('M d, Y') }}</p>
                    <h3 class="font-semibold text-[rgba(0,0,0,0.87)] mb-2 group-hover:text-[#00754A] transition">{{ $article->title }}</h3>
                    <p class="text-sm text-[rgba(0,0,0,0.58)] line-clamp-3">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
