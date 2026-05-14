@extends('admin.layouts.admin')
@section('title', 'Edit News')
@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-[#006241] mb-6">Edit News Article</h1>
    <form method="POST" action="{{ route('admin.news.update', $news) }}" class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8 space-y-4">
        @csrf @method('PUT')
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Title</label><input type="text" name="title" value="{{ $news->title }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Content</label><textarea name="content" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $news->content }}</textarea></div>
        <div class="grid grid-cols-2 gap-4">
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Thumbnail URL</label><input type="url" name="thumbnail" value="{{ $news->thumbnail }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Published At</label><input type="datetime-local" name="published_at" value="{{ $news->published_at?->format('Y-m-d\TH:i') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
        </div>
        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('admin.news.index') }}" class="px-6 py-3 border border-gray-300 text-[rgba(0,0,0,0.58)] font-semibold rounded-[50px] hover:bg-gray-50 transition">Cancel</a>
            <button type="submit" class="px-8 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">Update Article</button>
        </div>
    </form>
</div>
@endsection
