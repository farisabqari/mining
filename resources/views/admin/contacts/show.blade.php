@extends('admin.layouts.admin')
@section('title', 'Message Detail')
@section('content')
<div class="max-w-3xl mx-auto">
    <a href="{{ route('admin.contacts.index') }}" class="text-[#00754A] hover:underline mb-4 inline-block">&larr; Back to Messages</a>
    <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-8">
        <div class="grid grid-cols-2 gap-4 mb-6 pb-6 border-b border-gray-100">
            <div><p class="text-sm text-[rgba(0,0,0,0.58)]">Name</p><p class="font-medium">{{ $contact->name }}</p></div>
            <div><p class="text-sm text-[rgba(0,0,0,0.58)]">Email</p><p class="font-medium">{{ $contact->email }}</p></div>
            <div class="col-span-2"><p class="text-sm text-[rgba(0,0,0,0.58)]">Subject</p><p class="font-medium">{{ $contact->subject ?? 'No subject' }}</p></div>
        </div>
        <div><p class="text-sm text-[rgba(0,0,0,0.58)] mb-2">Message</p><p class="text-[rgba(0,0,0,0.87)] leading-relaxed">{{ $contact->message }}</p></div>
        <p class="text-xs text-[rgba(0,0,0,0.58)] mt-6">Received: {{ $contact->created_at->format('F d, Y H:i:s') }}</p>
    </div>
</div>
@endsection
