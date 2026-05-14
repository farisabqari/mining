@extends('admin.layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-[#006241]">Dashboard</h1>
    <p class="text-[rgba(0,0,0,0.58)]">{{ now()->format('l, F j, Y') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">Active Projects</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['active_projects'] }}</p>
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">Total Projects</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['projects'] }}</p>
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">News Articles</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['news'] }}</p>
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">Open Positions</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['open_positions'] }}</p>
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">Applications</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['applications'] }}</p>
                @if($stats['pending_applications'] > 0)
                    <p class="text-xs text-orange-600 mt-1">{{ $stats['pending_applications'] }} pending review</p>
                @endif
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">Messages</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['messages'] }}</p>
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">Gallery Photos</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['galleries'] }}</p>
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[rgba(0,0,0,0.58)] text-sm">Reports</p>
                <p class="text-3xl font-bold text-[#006241] mt-1">{{ $stats['reports'] }}</p>
            </div>
            <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <h2 class="text-xl font-semibold text-[#006241] mb-4">Quick Actions</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="{{ route('admin.projects.index') }}" class="block p-4 border border-gray-200 rounded-lg hover:border-[#00754A] hover:bg-[#d4e9e2]/20 transition">
                <p class="font-semibold text-[rgba(0,0,0,0.87)]">Manage Projects</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Add or edit mining projects</p>
            </a>
            <a href="{{ route('admin.news.index') }}" class="block p-4 border border-gray-200 rounded-lg hover:border-[#00754A] hover:bg-[#d4e9e2]/20 transition">
                <p class="font-semibold text-[rgba(0,0,0,0.87)]">Manage News</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Create and edit news articles</p>
            </a>
            <a href="{{ route('admin.contacts.index') }}" class="block p-4 border border-gray-200 rounded-lg hover:border-[#00754A] hover:bg-[#d4e9e2]/20 transition">
                <p class="font-semibold text-[rgba(0,0,0,0.87)]">View Messages</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Check contact messages</p>
            </a>
            <a href="{{ route('admin.applications.index') }}" class="block p-4 border border-gray-200 rounded-lg hover:border-[#00754A] hover:bg-[#d4e9e2]/20 transition">
                <p class="font-semibold text-[rgba(0,0,0,0.87)]">Applications</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Review job applications</p>
            </a>
            <a href="{{ route('admin.careers.index') }}" class="block p-4 border border-gray-200 rounded-lg hover:border-[#00754A] hover:bg-[#d4e9e2]/20 transition">
                <p class="font-semibold text-[rgba(0,0,0,0.87)]">Manage Careers</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Post and edit job openings</p>
            </a>
            <a href="{{ route('admin.company.edit', 1) }}" class="block p-4 border border-gray-200 rounded-lg hover:border-[#00754A] hover:bg-[#d4e9e2]/20 transition">
                <p class="font-semibold text-[rgba(0,0,0,0.87)]">Company Profile</p>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mt-1">Update company information</p>
            </a>
        </div>
    </div>

    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
        <h2 class="text-xl font-semibold text-[#006241] mb-4">System Overview</h2>
        <div class="space-y-4">
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-[rgba(0,0,0,0.58)]">Total Content Items</span>
                <span class="font-semibold text-[#006241]">{{ $stats['projects'] + $stats['news'] + $stats['galleries'] + $stats['reports'] }}</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-[rgba(0,0,0,0.58)]">Active Projects Rate</span>
                <span class="font-semibold text-[#006241]">{{ $stats['projects'] > 0 ? round(($stats['active_projects'] / $stats['projects']) * 100) : 0 }}%</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-[rgba(0,0,0,0.58)]">Pending Applications</span>
                <span class="font-semibold text-[#006241]">{{ $stats['pending_applications'] }}</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-[rgba(0,0,0,0.58)]">Open Positions</span>
                <span class="font-semibold text-[#006241]">{{ $stats['open_positions'] }}</span>
            </div>
            <div class="flex items-center justify-between py-3">
                <span class="text-[rgba(0,0,0,0.58)]">Unread Messages</span>
                <span class="font-semibold text-[#006241]">{{ $stats['messages'] }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
