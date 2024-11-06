<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SLPost</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-50">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sri Lanka Postal Service</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('home') }}" class="hover:text-gray-200">Home</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-200">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-8 p-4">
        <h2 class="text-3xl font-semibold text-center mb-4">Contact Us</h2>
        <p class="text-center mb-8">Have questions or need assistance? Send us a message below.</p>

        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" 
                           value="{{ auth()->check() ? auth()->user()->name : '' }}" 
                           class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                           required>
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" 
                           value="{{ auth()->check() ? auth()->user()->email : '' }}" 
                           class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                           required>
                </div>

                <!-- Message Field -->
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="4" 
                              class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                              placeholder="Type your message here..." required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </main>

    <footer class="bg-blue-600 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Sri Lanka Postal Service. All rights reserved.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
