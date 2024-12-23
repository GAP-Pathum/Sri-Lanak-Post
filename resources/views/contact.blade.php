<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SLPost</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100">
    <header class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sri Lanka Postal Service</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-12 p-4">
        <h2 class="text-4xl font-semibold text-center text-blue-700 mb-6">Get in Touch</h2>
        <p class="text-center text-gray-600 mb-8">We’re here to help. Please fill out the form below and we’ll get back to you soon.</p>

        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form action="{{ route('contact.submit') }}" method="POST" novalidate>
                @csrf

                <!-- Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" 
                           value="{{ auth()->check() ? auth()->user()->name : '' }}" 
                           placeholder="Enter your full name"
                           class="mt-2 w-full p-3 border rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                           required aria-describedby="name-error">
                    <span id="name-error" class="text-red-500 text-sm"></span>
                </div>

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" 
                           value="{{ auth()->check() ? auth()->user()->email : '' }}" 
                           placeholder="Enter your email"
                           class="mt-2 w-full p-3 border rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                           required aria-describedby="email-error">
                    <span id="email-error" class="text-red-500 text-sm"></span>
                </div>

                <!-- Message Field -->
                <div class="mb-6">
                    <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                    <textarea name="message" id="message" rows="4" 
                              placeholder="Write your message here..."
                              class="mt-2 w-full p-3 border rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                              required aria-describedby="message-error"></textarea>
                    <span id="message-error" class="text-red-500 text-sm"></span>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition relative">
                    <span class="loader hidden absolute left-4 top-3 w-5 h-5 border-2 border-t-transparent border-white rounded-full animate-spin"></span>
                    Submit
                </button>
            </form>
        </div>
    </main>

    <footer class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-4 mt-12 shadow-md">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Sri Lanka Postal Service. All rights reserved.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')

    <script>
        // Enhanced client-side validation
        document.querySelector('form').addEventListener('submit', function (event) {
            let isValid = true;
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            const submitButton = event.target.querySelector('button');

            // Reset errors
            document.querySelectorAll('span[id$="-error"]').forEach(el => el.textContent = '');

            if (name.value.trim() === '') {
                isValid = false;
                document.getElementById('name-error').textContent = 'Please provide your name.';
            }
            if (email.value.trim() === '') {
                isValid = false;
                document.getElementById('email-error').textContent = 'Please provide your email.';
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                isValid = false;
                document.getElementById('email-error').textContent = 'Enter a valid email.';
            }
            if (message.value.trim() === '') {
                isValid = false;
                document.getElementById('message-error').textContent = 'Message cannot be empty.';
            }

            if (!isValid) {
                event.preventDefault();
                return;
            }

            // Show loading spinner on submit
            submitButton.querySelector('.loader').classList.remove('hidden');
            submitButton.disabled = true;
        });
    </script>
</body>
</html>