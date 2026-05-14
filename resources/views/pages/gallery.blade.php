@extends('layouts.public')
@section('title', 'Gallery')
@section('meta_description', 'Explore Nusantara Mining Corporation\'s visual journey through our operations, community initiatives, and the landscapes that define our mining heritage.')
@push('styles')
<style>
    .gallery-item { cursor: pointer; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); }
    .gallery-item:hover { transform: translateY(-4px); }
    .lightbox { position: fixed; inset: 0; z-index: 70; background: rgba(0,0,0,0.95); display: none; align-items: center; justify-content: center; }
    .lightbox.active { display: flex; }
    .lightbox img { max-width: 90vw; max-height: 85vh; border-radius: 12px; }
    .lightbox-close { position: absolute; top: 20px; right: 30px; color: white; font-size: 40px; cursor: pointer; opacity: 0.7; transition: opacity 0.2s; }
    .lightbox-close:hover { opacity: 1; }
    .lightbox-nav { position: absolute; top: 50%; transform: translateY(-50%); color: white; font-size: 40px; cursor: pointer; opacity: 0.5; transition: opacity 0.2s; padding: 20px; }
    .lightbox-nav:hover { opacity: 1; }
    .lightbox-prev { left: 10px; }
    .lightbox-next { right: 10px; }
    @media (max-width: 768px) { .lightbox-nav { font-size: 24px; } }
</style>
@endpush
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">Gallery</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            A visual journey through our operations and community initiatives
        </p>
    </div>
</section>
<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-3 mb-10" data-aos="fade-up" id="gallery-filters">
            @php
                $categories = \App\Models\Gallery::select('category')->distinct()->pluck('category');
            @endphp
            <button class="filter-btn px-5 py-2 bg-[#00754A] text-white text-sm font-semibold rounded-[50px] hover:bg-[#006241] transition" data-filter="all">All</button>
            @foreach ($categories as $cat)
            <button class="filter-btn px-5 py-2 border border-[#00754A] text-[#00754A] text-sm font-semibold rounded-[50px] hover:bg-[#00754A] hover:text-white transition" data-filter="{{ $cat }}">{{ ucfirst($cat) }}</button>
            @endforeach
        </div>
        <div class="gallery-masonry columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
            @php $galleries = \App\Models\Gallery::all(); @endphp
            @foreach ($galleries as $gallery)
            <div class="gallery-item break-inside-avoid overflow-hidden rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] group" data-aos="fade-up" data-category="{{ $gallery->category }}">
                <div class="relative overflow-hidden">
                    <img src="{{ $gallery->image }}" alt="{{ $gallery->title }}" class="w-full group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <div>
                            <p class="text-white font-semibold">{{ $gallery->title }}</p>
                            <p class="text-white/70 text-sm">{{ $gallery->category }}</p>
                        </div>
                    </div>
                    <button class="absolute top-3 right-3 w-10 h-10 bg-black/50 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-[#00754A]" onclick="openLightbox('{{ $gallery->image }}')">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <span class="lightbox-nav lightbox-prev" onclick="navigateLightbox(-1)">&#8249;</span>
    <img id="lightbox-img" src="" alt="">
    <span class="lightbox-nav lightbox-next" onclick="navigateLightbox(1)">&#8250;</span>
</div>
@endsection

@push('scripts')
<script>
    let currentLightboxIndex = 0;
    const galleryImages = [];document.querySelectorAll('[data-category]').forEach(el => { const img = el.querySelector('img'); if(img) galleryImages.push(img.src); });

    function openLightbox(src) {
        currentLightboxIndex = galleryImages.indexOf(src);
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox(e) {
        if (e && e.target !== e.currentTarget) return;
        document.getElementById('lightbox').classList.remove('active');
        document.body.style.overflow = '';
    }

    function navigateLightbox(dir) {
        currentLightboxIndex = (currentLightboxIndex + dir + galleryImages.length) % galleryImages.length;
        document.getElementById('lightbox-img').src = galleryImages[currentLightboxIndex];
    }

    document.addEventListener('keydown', function(e) {
        if (!document.getElementById('lightbox').classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') navigateLightbox(-1);
        if (e.key === 'ArrowRight') navigateLightbox(1);
    });

    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('bg-[#00754A]', 'text-white');
                b.classList.add('border', 'border-[#00754A]', 'text-[#00754A]');
            });
            this.classList.add('bg-[#00754A]', 'text-white');
            this.classList.remove('border', 'border-[#00754A]', 'text-[#00754A]');

            const filter = this.dataset.filter;
            document.querySelectorAll('[data-category]').forEach(el => {
                if (filter === 'all' || el.dataset.category === filter) {
                    el.style.display = '';
                } else {
                    el.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush
