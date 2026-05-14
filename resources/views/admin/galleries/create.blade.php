@extends('admin.layouts.admin')
@section('title', 'Add Gallery Image')
@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-[#006241] mb-6">Add Gallery Image</h1>
    <form method="POST" action="{{ route('admin.galleries.store') }}" class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8 space-y-4">
        @csrf
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Title</label><input type="text" name="title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Image URL</label><input type="url" name="image" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Category</label>
            <select name="category" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
                <option value="">Select category</option>
                <option value="mining-site">Mining Site</option>
                <option value="equipment">Equipment</option>
                <option value="community">Community</option>
                <option value="environmental">Environmental</option>
                <option value="aerial">Aerial</option>
                <option value="processing">Processing</option>
            </select>
        </div>
        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('admin.galleries.index') }}" class="px-6 py-3 border border-gray-300 text-[rgba(0,0,0,0.58)] font-semibold rounded-[50px] hover:bg-gray-50 transition">Cancel</a>
            <button type="submit" class="px-8 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">Add Image</button>
        </div>
    </form>
</div>
@endsection
