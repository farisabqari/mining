<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SustainabilityReport;
use Illuminate\Http\Request;

class AdminSustainabilityReportController extends Controller
{
    public function index()
    {
        $reports = SustainabilityReport::latest()->paginate(10);

        return view('admin.reports.index', compact('reports'));
    }

    public function create()
    {
        return view('admin.reports.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|string|max:255',
            'year' => 'required|integer|min:2000|max:2099',
        ]);
        SustainabilityReport::create($data);

        return redirect()->route('admin.reports.index')->with('success', 'Report created successfully.');
    }

    public function edit(SustainabilityReport $report)
    {
        return view('admin.reports.edit', compact('report'));
    }

    public function update(Request $request, SustainabilityReport $report)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|string|max:255',
            'year' => 'required|integer|min:2000|max:2099',
        ]);
        $report->update($data);

        return redirect()->route('admin.reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy(SustainabilityReport $report)
    {
        $report->delete();

        return redirect()->route('admin.reports.index')->with('success', 'Report deleted successfully.');
    }
}
