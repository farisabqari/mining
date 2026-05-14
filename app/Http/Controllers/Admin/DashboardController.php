<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\CompanyProfile;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\JobApplication;
use App\Models\News;
use App\Models\Project;
use App\Models\SustainabilityReport;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'news' => News::count(),
            'careers' => Career::count(),
            'messages' => Contact::count(),
            'galleries' => Gallery::count(),
            'active_projects' => Project::where('status', 'active')->count(),
            'applications' => JobApplication::count(),
            'pending_applications' => JobApplication::where('status', 'pending')->count(),
            'reports' => SustainabilityReport::count(),
            'open_positions' => Career::where('status', 'open')->count(),
        ];

        $company = CompanyProfile::first();

        return view('admin.dashboard', compact('stats', 'company'));
    }
}
