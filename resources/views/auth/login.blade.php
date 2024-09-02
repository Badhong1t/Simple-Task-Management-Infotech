<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Login</h1>
    <form method="POST" action="{{ route('login') }}" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input id="email" type="email" name="email" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block">Password</label>
            <input id="password" type="password" name="password" class="border p-2 w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2">Login</button>
    </form>
</div>
</body>
</html>
