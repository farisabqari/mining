@extends('admin.layouts.admin')
@section('title', 'Messages')
@section('content')
<h1 class="text-2xl font-bold text-[#006241] mb-6">Contact Messages</h1>
@if (session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
@endif
<div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr><th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">From</th><th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Subject</th><th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Date</th><th class="text-right px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Actions</th></tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($messages as $msg)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <p class="font-medium">{{ $msg->name }}</p>
                    <p class="text-xs text-[rgba(0,0,0,0.58)]">{{ $msg->email }}</p>
                </td>
                <td class="px-6 py-4 text-[rgba(0,0,0,0.58)]">{{ $msg->subject ?? 'No subject' }}</td>
                <td class="px-6 py-4 text-sm text-[rgba(0,0,0,0.58)]">{{ $msg->created_at->format('M d, Y H:i') }}</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.contacts.show', $msg) }}" class="text-[#00754A] hover:underline text-sm font-medium mr-3">View</a>
                    <form method="POST" action="{{ route('admin.contacts.destroy', $msg) }}" class="inline" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline text-sm font-medium">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-6 py-4">{{ $messages->links() }}</div>
</div>
@endsection
