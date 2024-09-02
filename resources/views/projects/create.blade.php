<!DOCTYPE html>
<html>
<head>
    <title>Create Project</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Create Project</h1>
    <form method="POST" action="{{ route('projects.store') }}" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="project_code" class="block">Project Code</label>
            <input id="project_code" type="text" name="project_code" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="name" class="block">Project Name</label>
            <input id="name" type="text" name="name" class="border p-2 w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2">Create Project</button>
    </form>
</div>
</body>
</html>

