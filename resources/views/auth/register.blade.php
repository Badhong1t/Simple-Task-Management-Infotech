<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Register</h1>
    <form method="POST" action="{{ route('register') }}" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="name" class="block">Name</label>
            <input id="name" type="text" name="name" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input id="email" type="email" name="email" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="employee_id" class="block">Employee ID</label>
            <input id="employee_id" type="text" name="employee_id" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block">Password</label>
            <input id="password" type="password" name="password" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="border p-2 w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2">Register</button>
    </form>
</div>
</body>
</html>
