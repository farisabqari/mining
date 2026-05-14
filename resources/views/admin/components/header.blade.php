<header class="bg-white border-b border-gray-200 px-4 sm:px-6 py-4 flex items-center justify-between">
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = true" class="lg:hidden text-gray-500 hover:text-[#00754A] transition" aria-label="Open sidebar">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        <div>
            <p class="text-xs sm:text-sm text-[rgba(0,0,0,0.58)]">Welcome back,</p>
            <p class="text-sm sm:font-semibold text-[rgba(0,0,0,0.87)] leading-none mt-1">{{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="flex items-center gap-4">
        <a href="{{ url('/') }}" target="_blank" class="text-xs sm:text-sm text-[#00754A] font-semibold hover:underline">View Website</a>
    </div>
</header>
