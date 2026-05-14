@extends('admin.layouts.admin')
@section('title', 'Gallery')
@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-[#006241]">Gallery</h1>
    <a href="{{ route('admin.galleries.create') }}" class="px-6 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">+ Add Image</a>
</div>
@if (session('success'))
    <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
@endif
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach ($galleries as $gallery)
    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden group">
        <div class="h-40 overflow-hidden"><img src="{{ $gallery->image }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover"></div>
        <div class="p-4">
            <p class="font-medium text-sm truncate">{{ $gallery->title }}</p>
            <span class="text-xs text-[#00754A]">{{ $gallery->category }}</span>
            <div class="mt-2 flex gap-2">
                <a href="{{ route('admin.galleries.edit', $gallery) }}" class="text-xs text-[#00754A] hover:underline">Edit</a>
                <form method="POST" action="{{ route('admin.galleries.destroy', $gallery) }}" class="inline" onsubmit="return confirm('Delete?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-xs text-red-600 hover:underline">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-6">{{ $galleries->links() }}</div>
@endsection
