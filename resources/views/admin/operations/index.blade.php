@extends('admin.layouts.admin')
@section('title', 'Operations')
@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-[#006241]">Operations</h1>
    <a href="{{ route('admin.operations.create') }}" class="px-6 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">+ New Operation</a>
</div>
@if (session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
@endif
<div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Title</th>
                <th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Capacity</th>
                <th class="text-left px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Location</th>
                <th class="text-right px-6 py-4 text-sm font-semibold text-[rgba(0,0,0,0.58)]">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($operations as $op)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 font-medium">{{ $op->title }}</td>
                <td class="px-6 py-4 text-[rgba(0,0,0,0.58)]">{{ $op->capacity }}</td>
                <td class="px-6 py-4 text-[rgba(0,0,0,0.58)]">{{ $op->site_location }}</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('admin.operations.edit', $op) }}" class="text-[#00754A] hover:underline text-sm font-medium mr-3">Edit</a>
                    <form method="POST" action="{{ route('admin.operations.destroy', $op) }}" class="inline" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline text-sm font-medium">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="px-6 py-4">{{ $operations->links() }}</div>
</div>
@endsection
