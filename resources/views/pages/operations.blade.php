@extends('layouts.public')
@section('title', 'Operations')
@section('content')
<section class="relative pt-32 pb-20 bg-[#1E3932]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl sm:text-6xl font-bold text-white" data-aos="fade-up">Our Operations</h1>
        <p class="text-xl text-[rgba(255,255,255,0.70)] mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">
            World-class mining operations across Indonesia with state-of-the-art technology and sustainable practices
        </p>
    </div>
</section>
<section class="py-24 bg-[#f2f0eb]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8">
            @php $operations = \App\Models\Operation::all(); @endphp
            @foreach ($operations as $op)
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] overflow-hidden grid grid-cols-1 lg:grid-cols-3" data-aos="fade-up">
                <div class="h-64 lg:h-full overflow-hidden">
                    <img src="{{ $op->image }}" alt="{{ $op->title }}" class="w-full h-full object-cover">
                </div>
                <div class="lg:col-span-2 p-8">
                    <h3 class="text-2xl font-semibold text-[#006241] mb-3">{{ $op->title }}</h3>
                    <p class="text-[rgba(0,0,0,0.58)] mb-4">{{ $op->description }}</p>
                    <div class="flex flex-wrap gap-4">
                        <span class="px-4 py-2 bg-[#d4e9e2] text-[#00754A] text-sm font-semibold rounded-[50px]">Capacity: {{ $op->capacity }}</span>
                        <span class="px-4 py-2 bg-[#d4e9e2] text-[#00754A] text-sm font-semibold rounded-[50px]">Location: {{ $op->site_location }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
