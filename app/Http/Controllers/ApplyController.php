<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function showForm(Career $career)
    {
        return view('pages.apply', compact('career'));
    }

    public function submit(Request $request, Career $career)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:male,female',
            'education' => 'nullable|string|max:255',
            'university' => 'nullable|string|max:255',
            'gpa' => 'nullable|string|max:10',
            'experience_years' => 'nullable|integer|min:0|max:50',
            'current_position' => 'nullable|string|max:255',
            'expected_salary' => 'nullable|string|max:255',
            'cv_file' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'diploma_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
            'ktp_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'certificate_file' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
        ], [
            'cv_file.required' => 'CV/Resume is required.',
            'cv_file.mimes' => 'CV must be a PDF, DOC, or DOCX file.',
            'cv_file.max' => 'CV size must not exceed 5MB.',
            'diploma_file.max' => 'Diploma file size must not exceed 5MB.',
            'ktp_file.max' => 'KTP file size must not exceed 5MB.',
            'certificate_file.max' => 'Certificate file size must not exceed 5MB.',
        ]);

        $data['career_id'] = $career->id;
        $data['status'] = 'pending';

        $files = ['cv_file', 'diploma_file', 'ktp_file', 'certificate_file'];
        foreach ($files as $file) {
            if ($request->hasFile($file)) {
                $path = $request->file($file)->store('applications', 'public');
                $data[$file] = $path;
            }
        }

        JobApplication::create($data);

        return redirect()->route('apply.success', $career)
            ->with('success', 'Your application has been submitted successfully!');
    }

    public function success(Career $career)
    {
        return view('pages.apply-success', compact('career'));
    }
}
