<aside class="w-64 bg-[#1E3932] text-white flex flex-col shrink-0">
    <div class="p-6 border-b border-[rgba(255,255,255,0.1)]">
        <h1 class="text-xl font-bold">Nusantara Mining</h1>
        <p class="text-sm text-[rgba(255,255,255,0.70)]">Admin Panel</p>
    </div>
    <nav class="flex-1 overflow-y-auto p-4 space-y-1">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.dashboard') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            Dashboard
        </a>
        <a href="{{ route('admin.company.edit', 1) }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.company.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            Company Profile
        </a>
        <a href="{{ route('admin.projects.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.projects.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
            Projects
        </a>
        <a href="{{ route('admin.operations.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.operations.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            Operations
        </a>
        <a href="{{ route('admin.news.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.news.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            News
        </a>
        <a href="{{ route('admin.teams.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.teams.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            Teams
        </a>
        <a href="{{ route('admin.galleries.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.galleries.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            Gallery
        </a>
        <a href="{{ route('admin.careers.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.careers.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            Careers
        </a>
        <a href="{{ route('admin.applications.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.applications.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Applications
        </a>
        <a href="{{ route('admin.contacts.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.contacts.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            Messages
        </a>
        <a href="{{ route('admin.reports.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition {{ request()->routeIs('admin.reports.*') ? 'bg-[rgba(255,255,255,0.1)] font-semibold' : '' }}">
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Reports
        </a>
    </nav>
    <div class="p-4 border-t border-[rgba(255,255,255,0.1)]">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-[rgba(255,255,255,0.1)] transition w-full text-left">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                Sign Out
            </button>
        </form>
    </div>
</aside>
