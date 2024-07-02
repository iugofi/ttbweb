

@extends('User.Layouts.layout')

@section('title', 'Support')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">

    <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="features">
        <div class="container main-banner-container text-center">
            <h2 class="landing-banner-heading mb-4 pb-5 opacity-[0.9] pt-5"><span class="text-dark"
                    style="font-size:40px; font-weight:600;">System Requirements</h2>
            <p class="card-text mb-4 pb-5">Lorem ipsum dolor sit amet</p>
            <div class="grid grid-cols-12 gap-6 forth-s-main">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                    <div class="xl:col-span-3 col-span-12 border-custom-main">
                        <div class="mb-8">
                            <div class="flex items-center mb-4">
                                <i class="bi bi-geo-alt text-4xl text-green-500 mr-4"></i>
                                <h3 class="text-xl font-bold">OUR OFFICES</h3>
                            </div>
                            <p class="mb-2"><span class="text-green-500 font-bold">USA:</span> Sand Lake Rd, Orlando, FL, USA</p>
                            <p class="mb-2"><span class="text-green-500 font-bold">United Kingdom:</span> Shelton Street, Covent Garden, London, UK</p>
                            <p class="mb-2"><span class="text-green-500 font-bold">Canada:</span> Sugarpine Court Brampton, Ontario, CA</p>
                            <p><span class="text-green-500 font-bold">India:</span> Bestech Business Tower, Sector 66, Mohali, IN</p>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                    <div class="xl:col-span-3 col-span-12 border-custom-main">
                        <form action="contact_mail.php" method="POST" class="space-y-6">
                            <div class="flex flex-wrap -mx-2">
                                <div class="w-full md:w-1/2 px-2 mb-4">
                                    <input type="text" name="firstname" required="" class="w-full p-3 bg-gray-900 border border-gray-700 rounded text-white" placeholder="First Name">
                                </div>
                                <div class="w-full md:w-1/2 px-2 mb-4">
                                    <input type="text" name="lastname" required="" class="w-full p-3 bg-gray-900 border border-gray-700 rounded text-white" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="email" name="email" required="" class="w-full p-3 bg-gray-900 border border-gray-700 rounded text-white" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" name="contact" required="" class="w-full p-3 bg-gray-900 border border-gray-700 rounded text-white" placeholder="Contact Number">
                            </div>
                            <div class="mb-4">
                                <textarea name="query" required="" class="w-full p-3 bg-gray-900 border border-gray-700 rounded text-white" placeholder="Your Query"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="message" class="px-6 py-3 bg-green-500 rounded hover:bg-green-600 transition">Send Query</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>






</div>

@endsection