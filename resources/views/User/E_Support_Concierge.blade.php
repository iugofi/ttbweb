@extends('User.Layouts.layout')

@section('title', 'virus removal service')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">



        <section class="e-support-banner">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        <h2>Your Personal Tech Lifeline</h2>
                        <h3>On-Demand Remote Services for All Things Tech</h3>
                        <p class="mt-3">Technology hiccups can be frustrating, and when they happen, you need a reliable
                            partner to a turn to. TTB eSupport Concierge can help fill the blanks.</p>
                        <p class="mt-5">From hardware setup to software troubles, and everything in between, we got you
                            covered!</p>
                        <div class="bttn-box">
                            <a href="#" class="btn-home-now">Choose Our Plans </a>
                            <a href="#" class="btn-home-cnt ms-5">Free Scan</a>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        {{-- <img src="{{asset('assets/home-two-img/banner-one-home2.png') }}" alt=""
                    class="img-fluid" width="100%"> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="e-support-section-two">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                        <h2>What is TTB eSupport Concierge?</h2>
                        <p class="mb-5 mt-2">TTB eSupport Concierge offers top-quality services to users for all their smart
                            devices. With a
                            single click, <br> you can have top-notch assistance at your beck and call.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12 icon-box">
                        <p class="mt-3">Guaranteed finest aid for your network and devices and exceptional user
                            experience.</p>
                        <div class="flex">
                            <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-7 col-span-7">
                                <i class="fa-solid fa-arrow-right"></i><span class="ms-2">Read More</span>
                            </div>
                            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-5 col-span-5 inner-icon">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12 icon-box">
                        <p class="mt-3">Guaranteed finest aid for your network and devices and exceptional user
                            experience.</p>
                        <div class="flex">
                            <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-7 col-span-7">
                                <i class="fa-solid fa-arrow-right"></i><span class="ms-2">Read More</span>
                            </div>
                            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-5 col-span-5 inner-icon">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12 icon-box">
                        <p class="mt-3">Guaranteed finest aid for your network and devices and exceptional user
                            experience.</p>
                        <div class="flex">
                            <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-7 col-span-7">
                                <i class="fa-solid fa-arrow-right"></i><span class="ms-2">Read More</span>
                            </div>
                            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-5 col-span-5 inner-icon">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12 icon-box">
                        <p class="mt-3">Guaranteed finest aid for your network and devices and exceptional user
                            experience.</p>
                        <div class="flex">
                            <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-7 col-span-7">
                                <i class="fa-solid fa-arrow-right"></i><span class="ms-2">Read More</span>
                            </div>
                            <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-5 col-span-5 inner-icon">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="e-support-section-three">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        <h2>What We Offer?</h2>
                        {{-- <img src="{{asset('assets/home-two-img/banner-one-home2.png') }}" alt=""
                    class="img-fluid" width="100%"> --}}
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        <h3>Software Assistance</h3>
                        <p>Our experts are well-equipped to resolve any software issues you might encounter, ensuring your
                            device runs smoothly and efficiently.</p>
                        <h3>Computer Tune-Up</h3>
                        <p>If your computer has slowed down or needs optimization, our team can perform a thorough tune-up
                            to bring back its peak performance.</p>
                        <h3>Device Configuration and Setup</h3>
                        <p>Struggling with device configuration or setting up your home network? We'll guide you through the
                            process, step by step, to ensure everything works seamlessly.</p>
                        <h3>Operating System Setup and Troubleshooting</h3>
                        <p>We specialize in OS setup, and if you encounter any issues, we'll provide you with a quick
                            solution.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="e-support-section-four">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                        <h2>Smart Tech Assistance</h2>
                        <p class="mb-5 mt-2">From smart home devices to tech gadgets, we can help you set up and
                            troubleshoot a wide <br>range of smart technologies.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 bx-pricing">
                        <i class="bi bi-coin icon-top"></i>
                        <h1>$99.99</h1>
                        <h2>ONE TIME INCIDENT</h2>
                        <p>PC/Mac/Single Device</p>
                        <div class="icon-txt text-center">
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">16 Customize Sub Page</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">105 Disk Space</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">3 Domain Access</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">24/7 Phone Support</span><br>
                        </div>
                        <div class="price-btn text-center">
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 bx-pricing">
                        <i class="bi bi-gem icon-top"></i>
                        <h1>$299.99</h1>
                        <h2>1 YEAR SUBSCRIPTION</h2>
                        <p>PC/Mac/Single Device</p>
                        <div class="icon-txt text-center">
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">16 Customize Sub Page</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">105 Disk Space</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">3 Domain Access</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">24/7 Phone Support</span><br>
                        </div>
                        <div class="price-btn text-center">
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 bx-pricing">
                        <i class="bi bi-stopwatch icon-top"></i>
                        <h1>$349.99</h1>
                        <h2>2 YEAR SUBSCRIPTION</h2>
                        <p>PC/Mac/Single Device</p>
                        <div class="icon-txt text-center">
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">16 Customize Sub Page</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">105 Disk Space</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">3 Domain Access</span><br>
                            <i class="bi bi-bookmark-check"></i><span class="ms-1">24/7 Phone Support</span><br>
                        </div>
                        <div class="price-btn text-center">
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="e-support-section-five">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                        <h2>Why Choose Us?</h2>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 ifive-box">
                        <i class="bi bi-send-slash"></i>
                        <h3>Expert Guidance</h3>
                        <p>Our technicians are highly skilled and experienced in addressing a wide variety of tech issues,
                            so you can trust that you're in capable hands.</p>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 ifive-box">
                        <i class="bi bi-send-slash"></i>
                        <h3>Convenient Remote Support</h3>
                        <p>Enjoy the convenience of resolving tech issues without leaving your home. We provide remote
                            support that's secure and efficient.</p>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 ifive-box">
                        <i class="bi bi-send-slash"></i>
                        <h3>Personalized Solutions</h3>
                        <p>Every tech problem is unique, and we tailor our solutions to your specific needs, ensuring a
                            personalized experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="e-support-section-six">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-12 col-span-12">
                        <h2>Easily Setup the Smart Devices</h2>
                        <p>TTB eSupport Concierge will guide you through setting up your hardware and software smoothly.</p>
                        <div class="box">

                            <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs">
                                <button type="button"
                                    class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 dark:hs-tab-active:bg-light dark:hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white active"
                                    id="pills-on-gray-color-item-1" data-hs-tab="#pills-on-gray-color-1"
                                    aria-controls="pills-on-gray-color-1">
                                    Business Network Setup
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 dark:hs-tab-active:bg-light dark:hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white"
                                    id="pills-on-gray-color-item-2" data-hs-tab="#pills-on-gray-color-2"
                                    aria-controls="pills-on-gray-color-2">
                                    Smart Device Setup
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 dark:hs-tab-active:bg-light dark:hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white"
                                    id="pills-on-gray-color-item-3" data-hs-tab="#pills-on-gray-color-3"
                                    aria-controls="pills-on-gray-color-3">
                                    Software Installation
                                </button>
                            </nav>

                            <div class="mt-3">
                                <div id="pills-on-gray-color-1" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-1">
                                    <p>
                                        How 
                                    </p>
                                </div>
                                <div id="pills-on-gray-color-2" class="hidden" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-2">
                                    <p>
                                        How 
                                    </p>
                                </div>
                                <div id="pills-on-gray-color-3" class="hidden" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-3">
                                    <p>
                                        How 
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12">

                    </div>
                </div>
            </div>
        </section>























    </div>
@endsection
