@extends('layouts.public')
@section('title', 'Apply - ' . $career->title)
@push('styles')
<style>
    .upload-zone { border: 2px dashed #d1d5db; transition: all 0.3s ease; }
    .upload-zone:hover, .upload-zone.dragover { border-color: #00754A; background: rgba(0,117,74,0.03); }
    .upload-zone.has-file { border-color: #00754A; background: rgba(0,117,74,0.05); }
    .form-input { transition: all 0.2s ease; }
    .form-input:focus { border-color: #00754A; box-shadow: 0 0 0 3px rgba(0,117,74,0.1); }
    .btn-loading { position: relative; pointer-events: none; }
    .btn-loading .btn-text { visibility: hidden; }
    .btn-loading .spinner { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; }
    @keyframes fadeSlideUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    .animate-fade { animation: fadeSlideUp 0.6s ease forwards; }
</style>
@endpush
@section('content')
<section class="relative pt-32 pb-16 bg-[#1E3932]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('careers') }}" class="text-[rgba(255,255,255,0.70)] hover:text-white transition mb-4 inline-block">&larr; Back to Careers</a>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mt-4" data-aos="fade-up">Apply for Position</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-3" data-aos="fade-up" data-aos-delay="100">{{ $career->title }} &mdash; {{ $career->department }}</p>
    </div>
</section>

<section class="py-16 bg-[#f2f0eb]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('apply.submit', $career) }}" enctype="multipart/form-data" id="applyForm" class="space-y-8">
            @csrf

            @if ($errors->any())
            <div class="animate-fade bg-red-50 border border-red-200 rounded-[12px] p-6">
                <h3 class="font-semibold text-red-800 mb-2">Please fix the following errors:</h3>
                <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Personal Information --}}
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-[#006241] mb-6">Personal Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" required
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Phone <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" required
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Address</label>
                        <textarea name="address" rows="2" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none resize-none">{{ old('address') }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Date of Birth</label>
                        <input type="date" name="birth_date" value="{{ old('birth_date') }}"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Gender</label>
                        <select name="gender" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                            <option value="">Select</option>
                            <option value="male" @selected(old('gender') == 'male')>Male</option>
                            <option value="female" @selected(old('gender') == 'female')>Female</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- Education & Experience --}}
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-2xl font-bold text-[#006241] mb-6">Education & Experience</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Last Education</label>
                        <select name="education" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                            <option value="">Select</option>
                            @foreach (['SD', 'SMP', 'SMA/SMK', 'D3', 'D4', 'S1', 'S2', 'S3'] as $edu)
                                <option value="{{ $edu }}" @selected(old('education') == $edu)>{{ $edu }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">University/School</label>
                        <input type="text" name="university" value="{{ old('university') }}"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">GPA <span class="text-[rgba(0,0,0,0.58)] text-xs">(optional)</span></label>
                        <input type="text" name="gpa" value="{{ old('gpa') }}"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Years of Experience</label>
                        <input type="number" name="experience_years" value="{{ old('experience_years') }}" min="0" max="50"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Current Position</label>
                        <input type="text" name="current_position" value="{{ old('current_position') }}"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[rgba(0,0,0,0.58)] mb-1">Expected Salary <span class="text-xs text-[rgba(0,0,0,0,0.58)]">(optional)</span></label>
                        <input type="text" name="expected_salary" value="{{ old('expected_salary') }}"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg outline-none">
                    </div>
                </div>
            </div>

            {{-- Document Upload --}}
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-2xl font-bold text-[#006241] mb-2">Document Upload</h2>
                <p class="text-sm text-[rgba(0,0,0,0.58)] mb-6">Upload your documents in PDF, DOC, or DOCX format. Max 5MB per file.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    @php
                        $uploads = [
                            'cv_file' => ['label' => 'CV / Resume', 'required' => true, 'accept' => '.pdf,.doc,.docx'],
                            'diploma_file' => ['label' => 'Diploma / Ijazah', 'required' => false, 'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png'],
                            'ktp_file' => ['label' => 'KTP / ID Card', 'required' => false, 'accept' => '.pdf,.jpg,.jpeg,.png'],
                            'certificate_file' => ['label' => 'Additional Certificate', 'required' => false, 'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png'],
                        ];
                    @endphp
                    @foreach ($uploads as $field => $info)
                    <div class="upload-zone rounded-[12px] p-6 text-center cursor-pointer @error($field) border-red-400 @enderror"
                         data-upload-zone="{{ $field }}">
                        <input type="file" name="{{ $field }}" id="{{ $field }}" accept="{{ $info['accept'] }}" class="hidden" {{ $info['required'] ? 'required' : '' }}>
                        <div class="upload-content">
                            <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-[#d4e9e2] flex items-center justify-center">
                                <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                            </div>
                            <p class="font-medium text-[rgba(0,0,0,0.87)]">{{ $info['label'] }} @if($info['required'])<span class="text-red-500">*</span>@endif</p>
                            <p class="text-xs text-[rgba(0,0,0,0.58)] mt-1">Click or drag to upload</p>
                            <p class="text-xs text-[#00754A] mt-1 file-name hidden"></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Submit --}}
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4" data-aos="fade-up">
                <p class="text-sm text-[rgba(0,0,0,0.58)]"><span class="text-red-500">*</span> Required fields</p>
                <button type="submit" id="submitBtn" class="px-10 py-4 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95] inline-flex items-center gap-2">
                    <span class="btn-text">Submit Application</span>
                    <svg class="w-5 h-5 submit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-upload-zone]').forEach(zone => {
        const input = zone.querySelector('input[type="file"]');
        const content = zone.querySelector('.upload-content');
        const fileName = zone.querySelector('.file-name');

        zone.addEventListener('click', () => input.click());

        input.addEventListener('change', function() {
            if (this.files.length > 0) {
                zone.classList.add('has-file');
                fileName.textContent = this.files[0].name;
                fileName.classList.remove('hidden');
            }
        });

        zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('dragover'); });
        zone.addEventListener('dragleave', () => zone.classList.remove('dragover'));
        zone.addEventListener('drop', e => {
            e.preventDefault();
            zone.classList.remove('dragover');
            if (e.dataTransfer.files.length > 0) {
                input.files = e.dataTransfer.files;
                input.dispatchEvent(new Event('change'));
            }
        });
    });

    document.getElementById('submitBtn')?.addEventListener('click', function(e) {
        const form = document.getElementById('applyForm');
        if (form.checkValidity()) {
            this.classList.add('btn-loading');
            const spinner = document.createElement('div');
            spinner.className = 'spinner';
            spinner.innerHTML = '<svg class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>';
            this.appendChild(spinner);
        }
    });
});
</script>
@endpush
