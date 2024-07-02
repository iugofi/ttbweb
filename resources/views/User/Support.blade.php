

@extends('User.Layouts.layout')

@section('title', 'Support')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">

    <div class="container mx-auto p-8" data-aos="fade-up">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Let's get in Touch</h2>
            <p>We're open for any suggestion.</p>
        </div>

        <div class="flex flex-wrap justify-center gap-8">
            <div class="w-full lg:w-1/2 space-y-8">
                <div class="bg-gray-800 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <i class="bi bi-geo-alt text-2xl text-teal-400"></i>
                        <h3 class="ml-4 text-xl font-bold">OUR OFFICES</h3>
                    </div>
                    <div class="space-y-4">
                        <p><span class="text-teal-400 font-semibold">USA: </span>Sand Lake Rd, Orlando, FL, USA</p>
                        <p><span class="text-teal-400 font-semibold">United Kingdom: </span>Shelton Street, Covent Garden, London, UK</p>
                        <p><span class="text-teal-400 font-semibold">Canada: </span>Sugarpine Court Brampton, Ontario, CA</p>
                        <p><span class="text-teal-400 font-semibold">India: </span>Bestech Business Tower, Sector 66, Mohali, IN</p>
                    </div>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <i class="bi bi-envelope text-2xl text-teal-400"></i>
                        <h3 class="ml-4 text-xl font-bold">Support</h3>
                    </div>
                    <p><a href="mailto:support@ttbinternetsecurity.com" class="text-teal-400">support@ttbinternetsecurity.com</a></p>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <i class="bi bi-telephone text-2xl text-teal-400"></i>
                        <h3 class="ml-4 text-xl font-bold">Call Us</h3>
                    </div>
                    <p>(800) 710-9311</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <h2 class="text-2xl font-bold mb-8">Send Message</h2>
                <form action="contact_mail.php" method="POST" class="space-y-6">
                    <div class="relative">
                        <input type="text" name="firstname" required class="w-full bg-gray-700 text-white rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-teal-400">
                        <label class="absolute top-0 left-0 p-4 pointer-events-none text-gray-500 transition-all transform -translate-y-1/2 scale-75">First Name</label>
                    </div>

                    <div class="relative">
                        <input type="text" name="lastname" required class="w-full bg-gray-700 text-white rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-teal-400">
                        <label class="absolute top-0 left-0 p-4 pointer-events-none text-gray-500 transition-all transform -translate-y-1/2 scale-75">Last Name</label>
                    </div>

                    <div class="relative">
                        <input type="email" name="email" required class="w-full bg-gray-700 text-white rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-teal-400">
                        <label class="absolute top-0 left-0 p-4 pointer-events-none text-gray-500 transition-all transform -translate-y-1/2 scale-75">Your Email</label>
                    </div>

                    <div class="relative">
                        <input type="tel" name="contact" required class="w-full bg-gray-700 text-white rounded-lg p-4 focus:outline-none focus:ring-2 focus:ring-teal-400">
                        <label class="absolute top-0 left-0 p-4 pointer-events-none text-gray-500 transition-all transform -translate-y-1/2 scale-75">Contact Number</label>
                    </div>

                    <div class="relative">
                        <textarea name="query" required class="w-full bg-gray-700 text-white rounded-lg p-4 h-32 focus:outline-none focus:ring-2 focus:ring-teal-400"></textarea>
                        <label class="absolute top-0 left-0 p-4 pointer-events-none text-gray-500 transition-all transform -translate-y-1/2 scale-75">Your Query</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="message" class="bg-teal-400 text-white py-2 px-6 rounded-lg transition-all hover:bg-teal-500">Send Query</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






</div>

@endsection