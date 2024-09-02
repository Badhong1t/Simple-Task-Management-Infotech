<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $projectsCount = Project::count();
        $tasksCount = Task::count();
        $assignedTasksCount = Task::whereHas('users', function ($query) use ($user) {
            $query->where('id', $user->id);
        })->count();

        return view('dashboard', compact('projectsCount', 'tasksCount', 'assignedTasksCount'));
    }
}

