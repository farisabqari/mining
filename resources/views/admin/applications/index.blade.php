@extends('admin.layouts.admin')
@section('title', 'Job Applications')
@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-[#006241]">Job Applications</h1>
</div>

@if (session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
@endif

<div class="grid grid-cols-5 gap-3 mb-6">
    @foreach (['pending' => 'Pending', 'review' => 'Review', 'interview' => 'Interview', 'accepted' => 'Accepted', 'rejected' => 'Rejected'] as $key => $label)
    <a href="{{ request()->fullUrlWithQuery(['status' => $key]) }}"
       class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-4 text-center hover:-translate-y-0.5 transition {{ request('status') == $key ? 'ring-2 ring-[#00754A]' : '' }}">
        <p class="text-2xl font-bold text-[#006241]">{{ $statusCounts[$key] }}</p>
        <p class="text-xs text-[rgba(0,0,0,0.58)] mt-1">{{ $label }}</p>
    </a>
    @endforeach
</div>

<div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden">
    <div class="p-4 border-b border-gray-100">
        <form method="GET" class="flex gap-3">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name, email, or position..."
                   class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none text-sm">
            @if(request('status'))
                <input type="hidden" name="status" value="{{ request('status') }}">
            @endif
            <button type="submit" class="px-5 py-2 bg-[#00754A] text-white text-sm font-semibold rounded-[50px] hover:bg-[#006241] transition">Search</button>
            @if(request('search') || request('status'))
                <a href="{{ route('admin.applications.index') }}" class="px-5 py-2 border border-gray-300 text-sm font-semibold rounded-[50px] hover:bg-gray-50 transition">Clear</a>
            @endif
        </form>
    </div>
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Applicant</th>
                <th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Position</th>
                <th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Status</th>
                <th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Date</th>
                <th class="text-right px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($applications as $app)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <p class="font-medium text-[rgba(0,0,0,0.87)]">{{ $app->full_name }}</p>
                    <p class="text-xs text-[rgba(0,0,0,0.58)]">{{ $app->email }}</p>
                </td>
                <td class="px-6 py-4">
                    <p class="text-sm">{{ $app->career->title ?? 'N/A' }}</p>
                    <p class="text-xs text-[rgba(0,0,0,0.58)]">{{ $app->current_position }}</p>
                </td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 text-xs font-semibold rounded-[50px] inline-block
                        @switch($app->status)
                            @case('pending') bg-yellow-50 text-yellow-700 @break
                            @case('review') bg-blue-50 text-blue-700 @break
                            @case('interview') bg-purple-50 text-purple-700 @break
                            @case('accepted') bg-green-50 text-green-700 @break
                            @case('rejected') bg-red-50 text-red-700 @break
                        @endswitch">
                        {{ ucfirst($app->status) }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-[rgba(0,0,0,0.58)]">{{ $app->created_at->format('M d, Y') }}</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.applications.show', $app) }}" class="text-[#00754A] hover:underline text-sm font-medium">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-6 py-4">{{ $applications->withQueryString()->links() }}</div>
</div>
@endsection
