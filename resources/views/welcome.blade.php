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
        <header class="flex flex-col bg-[url(../images/hero-bg.jpg)] bg-[#00569d] bg-blend-soft-light bg-center bg-cover text-white font-roboto">
            <div class="bg-white text-black">
                <nav class="md:flex items-center justify-between">
                    <div class="flex items-center justify-between w-full max-w-4xl mx-auto">
                        <a href="#">
                            <img src="{{ Vite::asset('resources/images/logo-no-background.png') }}" alt="La Habana Medical Concierge" class="h-25 mx-auto ">
                        </a>
                        <button id="open-menu" class="md:hidden text-black hover:text-gray-700 focus:outline-none transition-discrete" :class="{ 'hidden' :  showMobileMenu, 'block' : ! showMobileMenu}" @click="toggleMenu">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                        <button id="close-menu" class=" md:hidden text-black hover:text-gray-700 focus:outline-none transition-discrete" :class="{'hidden' : ! showMobileMenu, 'block' : showMobileMenu }" @click="toggleMenu">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <ul class="space-y-2 text-lg md:hidden transition-discrete" :class="{'hidden' : ! showMobileMenu, 'block' : showMobileMenu }">
                        <li>
                            <a href="#services" class="hover:text-[#00b9bb]">Our Services</a>
                        </li>
                        
                        <li>
                            <a href="#AboutUs" class="hover:text-[#00b9bb]">About Us</a>
                        </li>
                        
                        <li>
                            <a href="#contact" class="hover:text-[#00b9bb]">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="hidden md:flex space-x-6">
                        <li>
                            <a href="#services" class="hover:text-[#00b9bb]">Our Services</a>
                        </li>
                        
                        <li>
                            <a href="#AboutUs" class="hover:text-[#00b9bb]">About Us</a>
                        </li>
                        
                        <li>
                            <a href="#contact" class="hover:text-[#00b9bb]">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <div class="flex flex-col items-center justify-center min-h-screen text-center p-4">
                <h1 class="text-4xl sm:text-6xl font-bold font-roboto text-shadow-lg/30">La Habana</h1> 
                <hr class="w-2/3 sm:w-1/3 border-t-4 sm:border-t-8 border-black-300 rounded-lg text-shadow-lg/30">
                <h1 class="text-2xl sm:text-4xl font-bold font-roboto tracking-wider text-shadow-lg/30">MEDICAL CONCIERGE</h1>
                <p class="text-lg my-2 text-shadow-lg">Your personal guide to Medical & Dental Tourism of Havana, Cuba</p>
            </div>
        </header>
        <main class="max-w-4xl mx-auto bg-white shadow-lg my-4 rounded-lg">
            <section id="AboutUs" class="p-4 font-roboto">
                <h1 class="text-3xl text-center font-bold">About Us</h1>
                <p class="my-2">
                    La Habana Medical Concierge is a specialized medical and dental tourism service dedicated to
                    facilitating seamless travel for Bahamian residents seeking medical treatments in Cuba. With the
                    rising interest in high-quality, affordable healthcare options, particularly in medical and dental
                    fields, La Habana Medical Concierge offers a unique, full-service platform that organizes travel,
                    healthcare logistics, and leisure activities in Cuba. Our goal is to ensure that each client has a
                    stress-free, smooth, and enjoyable experience while receiving world-class healthcare services.
                </p>
            </section>
            <section class="p-4 font-roboto" id="services">
                <h1 class="text-3xl text-center font-bold">Our Services</h1>
                <ul class="space-y-4">
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Visa & Documentation Support</h3>
                        <p>Assisting with the necessary travel and medical documentation to ensure smooth entry and exit from both countries.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Flight Arrangements</h3>
                        <p>Coordination of round-trip flights between the Bahamas and Cuba, ensuring the best available schedules and prices.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Transportation Coordination</h3>
                        <p>Arranging all forms of transportation, including airport transfers, in-country travel, and transport to and from medical appointments.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Medical Appointment Scheduling</h3>
                        <p>Working directly with Cuban hospitals and medical facilities to ensure timely medical and dental appointments.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Accommodations Booking</h3>
                        <p>Offering a range of accommodation options, from basic to luxury stays near medical centers or in popular tourist locations.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Records Transfer Assistance</h3>
                        <p>Assisting patients with transfering medical records to Cuban specialists, ensuring continuity of care.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Medical Translation/Interpretaion</h3>
                        <p>Providing professional medical translation services to bridge any language barriers between patients and healthcare providers.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Private Chef/Meal Arrangements</h3>
                        <p>Organizing customized meal plans that cater to dietary restrictions or preferences, including local or international cuisine.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">
                            Nurse/Medical Escort
                        </h3>
                        <p>
                            Offering on-demand nurse or medical escort services to ensure patient comfort and safety during travel and medical treatments.
                        </p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Currency Exchange</h3>
                        <p>Providing currency exchange services to help clients manage finances when
                            traveling to Cuba.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Sightseeing Tours</h3>
                        <p>Organizing curated tours of Cuba's most famous cultural and natural attractions.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Cell Service Coordination</h3>
                        <p>Assisting with setting up local SIM cards or international roaming for easy communication during the trip.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Airport Meet & Greet</h3>
                        <p>Greeting clients at the airport upon arrival in Cuba, ensuring a smooth and welcoming entry.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Travel Companion</h3>
                        <p>Arranging for a professional travel companion to accompany patients, providing additional comfort and assistance.</p>
                    </li>
                    <li>
                        <h3 class="text-xl mb-2 text-[#00b9bb]">Leisure Activity Planning</h3>
                        <p>Creating customized itineraries for leisure and relaxation, such as private art tours, cultural excursions, or beach visits.</p>
                    </li>
                    <li>
                            <h3 class="text-xl mb-2 text-[#00b9bb]">Spa/Beauty Services</h3>
                            <p>Organizing spa services to ensure that clients have relaxing and rejuvenating experience during their trip.</p>
                        </li>
                </ul>
            </section>
            
            <section class="font-roboto p-4" id="contact">
                <h1 class="text-3xl text-center font-bold text-black">Contact Us</h1>
                <form action="{{ route('contact.submit') }}" method="POST" class="bg-white shadow-md rounded-lg border-2 border-gray-300 m-2">
                    @csrf
                    <div class="flex flex-col md:flex-row gap-4 p-4">
                        <input type="text" name="name" placeholder="Your Name" class="flex-1 p-2 border border-gray-300 rounded" required>
                        <input type="email" name="email" placeholder="Your Email" class="flex-1 p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="p-4">
                        <select type="text" name="subject" placeholder="Subject" class="w-full p-2 border border-gray-300 rounded" required>
                            <option value="" disabled selected>Select Subject</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Medical Services">Medical Services</option>
                            <option value="Dental Services">Dental Services</option>
                            <option value="Travel Arrangements">Travel Arrangements</option>
                            <option value="Spa/Beauty Services">Spa/Beauty Services</option>
                            <option value="Leisure Activities">Leisure Activities</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="p-4">
                        <textarea name="message" rows="4" placeholder="Your Message" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                    </div>
                    <div class="p-4 text-center">
                        <button type="submit" class="bg-[#00b9bb] text-white px-6 py-2 rounded hover:bg-[#008f8f] transition-colors">Send Message</button>
                    </div>
                </form>
            </section>
        </main>
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
        <script>
            const { createApp } = Vue;
            createApp({
                data() {
                    return {
                        showMobileMenu: false
                    }
                },
                methods: {
                    toggleMenu() {
                        this.showMobileMenu = ! this.showMobileMenu
                    }
                }
            }).mount('#app');
        </script>
    </body>
</html>
