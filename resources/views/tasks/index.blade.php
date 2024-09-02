<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Tasks</h1>

    <!-- Filter Form -->
    <form method="GET" action="{{ route('tasks.index') }}" class="mb-4">
        <div class="flex space-x-4">
            <select name="project_id" class="border p-2">
                <option value="">All Projects</option>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>

            <select name="status" class="border p-2">
                <option value="">All Statuses</option>
                <option value="Pending">Pending</option>
                <option value="Working">Working</option>
                <option value="Done">Done</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 mt-2">Filter</button>
    </form>

    <ul class="mt-4">
        @foreach ($tasks as $task)
            <li class="border-b py-2">
                {{ $task->task_name }} - {{ $task->project->name }} ({{ $task->status }})
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
