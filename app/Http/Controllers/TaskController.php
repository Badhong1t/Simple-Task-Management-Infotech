<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function index(Request $request)
    {
        $query = Task::query();

        // Filter by Project
        if ($request->has('project_id')) {
            $query->where('project_id', $request->input('project_id'));
        }

        // Filter by Status
        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
        }

        // Get filtered results
        $tasks = $query->get();

        // Fetch necessary data for filters
        $projects = Project::all();
        $teammates = User::where('position', 'Teammate')->get();

        return view('tasks.index', compact('tasks', 'projects', 'teammates'));
    }
}

    public function create()
    {
        $projects = Project::where('manager_id', Auth::id())->get();
        return view('tasks.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|string|max:255',
            'project_code' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:Pending,Working,Done',
        ]);

        $project = Project::where('project_code', $request->project_code)->firstOrFail();

        $task = Task::create([
            'task_name' => $request->task_name,
            'project_code' => $request->project_code,
            'description' => $request->description,
            'status' => $request->status,
            'project_id' => $project->id,
        ]);

        return redirect()->route('tasks.index');
    }
}
