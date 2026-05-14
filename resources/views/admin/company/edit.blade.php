@extends('admin.layouts.admin')
@section('title', 'Company Profile')
@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold text-[#006241] mb-6">Company Profile</h1>
    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('admin.company.update', $company->id) }}" class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8 space-y-6">
        @csrf @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Company Name</label>
                <input type="text" name="company_name" value="{{ $company->company_name }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Tagline</label>
                <input type="text" name="tagline" value="{{ $company->tagline }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Description</label>
                <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $company->description }}</textarea>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Vision</label>
                <textarea name="vision" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $company->vision }}</textarea>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Mission</label>
                <textarea name="mission" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $company->mission }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Hero Title</label>
                <input type="text" name="hero_title" value="{{ $company->hero_title }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Hero Subtitle</label>
                <input type="text" name="hero_subtitle" value="{{ $company->hero_subtitle }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Email</label>
                <input type="email" name="email" value="{{ $company->email }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
            </div>
            <div>
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Phone</label>
                <input type="text" name="phone" value="{{ $company->phone }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Address</label>
                <textarea name="address" rows="2" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">{{ $company->address }}</textarea>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="px-8 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95]">Update Profile</button>
        </div>
    </form>
</div>
@endsection
