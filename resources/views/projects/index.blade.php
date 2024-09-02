<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Projects</h1>

    <!-- Search Form -->
    <form method="GET" action="{{ route('projects.index') }}" class="mb-4">
        <input type="text" name="search" placeholder="Search by project name" class="border p-2 w-full">
        <button type="submit" class="bg-blue-500 text-white p-2 mt-2">Search</button>
    </form>

    <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white p-2">Create New Project</a>
    <ul class="mt-4">
        @foreach ($projects as $project)
            <li class="border-b py-2">{{ $project->name }} ({{ $project->project_code }})</li>
        @endforeach
    </ul>
</div>
</body>
</html>

