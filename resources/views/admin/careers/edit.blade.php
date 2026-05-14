@extends('admin.layouts.admin')
@section('title', 'Edit Career')
@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-[#006241] mb-6">Edit Career Position</h1>
    <form method="POST" action="{{ route('admin.careers.update', $career) }}" class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8 space-y-4">
        @csrf @method('PUT')
        <div class="grid grid-cols-2 gap-4">
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Title</label><input type="text" name="title" value="{{ $career->title }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Department</label><input type="text" name="department" value="{{ $career->department }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Location</label><input type="text" name="location" value="{{ $career->location }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition"></div>
            <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Status</label>
                <select name="status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
                    <option value="open" {{ $career->status == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="closed" {{ $career->status == 'closed' ? 'selected' : '' }}>Closed</option>
                </select>
            </div>
        </div>
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Description</label><textarea name="description" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $career->description }}</textarea></div>
        <div><label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Requirements</label><textarea name="requirements" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $career->requirements }}</textarea></div>
        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('admin.careers.index') }}" class="px-6 py-3 border border-gray-300 text-[rgba(0,0,0,0.58)] font-semibold rounded-[50px] hover:bg-gray-50 transition">Cancel</a>
            <button type="submit" class="px-8 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">Update Position</button>
        </div>
    </form>
</div>
@endsection
