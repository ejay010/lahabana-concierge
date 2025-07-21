<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <title>La Habana Medical Concierge</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts #00569d #00b9bb -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body id="app" class="bg-[#00569d] antialiased">
        <header class="flex flex-col bg-[url(../images/abstract-doctor.jpg)] bg-white bg-blend-multipy bg-center bg-cover text-white font-roboto">
            <div class="flex flex-col items-center justify-center min-h-screen text-center p-4">
                <div class="bg-white bg-opacity-80 backdrop-blur-lg rounded-lg shadow-lg p-6 mb-4">
                                    <h1 class="text-2xl md:text-4xl font-bold text-[#00569d]">Contact request Submitted Successfully</h1>
                    <p class="md:text-lg text-gray-700 mt-2">Thank you for reaching out to us. We will get back to you shortly.</p>

                    <a href="{{route('home')}}" class="flex items-center p-4">
                            <img src="{{ Vite::asset('resources/images/logo-no-background.png') }}" alt="La Habana Medical Concierge" class=" mx-auto ">
                </a>
            <a href="{{ route('home') }}" class="bg-[#00569d] text-white px-6 py-2 rounded hover:bg-[#008f8f] transition-colors mt-4 md:text-2xl">Back to Homepage</a>

            </div>
                
            </div>
            
        </header>
        <footer>
            <div class="bg-[#00569d] text-white text-center p-4">
                <p>&copy; 2025 La Habana Medical Concierge. All rights reserved.</p>
                <p>Follow us on:
                    <a href="#" class="text-white hover:text-gray-300">Facebook</a>,
                    <a href="#" class="text-white hover:text-gray-300">Twitter</a>,
                    <a href="#" class="text-white hover:text-gray-300">Instagram</a>
                </p>
            </div>
            <div class="bg-[#00b9bb] text-white text-center p-2">
                <p>Designed with ❤️ by <a href="https://ek3solutions.com/" target="_blank">EK3 Solutions</a></p>
            </div>
        </footer>
    </body>
</html>
