<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->paginate(10);

        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'photo' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);
        Team::create($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member created successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'photo' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);
        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully.');
    }
}
