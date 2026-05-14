<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'production_capacity' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'year' => 'nullable|integer',
        ]);
        $data['slug'] = Str::slug($data['title']);
        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'production_capacity' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'year' => 'nullable|integer',
        ]);
        if ($data['title'] !== $project->title) {
            $data['slug'] = Str::slug($data['title']);
        }
        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
