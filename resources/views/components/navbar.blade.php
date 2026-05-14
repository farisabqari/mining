@php
    $company = \App\Models\CompanyProfile::first();
    $navItems = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Operations', 'route' => 'operations'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'Sustainability', 'route' => 'sustainability'],
        ['label' => 'News', 'route' => 'news'],
        ['label' => 'Gallery', 'route' => 'gallery'],
        ['label' => 'Careers', 'route' => 'careers'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 bg-[#1E3932] shadow-[0_1px_3px_rgba(0,0,0,0.1),0_2px_2px_rgba(0,0,0,0.06),0_0_2px_rgba(0,0,0,0.07)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-[83px]">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logomii.png') }}" alt="Logo" class="h-10 w-auto">
                <span class="text-white font-semibold text-lg hidden sm:block">{{ $company?->company_name ?? 'Nusantara Mining' }}</span>
            </div>

            <div class="hidden lg:flex items-center gap-1">
                @foreach ($navItems as $item)
                    <a href="{{ route($item['route']) }}"
                        class="px-3 py-2 text-sm text-[rgba(255,255,255,0.70)] hover:text-white hover:bg-[rgba(255,255,255,0.1)] rounded-[50px] transition-all duration-200 {{ request()->routeIs($item['route']) ? 'text-white bg-[rgba(255,255,255,0.1)]' : '' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.login') }}" class="hidden sm:inline-flex px-4 py-2 text-sm font-semibold text-white border border-white rounded-[50px] hover:bg-white hover:text-[#1E3932] transition-all duration-200">
                    Admin
                </a>
                <button id="mobile-menu-btn" class="lg:hidden p-2 text-white hover:bg-[rgba(255,255,255,0.1)] rounded-lg transition" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
    </div>
</nav>

{{-- Mobile menu — outside <nav> so it does not break HTML structure --}}
<div id="mobile-backdrop" class="hidden fixed inset-0 bg-black/50 lg:hidden" style="z-index: 49; top: 64px;" aria-hidden="true"></div>
<div id="mobile-menu" class="hidden fixed left-0 right-0 bg-[#1E3932] border-t border-[rgba(255,255,255,0.1)] shadow-2xl lg:hidden" style="top: 64px; z-index: 50;">
    <div class="px-4 py-4 space-y-1 max-h-[calc(100vh-80px)] overflow-y-auto">
        @foreach ($navItems as $item)
            <a href="{{ route($item['route']) }}"
                class="block px-4 py-3 text-[rgba(255,255,255,0.70)] hover:text-white hover:bg-[rgba(255,255,255,0.1)] rounded-lg transition">
                {{ $item['label'] }}
            </a>
        @endforeach
        <hr class="border-[rgba(255,255,255,0.1)] my-2">
        <a href="{{ route('admin.login') }}" class="block px-4 py-3 text-[#00754A] font-semibold hover:bg-[rgba(255,255,255,0.1)] rounded-lg transition">
            Admin Panel
        </a>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const backdrop = document.getElementById('mobile-backdrop');

        function toggleMenu() {
            menu.classList.toggle('hidden');
            backdrop.classList.toggle('hidden');
        }

        if (menuBtn) menuBtn.addEventListener('click', toggleMenu);
        if (backdrop) backdrop.addEventListener('click', toggleMenu);

        document.querySelectorAll('#mobile-menu a').forEach(function(link) {
            link.addEventListener('click', function() {
                menu.classList.add('hidden');
                backdrop.classList.add('hidden');
            });
        });
    });
</script>
@endpush
