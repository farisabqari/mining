@extends('layouts.public')
@section('title', 'Contact')
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">Contact Us</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            Get in touch with our team for inquiries and partnerships
        </p>
    </div>
</section>

@if (session('success'))
<div class="bg-[#d4e9e2] border border-[#00754A] text-[#006241] px-4 py-3 text-center text-sm" role="alert">
    {{ session('success') }}
</div>
@endif

<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold text-[#006241] mb-6">Send Us a Message</h2>
                <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition @error('name') border-red-500 @enderror">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition @error('email') border-red-500 @enderror">
                        @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition">
                    </div>
                    <div>
                        <textarea name="message" rows="5" placeholder="Your Message" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] focus:border-[#00754A] outline-none transition resize-none @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="px-8 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition-all duration-200 active:scale-[0.95]">
                        Send Message
                    </button>
                </form>
            </div>
            <div data-aos="fade-left">
                @php $company = \App\Models\CompanyProfile::first(); @endphp
                <h2 class="text-3xl font-bold text-[#006241] mb-6">Our Office</h2>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-[rgba(0,0,0,0.87)]">Address</p>
                            <p class="text-[rgba(0,0,0,0.58)]">{{ $company?->address ?? 'Jakarta, Indonesia' }}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-[rgba(0,0,0,0.87)]">Email</p>
                            <p class="text-[rgba(0,0,0,0.58)]">{{ $company?->email ?? 'corporate@nusantaramining.co.id' }}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#d4e9e2] rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-[#00754A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-[rgba(0,0,0,0.87)]">Phone</p>
                            <p class="text-[rgba(0,0,0,0.58)]">{{ $company?->phone ?? '+62 21 5082 9000' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-[#00754A] font-semibold text-sm tracking-wider uppercase">Location</span>
            <h2 class="text-4xl font-bold text-[#006241] mt-3">Find Us</h2>
        </div>
        <div class="rounded-[12px] overflow-hidden shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)]" data-aos="fade-up">
            <div class="relative w-full" style="padding-bottom: 56.25%">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.1871108886304!2d118.3141504!3d-8.5268542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1b3b1e1b1b1b1%3A0x1b1b1b1b1b1b1b1b!2sNusantara%20Mining%20Corporation!5e0!3m2!1sen!2sid!4v1"
                    class="absolute top-0 left-0 w-full h-full border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>
@endsection
