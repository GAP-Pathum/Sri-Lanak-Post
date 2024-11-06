<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>
        @if ($errors->any())
            <div class="text-red-600">
                {{ $errors->first() }}
            </div>
        @endif
        <form action="{{ route('login.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="w-full py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-600">Login</button>
        </form>
        <p class="text-center text-sm text-gray-600">Don't have an account? 
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign up</a>
        </p>
    </div>
</body>
</html>
