@php
    $company = \App\Models\CompanyProfile::first();
@endphp
<footer class="bg-[#1E3932] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-[#00754A] rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">N</span>
                    </div>
                    <span class="text-white font-semibold text-lg">{{ $company?->company_name ?? 'Nusantara Mining' }}</span>
                </div>
                <p class="text-[rgba(255,255,255,0.70)] text-sm leading-relaxed">
                    {{ $company?->tagline ?? 'Powering Indonesia\'s Future Through Sustainable Mining' }}
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">About Us</a></li>
                    <li><a href="{{ route('operations') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Operations</a></li>
                    <li><a href="{{ route('projects') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Projects</a></li>
                    <li><a href="{{ route('careers') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Careers</a></li>
                    <li><a href="{{ route('contact') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-white mb-4">Our Operations</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Gold Mining</a></li>
                    <li><a href="#" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Copper Mining</a></li>
                    <li><a href="#" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Nickel Processing</a></li>
                    <li><a href="#" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Coal Mining</a></li>
                    <li><a href="#" class="text-[rgba(255,255,255,0.70)] hover:text-white transition">Bauxite & Alumina</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-white mb-4">Contact</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-[#00754A] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-[rgba(255,255,255,0.70)]">{{ $company?->address ?? 'Jakarta, Indonesia' }}</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-[#00754A] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span class="text-[rgba(255,255,255,0.70)]">{{ $company?->email ?? 'corporate@nusantaramining.co.id' }}</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-[#00754A] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span class="text-[rgba(255,255,255,0.70)]">{{ $company?->phone ?? '+62 21 5082 9000' }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-[rgba(255,255,255,0.1)] mt-12 pt-8 text-center">
            <p class="text-sm text-[rgba(255,255,255,0.70)]">
                &copy; {{ date('Y') }} {{ $company?->company_name ?? 'Nusantara Mining Corporation' }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
