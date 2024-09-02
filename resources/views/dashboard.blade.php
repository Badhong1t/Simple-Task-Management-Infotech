<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <header class="bg-gray-800 text-white p-4">
        <h1 class="text-3xl font-bold">Dashboard</h1>
    </header>

    <main class="mt-4">
        <!-- Welcome Message -->
        <div class="bg-blue-100 border border-blue-300 p-4 rounded-md">
            <h2 class="text-xl font-semibold">Welcome, {{ Auth::user()->name }}!</h2>
            <p class="mt-2">You are logged in as {{ Auth::user()->position }}.</p>
        </div>

        <!-- Quick Stats -->
        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-200 p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold">Total Projects</h3>
                <p class="text-2xl font-bold">{{ $projectsCount }}</p>
            </div>
            <div class="bg-white border border-gray-200 p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold">Total Tasks</h3>
                <p class="text-2xl font-bold">{{ $tasksCount }}</p>
            </div>
            <div class="bg-white border border-gray-200 p-4 rounded-md shadow-md">
                <h3 class="text-lg font-semibold">Tasks Assigned to You</h3>
                <p class="text-2xl font-bold">{{ $assignedTasksCount }}</p>
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="mt-4">
            <h2 class="text-2xl font-bold">Navigation</h2>
            <ul class="mt-2 space-y-2">
                <li><a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">View Projects</a></li>
                <li><a href="{{ route('tasks.index') }}" class="text-blue-500 hover:underline">View Tasks</a></li>
                @if (Auth::user()->position === 'Manager')
                    <li><a href="{{ route('projects.create') }}" class="text-blue-500 hover:underline">Create New Project</a></li>
                    <li><a href="{{ route('tasks.create') }}" class="text-blue-500 hover:underline">Create New Task</a></li>
                @endif
            </ul>
        </div>
    </main>
</div>
</body>
</html>
