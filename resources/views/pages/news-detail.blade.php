@extends('layouts.public')
@section('title', $article->title)
@section('meta_description', Str::limit(strip_tags($article->content), 160))
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('news') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white mb-6 inline-block">&larr; Back to News</a>
        @if ($article->published_at)
            <p class="text-[#00754A] font-semibold text-sm mt-6">{{ $article->published_at->format('M d, Y') }}</p>
        @endif
        <h1 class="text-4xl sm:text-5xl font-bold text-white mt-2" data-aos="fade-up">{{ $article->title }}</h1>
    </div>
</section>
<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if ($article->thumbnail)
        <div class="rounded-[12px] overflow-hidden mb-8 shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)]" data-aos="fade-up">
            <img src="{{ $article->thumbnail }}" alt="{{ $article->title }}" class="w-full h-auto">
        </div>
        @endif
        <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8 sm:p-12" data-aos="fade-up">
            <div class="prose prose-lg max-w-none text-[rgba(0,0,0,0.70)] leading-relaxed">
                {!! nl2br(e($article->content)) !!}
            </div>
        </div>
    </div>
</section>
@endsection
