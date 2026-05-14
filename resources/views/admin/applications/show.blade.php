@extends('admin.layouts.admin')
@section('title', 'Application Detail')
@section('content')
<div class="max-w-4xl mx-auto">
    <a href="{{ route('admin.applications.index') }}" class="text-[#00754A] hover:underline mb-4 inline-block">&larr; Back to Applications</a>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        {{-- Main Content --}}
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                <h2 class="text-xl font-bold text-[#006241] mb-4">Personal Information</h2>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div><span class="text-[rgba(0,0,0,0.58)]">Full Name</span><p class="font-medium">{{ $application->full_name }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Email</span><p class="font-medium">{{ $application->email }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Phone</span><p class="font-medium">{{ $application->phone }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Gender</span><p class="font-medium">{{ ucfirst($application->gender) ?? '-' }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Date of Birth</span><p class="font-medium">{{ $application->birth_date?->format('M d, Y') ?? '-' }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Address</span><p class="font-medium">{{ $application->address ?? '-' }}</p></div>
                </div>
            </div>

            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                <h2 class="text-xl font-bold text-[#006241] mb-4">Education & Experience</h2>
                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div><span class="text-[rgba(0,0,0,0.58)]">Education</span><p class="font-medium">{{ $application->education ?? '-' }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">University</span><p class="font-medium">{{ $application->university ?? '-' }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">GPA</span><p class="font-medium">{{ $application->gpa ?? '-' }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Experience</span><p class="font-medium">{{ $application->experience_years ? $application->experience_years . ' years' : '-' }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Current Position</span><p class="font-medium">{{ $application->current_position ?? '-' }}</p></div>
                    <div><span class="text-[rgba(0,0,0,0.58)]">Expected Salary</span><p class="font-medium">{{ $application->expected_salary ?? '-' }}</p></div>
                </div>
            </div>

            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                <h2 class="text-xl font-bold text-[#006241] mb-4">Documents</h2>
                <div class="grid grid-cols-2 gap-4">
                    @php $docs = ['cv_file' => 'CV/Resume', 'diploma_file' => 'Diploma', 'ktp_file' => 'KTP', 'certificate_file' => 'Certificate']; @endphp
                    @foreach ($docs as $field => $label)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-sm font-medium">{{ $label }}</span>
                        @if($application->$field)
                            <a href="{{ route('admin.applications.download', [$application, $field]) }}" class="text-[#00754A] hover:underline text-sm font-medium">Download</a>
                        @else
                            <span class="text-xs text-[rgba(0,0,0,0.58)]">Not uploaded</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="space-y-6">
            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                <h2 class="text-xl font-bold text-[#006241] mb-4">Update Status</h2>
                <form method="POST" action="{{ route('admin.applications.status', $application) }}" class="space-y-3">
                    @csrf @method('PUT')
                    <select name="status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00754A] outline-none text-sm">
                        <option value="pending" @selected($application->status == 'pending')>Pending</option>
                        <option value="review" @selected($application->status == 'review')>Review</option>
                        <option value="interview" @selected($application->status == 'interview')>Interview</option>
                        <option value="accepted" @selected($application->status == 'accepted')>Accepted</option>
                        <option value="rejected" @selected($application->status == 'rejected')>Rejected</option>
                    </select>
                    <button type="submit" class="w-full px-4 py-3 bg-[#00754A] text-white font-semibold rounded-[50px] hover:bg-[#006241] transition active:scale-[0.95] text-sm">Update Status</button>
                </form>
            </div>

            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                <h2 class="text-xl font-bold text-[#006241] mb-4">Job Details</h2>
                <p class="text-sm font-medium">{{ $application->career->title ?? 'N/A' }}</p>
                <p class="text-xs text-[rgba(0,0,0,0.58)]">{{ $application->career->department ?? '' }} &middot; {{ $application->career->location ?? '' }}</p>
                <p class="text-xs text-[rgba(0,0,0,0.58)] mt-3">Applied: {{ $application->created_at->format('M d, Y H:i') }}</p>
            </div>

            <div class="bg-white rounded-[12px] shadow-[0_0_0.5px_rgba(0,0,0,0.14),0_1px_1px_rgba(0,0,0,0.24)] p-6">
                <form method="POST" action="{{ route('admin.applications.destroy', $application) }}" onsubmit="return confirm('Delete this application permanently?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="w-full px-4 py-3 border border-red-300 text-red-600 font-semibold rounded-[50px] hover:bg-red-50 transition text-sm">Delete Application</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
