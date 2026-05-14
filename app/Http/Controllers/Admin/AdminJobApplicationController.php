<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminJobApplicationController extends Controller
{
    public function index(Request $request)
    {
        $query = JobApplication::with('career')->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('current_position', 'like', "%{$search}%");
            });
        }

        $applications = $query->paginate(15);
        $statusCounts = [
            'pending' => JobApplication::where('status', 'pending')->count(),
            'review' => JobApplication::where('status', 'review')->count(),
            'interview' => JobApplication::where('status', 'interview')->count(),
            'accepted' => JobApplication::where('status', 'accepted')->count(),
            'rejected' => JobApplication::where('status', 'rejected')->count(),
        ];

        return view('admin.applications.index', compact('applications', 'statusCounts'));
    }

    public function show(JobApplication $application)
    {
        $application->load('career');

        return view('admin.applications.show', compact('application'));
    }

    public function updateStatus(Request $request, JobApplication $application)
    {
        $request->validate(['status' => 'required|in:pending,review,interview,accepted,rejected']);
        $application->update(['status' => $request->status]);

        return back()->with('success', 'Application status updated to '.ucfirst($request->status).'.');
    }

    public function download(JobApplication $application, $file)
    {
        $allowed = ['cv_file', 'diploma_file', 'ktp_file', 'certificate_file'];
        if (! in_array($file, $allowed) || ! $application->$file) {
            abort(404);
        }

        return Storage::disk('public')->download($application->$file);
    }

    public function destroy(JobApplication $application)
    {
        $files = ['cv_file', 'diploma_file', 'ktp_file', 'certificate_file'];
        foreach ($files as $file) {
            if ($application->$file) {
                Storage::disk('public')->delete($application->$file);
            }
        }
        $application->delete();

        return redirect()->route('admin.applications.index')->with('success', 'Application deleted successfully.');
    }
}
