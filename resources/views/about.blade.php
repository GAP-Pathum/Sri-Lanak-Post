<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SLPost</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-50">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sri Lanka Postal Service</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('home') }}" class="hover:text-gray-200">Home</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-200">Contact</a>
                <a href="{{ route('about') }}" class="hover:text-gray-200">About Us</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-8 p-4">
        <h2 class="text-3xl font-semibold text-center mb-4">About Us</h2>
        <p class="text-center mb-8">Learn more about the Sri Lanka Postal Service and our mission.</p>

        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold mb-4">Our Mission</h3>
            <p class="mb-4">
                At the Sri Lanka Postal Service, our mission is to provide reliable, efficient, and affordable mail and parcel delivery services to every corner of Sri Lanka. We are committed to connecting people and businesses through our extensive network and ensuring timely and secure delivery.
            </p>

            <h3 class="text-2xl font-semibold mb-4">Our History</h3>
            <p class="mb-4">
                Established in [Year], the Sri Lanka Postal Service has a rich history of serving the nation. Over the years, we have evolved and adapted to the changing needs of our customers, embracing new technologies and expanding our services to meet the demands of the modern world.
            </p>

            <h3 class="text-2xl font-semibold mb-4">Our Values</h3>
            <ul class="list-disc pl-5 mb-4">
                <li>Customer Satisfaction</li>
                <li>Integrity and Transparency</li>
                <li>Innovation and Adaptability</li>
                <li>Community and Social Responsibility</li>
            </ul>

            <h3 class="text-2xl font-semibold mb-4">Contact Us</h3>
            <p>
                If you have any questions or need assistance, feel free to <a href="{{ route('contact') }}" class="text-blue-600 hover:text-blue-800">contact us</a>. We are here to help you.
            </p>
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