<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operation;
use Illuminate\Http\Request;

class AdminOperationController extends Controller
{
    public function index()
    {
        $operations = Operation::latest()->paginate(10);

        return view('admin.operations.index', compact('operations'));
    }

    public function create()
    {
        return view('admin.operations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'site_location' => 'nullable|string|max:255',
        ]);
        Operation::create($data);

        return redirect()->route('admin.operations.index')->with('success', 'Operation created successfully.');
    }

    public function edit(Operation $operation)
    {
        return view('admin.operations.edit', compact('operation'));
    }

    public function update(Request $request, Operation $operation)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'site_location' => 'nullable|string|max:255',
        ]);
        $operation->update($data);

        return redirect()->route('admin.operations.index')->with('success', 'Operation updated successfully.');
    }

    public function destroy(Operation $operation)
    {
        $operation->delete();

        return redirect()->route('admin.operations.index')->with('success', 'Operation deleted successfully.');
    }
}
