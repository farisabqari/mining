<header class="bg-white border-b border-gray-200 px-6 py-4">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm text-[rgba(0,0,0,0.58)]">Welcome back,</p>
            <p class="font-semibold text-[rgba(0,0,0,0.87)]">{{ Auth::user()->name }}</p>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ url('/') }}" target="_blank" class="text-sm text-[#00754A] hover:underline">View Website</a>
        </div>
    </div>
</header>
