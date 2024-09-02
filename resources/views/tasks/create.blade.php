<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="task_name" class="block">Task Name</label>
            <input id="task_name" type="text" name="task_name" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="project_code" class="block">Project Code</label>
            <input id="project_code" type="text" name="project_code" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block">Description</label>
            <textarea id="description" name="description" class="border p-2 w-full" required></textarea>
        </div>
        <div class="mb-4">
            <label for="status" class="block">Status</label>
            <select id="status" name="status" class="border p-2 w-full">
                <option value="Pending">Pending</option>
                <option value="Working">Working</option>
                <option value="Done">Done</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2">Create Task</button>
    </form>
</div>
</body>
</html>

