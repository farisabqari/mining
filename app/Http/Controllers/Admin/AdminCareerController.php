<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class AdminCareerController extends Controller
{
    public function index()
    {
        $careers = Career::latest()->paginate(10);

        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'status' => 'nullable|string|max:255',
        ]);
        Career::create($data);

        return redirect()->route('admin.careers.index')->with('success', 'Career created successfully.');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'status' => 'nullable|string|max:255',
        ]);
        $career->update($data);

        return redirect()->route('admin.careers.index')->with('success', 'Career updated successfully.');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('admin.careers.index')->with('success', 'Career deleted successfully.');
    }
}
