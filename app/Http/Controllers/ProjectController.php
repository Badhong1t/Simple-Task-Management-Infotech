<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        // Search by project name
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        // Get filtered results
        $projects = $query->get();

        return view('projects.index', compact('projects'));
    }
}

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_code' => 'required|string|unique:projects',
            'name' => 'required|string|max:255',
        ]);

        Project::create([
            'project_code' => $request->project_code,
            'name' => $request->name,
            'manager_id' => Auth::id(),
        ]);

        return redirect()->route('projects.index');
    }
}
