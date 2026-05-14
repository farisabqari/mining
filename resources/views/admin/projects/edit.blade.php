@extends('admin.layouts.admin')
@section('title', 'Edit Project')
@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-[#006241] mb-6">Edit Project</h1>
    <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8 space-y-4">
        @csrf @method('PUT')
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Title</label><input type="text" name="title" value="{{ $project->title }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Description</label><textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $project->description }}</textarea></div>
        <div class="grid grid-cols-2 gap-4">
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Category</label><input type="text" name="category" value="{{ $project->category }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Status</label>
                <select name="status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
                    <option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="planned" {{ $project->status == 'planned' ? 'selected' : '' }}>Planned</option>
                    <option value="development" {{ $project->status == 'development' ? 'selected' : '' }}>Development</option>
                </select>
            </div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Location</label><input type="text" name="location" value="{{ $project->location }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Production Capacity</label><input type="text" name="production_capacity" value="{{ $project->production_capacity }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Year</label><input type="number" name="year" value="{{ $project->year }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Image URL</label><input type="url" name="image" value="{{ $project->image }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
        </div>
        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('admin.projects.index') }}" class="px-6 py-3 border border-gray-300 text-[rgba(0,0,0,0.58)] font-semibold rounded-[50px] hover:bg-gray-50 transition">Cancel</a>
            <button type="submit" class="px-8 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">Update Project</button>
        </div>
    </form>
</div>
@endsection
