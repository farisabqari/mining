@extends('layouts.public')
@section('title', 'Mining Sites')
@section('meta_description', 'Explore Nusantara Mining Corporation\'s operational mining sites across the Indonesian archipelago. Interactive map with production data and site information.')
@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
    #mining-map { height: 600px; border-radius: 12px; z-index: 1; }
    .custom-popup .leaflet-popup-content-wrapper { background: #1E3932; color: white; border-radius: 12px; padding: 0; }
    .custom-popup .leaflet-popup-tip { background: #1E3932; }
    .custom-popup .leaflet-popup-content { margin: 0; min-width: 250px; }
    .leaflet-popup-close-button { color: white !important; }
</style>
@endpush
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">Our Mining Sites</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            Strategic operations across the Indonesian archipelago
        </p>
    </div>
</section>

<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6 text-center" data-aos="fade-up">
                <p class="text-3xl font-bold text-[#006241]" data-counter="6">0</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Active Mining Sites</p>
            </div>
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-3xl font-bold text-[#006241]" data-counter="4">0</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Commodities</p>
            </div>
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <p class="text-3xl font-bold text-[#006241]" data-counter="25">0</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Years of Operations</p>
            </div>
        </div>

        <div id="mining-map" class="shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)]" data-aos="fade-up"></div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Operations</span>
            <h2 class="text-4xl font-bold text-[#006241] mt-3">Our Mining Sites</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $sites = [
                    ['name' => 'Batu Hijau Mine', 'commodity' => 'Gold, Copper', 'location' => 'West Nusa Tenggara', 'status' => 'Active', 'capacity' => '120M tons/year', 'image' => 'https://picsum.photos/seed/192/800/600', 'lat' => -8.5269, 'lng' => 118.3142],
                    ['name' => 'Sorowako Mine', 'commodity' => 'Nickel', 'location' => 'South Sulawesi', 'status' => 'Active', 'capacity' => '80M tons/year', 'image' => 'https://picsum.photos/seed/284/800/600', 'lat' => -2.5277, 'lng' => 121.3600],
                    ['name' => 'Grasberg Mine', 'commodity' => 'Gold, Copper', 'location' => 'Papua', 'status' => 'Active', 'capacity' => '200M tons/year', 'image' => 'https://picsum.photos/seed/983/800/600', 'lat' => -4.0523, 'lng' => 137.1170],
                    ['name' => 'Tanjung Enim', 'commodity' => 'Coal', 'location' => 'South Sumatra', 'status' => 'Active', 'capacity' => '50M tons/year', 'image' => 'https://picsum.photos/seed/58/800/600', 'lat' => -3.5222, 'lng' => 103.9300],
                    ['name' => 'Kendawangan', 'commodity' => 'Bauxite', 'location' => 'West Kalimantan', 'status' => 'Development', 'capacity' => '30M tons/year', 'image' => 'https://picsum.photos/seed/218/800/600', 'lat' => -1.1833, 'lng' => 110.2333],
                    ['name' => 'Weda Bay', 'commodity' => 'Nickel', 'location' => 'North Maluku', 'status' => 'Active', 'capacity' => '60M tons/year', 'image' => 'https://picsum.photos/seed/594/800/600', 'lat' => 0.5667, 'lng' => 127.5333],
                ];
            @endphp
            @foreach ($sites as $site)
            <div class="bg-[#f2f0eb] rounded-[12px] overflow-hidden group border border-gray-200 hover:border-[#00754A] transition" data-aos="fade-up">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $site['image'] }}" alt="{{ $site['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="font-semibold text-[rgba(0,0,0,0.87)] group-hover:text-[#00754A] transition">{{ $site['name'] }}</h3>
                        <span class="px-2 py-1 text-xs font-semibold rounded-[50px] {{ $site['status'] == 'Active' ? 'bg-[#d4e9e2] text-[#00754A]' : 'bg-yellow-100 text-yellow-800' }}">{{ $site['status'] }}</span>
                    </div>
                    <p class="text-sm text-[#00754A] font-medium">{{ $site['commodity'] }}</p>
                    <p class="text-xs text-[rgba(0,0,0,0.58)] mt-2">{{ $site['location'] }}</p>
                    <p class="text-xs text-[rgba(0,0,0,0.58)]">Capacity: {{ $site['capacity'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const map = L.map('mining-map', {
        center: [-2.5, 118.5],
        zoom: 5,
        zoomControl: false,
    });

    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        subdomains: 'abcd',
        maxZoom: 19,
    }).addTo(map);

    const sites = @json($sites);

    const customIcon = L.divIcon({
        className: 'custom-marker',
        html: `<div style="background:#00754A;width:16px;height:16px;border-radius:50%;border:3px solid white;box-shadow:0 2px 8px rgba(0,0,0,0.4);"></div>`,
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -10],
    });

    sites.forEach(site => {
        const marker = L.marker([site.lat, site.lng], { icon: customIcon }).addTo(map);

        const popupContent = `
            <div style="padding:16px;min-width:220px;">
                <img src="${site.image}" alt="${site.name}" style="width:100%;height:120px;object-fit:cover;border-radius:8px;margin-bottom:12px;">
                <h3 style="font-size:16px;font-weight:600;margin:0 0 4px;">${site.name}</h3>
                <p style="font-size:13px;color:#00754A;font-weight:500;margin:0 0 8px;">${site.commodity}</p>
                <div style="display:flex;justify-content:space-between;font-size:12px;color:rgba(255,255,255,0.7);">
                    <span>📍 ${site.location}</span>
                    <span style="background:${site.status === 'Active' ? '#00754A' : '#b8860b'};padding:2px 8px;border-radius:50px;font-weight:600;color:white;">${site.status}</span>
                </div>
                <p style="font-size:12px;color:rgba(255,255,255,0.7);margin-top:8px;">⚡ ${site.capacity}</p>
            </div>
        `;

        marker.bindPopup(popupContent, {
            className: 'custom-popup',
            maxWidth: 300,
        });

        marker.on('mouseover', function() {
            this.openPopup();
        });
    });

    setTimeout(() => map.invalidateSize(), 500);
});
</script>
@endpush
