<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
        ]);
        Gallery::create($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery image created successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
        ]);
        $gallery->update($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery image updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery image deleted successfully.');
    }
}
