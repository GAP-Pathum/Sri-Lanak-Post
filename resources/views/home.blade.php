<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLPost - Sri Lanka Postal Service</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-50">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sri Lanka Postal Service</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('home') }}" class="hover:text-gray-200">Home</a>
                <a href="{{ route('login') }}" class="hover:text-gray-200">Login</a>
                <a href="{{ route('register') }}" class="hover:text-gray-200">Sign Up</a>
                <a href="{{ route('gallery') }}" class="hover:text-gray-200">Gallery</a>
                <a href="{{ route('news') }}" class="hover:text-gray-200">News</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-200">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-8 p-4">
        <h2 class="text-3xl font-semibold text-center mb-4">Welcome to SLPost</h2>
        <p class="text-center mb-8">Your reliable partner for postal services across Sri Lanka. We provide timely and efficient delivery solutions for all your postal needs.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="p-4 border rounded-lg shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-xl mb-2">Services</h3>
                <p>Explore our range of postal and courier services designed to meet your needs.</p>
            </div>
            <div class="p-4 border rounded-lg shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-xl mb-2">Track Your Parcel</h3>
                <p>Use our tracking tool to stay updated on your parcel’s journey.</p>
            </div>
            <div class="p-4 border rounded-lg shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-xl mb-2">Customer Support</h3>
                <p>Our support team is here to help you with any inquiries you may have.</p>
            </div>
        </div>
    </main>

    <footer class="bg-blue-600 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Sri Lanka Postal Service. All rights reserved.</p>
        </div>
    </footer>

    @vite('resources/js/app.js') <!-- Include your JavaScript after your HTML -->
</body>
</html>
