@extends('User.Layouts.layout')

@section('title', 'virus removal service')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="content">

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">



        <section class="e-support-banner">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        <h2>Your Personal Tech Lifeline</h2>
                        <h3 class="mt-3">On-Demand Remote Services for All Things Tech</h3>
                        <p class="mt-5">Technology hiccups can be frustrating, and when they happen, you need a reliable
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
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12 anm-box">
                        <h2 class="mb-5">What We Offer?</h2>
                        <img src="{{ asset('assets/e-support/What-We-Offer.png') }}" alt="" class="img-fluid"
                            width="95%">
                        <img src="{{ asset('assets/e-support/e-support-shield.png') }}" alt=""
                            class="img-fluid anim-shield">
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        <div class="sct-spacing"></div>
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
                {{-- <div class="grid grid-cols-12 gap-6 mt-5">
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
                </div> --}}

                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 ifive-box">
                        <div class="ifive-boxes">
                            <i class="bi bi-send-slash"></i>
                            <h3>Convenient Remote Support</h3>
                            <p>Enjoy the convenience of resolving tech issues without leaving your home. We provide remote support that's secure and efficient.</p>
                        </div>
                        <div class="ifive-bottom"></div>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 ifive-box">
                        <div class="ifive-boxes">
                            <i class="bi bi-send-slash"></i>
                            <h3>Convenient Remote Support</h3>
                            <p>Enjoy the convenience of resolving tech issues without leaving your home. We provide remote support that's secure and efficient.</p>
                        </div>
                        <div class="ifive-bottom"></div>
                    </div>
                    <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 ifive-box">
                        <div class="ifive-boxes">
                            <i class="bi bi-send-slash"></i>
                            <h3>Convenient Remote Support</h3>
                            <p>Enjoy the convenience of resolving tech issues without leaving your home. We provide remote support that's secure and efficient.</p>
                        </div>
                        <div class="ifive-bottom"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="e-support-section-six">
            <div class="container">
                <div class="grid grid-cols-12 gap-6 pt-5">
                    <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-12 col-span-12">
                        <h2>Easily Setup the Smart Devices</h2>
                        <p class="pt-3">TTB eSupport Concierge will guide you through setting up your <br>hardware and
                            software smoothly.</p>
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
                                    <h3>Business Network Setup:</h3>
                                    <p class="mt-2"> As a newbie, setting up your home automation devices on your own can
                                        be difficult.
                                        But with our TTB eSupport Concierge it will be easier than ever.</p>
                                    <div class="flex mt-5">
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Watch Over Your Family from Anywhere</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Eliminate Common & Complex Issues</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Top-Notch Experience Without Lagging</p>
                                        </div>
                                    </div>
                                    <div class="flex pt-2 pb-2">
                                        <div class="price-tab">
                                            <h4>$69</h4>
                                        </div>
                                        <div class="price-cnt">
                                            <h5>1 Time</h5>
                                            <p>Home Network Setup</p>
                                        </div>
                                    </div>
                                    <div class="tab-btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                                <div id="pills-on-gray-color-2" class="hidden" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-2">
                                    <h3>Smart Device Setup:</h3>
                                    <p class="mt-2"> From your home networks to workplace security devices, we will help
                                        you optimize them for optimal functioning only.</p>
                                    <div class="flex mt-5">
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Watch Over Your Family from Anywhere</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Eliminate Common & Complex Issues</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Top-Notch Experience Without Lagging</p>
                                        </div>
                                    </div>
                                    <div class="flex pt-2 pb-2">
                                        <div class="price-tab">
                                            <h4>$69</h4>
                                        </div>
                                        <div class="price-cnt">
                                            <h5>1 Time</h5>
                                            <p>Home Network Setup</p>
                                        </div>
                                    </div>
                                    <div class="tab-btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                                <div id="pills-on-gray-color-3" class="hidden" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-3">
                                    <h3>Software Installation:</h3>
                                    <p class="mt-2"> Software installation can be difficult to eliminate without
                                        professional advice. So, contact us to ensure your software is set up and
                                        functioning properly.</p>
                                    <div class="flex mt-5">
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Watch Over Your Family from Anywhere</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Eliminate Common & Complex Issues</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-hdd-stack"></i>
                                            <p>Top-Notch Experience Without Lagging</p>
                                        </div>
                                    </div>
                                    <div class="flex pt-2 pb-2">
                                        <div class="price-tab">
                                            <h4>$69</h4>
                                        </div>
                                        <div class="price-cnt">
                                            <h5>1 Time</h5>
                                            <p>Home Network Setup</p>
                                        </div>
                                    </div>
                                    <div class="tab-btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12">
                        <img src="{{ asset('assets/e-support/e-support-tab-1.png') }}" alt=""
                            class="img-fluid mt-2" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <section class="e-support-section-seven">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12">
                        <img src="{{ asset('assets/e-support/e-support-tab-2.png') }}" alt=""
                            class="img-fluid mt-2" width="100%">
                    </div>
                    <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-12 col-span-12">
                        <h2>Troubleshoot Your Devices With TTB eSupport Concierge</h2>
                        <p class="pt-3">Our experts can help you eliminate various issues within <br>your devices.</p>
                        <div class="box">

                            <nav class="flex space-x-2 rtl:space-x-reverse" aria-label="Tabs">
                                <button type="button"
                                    class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 dark:hs-tab-active:bg-light dark:hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white active"
                                    id="pills-on-gray-color-item-4" data-hs-tab="#pills-on-gray-color-4"
                                    aria-controls="pills-on-gray-color-4">
                                    Remove Virus/Malware
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 dark:hs-tab-active:bg-light dark:hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white"
                                    id="pills-on-gray-color-item-5" data-hs-tab="#pills-on-gray-color-5"
                                    aria-controls="pills-on-gray-color-5">
                                    Smart Devices
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 dark:hs-tab-active:bg-light dark:hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white"
                                    id="pills-on-gray-color-item-6" data-hs-tab="#pills-on-gray-color-6"
                                    aria-controls="pills-on-gray-color-6">
                                    Operating System Issues
                                </button>
                                <button type="button"
                                    class="hs-tab-active:bg-gray-200 hs-tab-active:text-gray-800 hs-tab-active:hover:text-gray-800 dark:hs-tab-active:bg-light dark:hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white"
                                    id="pills-on-gray-color-item-7" data-hs-tab="#pills-on-gray-color-7"
                                    aria-controls="pills-on-gray-color-7">
                                    System Fixing
                                </button>
                            </nav>

                            <div class="mt-3">
                                <div id="pills-on-gray-color-4" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-4">
                                    <h3>Business Network Setup:</h3>
                                    <p class="mt-2"> As a newbie, setting up your home automation devices on your own can
                                        be difficult.
                                        But with our TTB eSupport Concierge it will be easier than ever.</p>
                                    <div class="flex mt-5">
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Watch Over Your Family from Anywhere</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Eliminate Common & Complex Issues</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Top-Notch Experience Without Lagging</p>
                                        </div>
                                    </div>
                                    <div class="flex pt-2 pb-2">
                                        <div class="price-tab">
                                            <h4>$69</h4>
                                        </div>
                                        <div class="price-cnt">
                                            <h5>1 Time</h5>
                                            <p>Home Network Setup</p>
                                        </div>
                                    </div>
                                    <div class="tab-btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                                <div id="pills-on-gray-color-5" class="hidden" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-5">
                                    <h3>Smart Device Setup:</h3>
                                    <p class="mt-2"> From your home networks to workplace security devices, we will help
                                        you optimize them for optimal functioning only.</p>
                                    <div class="flex mt-5">
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Watch Over Your Family from Anywhere</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Eliminate Common & Complex Issues</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Top-Notch Experience Without Lagging</p>
                                        </div>
                                    </div>
                                    <div class="flex pt-2 pb-2">
                                        <div class="price-tab">
                                            <h4>$69</h4>
                                        </div>
                                        <div class="price-cnt">
                                            <h5>1 Time</h5>
                                            <p>Home Network Setup</p>
                                        </div>
                                    </div>
                                    <div class="tab-btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                                <div id="pills-on-gray-color-6" class="hidden" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-6">
                                    <h3>Operating System Issues:</h3>
                                    <p class="mt-2"> From your home networks to workplace security devices, we will help
                                        you optimize them for optimal functioning only.</p>
                                    <div class="flex mt-5">
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Watch Over Your Family from Anywhere</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Eliminate Common & Complex Issues</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Top-Notch Experience Without Lagging</p>
                                        </div>
                                    </div>
                                    <div class="flex pt-2 pb-2">
                                        <div class="price-tab">
                                            <h4>$69</h4>
                                        </div>
                                        <div class="price-cnt">
                                            <h5>1 Time</h5>
                                            <p>Home Network Setup</p>
                                        </div>
                                    </div>
                                    <div class="tab-btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                                <div id="pills-on-gray-color-7" class="hidden" role="tabpanel"
                                    aria-labelledby="pills-on-gray-color-item-7">
                                    <h3>Software Installation:</h3>
                                    <p class="mt-2"> Software installation can be difficult to eliminate without
                                        professional advice. So, contact us to ensure your software is set up and
                                        functioning properly.</p>
                                    <div class="flex mt-5">
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Watch Over Your Family from Anywhere</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Eliminate Common & Complex Issues</p>
                                        </div>
                                        <div class="tab-icon">
                                            <i class="bi bi-gear"></i>
                                            <p>Top-Notch Experience Without Lagging</p>
                                        </div>
                                    </div>
                                    <div class="flex pt-2 pb-2">
                                        <div class="price-tab">
                                            <h4>$69</h4>
                                        </div>
                                        <div class="price-cnt">
                                            <h5>1 Time</h5>
                                            <p>Home Network Setup</p>
                                        </div>
                                    </div>
                                    <div class="tab-btn-buy">
                                        <a href="#">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="e-suppor-testimonials">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                        <div class="testimonial-container">
                            <h2 class="text-center" style="margin: auto;">Testimonials</h2>
                            <div class="btn" id="btn-prev"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="btn" id="btn-next"><i class="fa-solid fa-arrow-right"></i></div>
                            {{-- <div class="stars">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div> --}}
                            <div class="testimonial">
                              <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="user" class="user-image" />
                              <p class="tect-center testimonial-text" style="font-size: 16px; font-weight: 600;">
                                I've worked with literally hundreds of HTML/CSS developers and I have to
                                say the top spot goes to this guy. This guy is an amazing developer. He
                                stresses on good, clean code and pays heed to the details. I love
                                developers who respect each and every aspect of a thoroughly thought-out
                                design and do their best to put it in code. He goes over and beyond and
                                transforms ART into PIXELS - without a glitch, every time.
                              </p>
                            </div>
                            <div class="user">
                              <div class="user-details">
                                <h4 class="username">Miyah Myles</h4>
                                <p class="role">Marketing</p>
                              </div>
                            </div>
                            <div class="progress-dots" id="progress-dots"></div>
                          </div>
                          
                        
                        <script>
                        
                        const testimonialsContainer = document.querySelector(".testimonials-container");
                        const testimonialText = document.querySelector(".testimonial-text");
                        const userImage = document.querySelector(".user-image");
                        const username = document.querySelector(".username");
                        const role = document.querySelector(".role");
                        const btnPrev = document.getElementById("btn-prev");
                        const btnNext = document.getElementById("btn-next");
                        const progressDots = document.getElementById("progress-dots");
                        
                        const testimonials = [
                          {
                            name: "June Cha",
                            position: "Software Engineer",
                            photo: "https://t4.ftcdn.net/jpg/02/44/43/69/240_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg",
                            text: "1 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."
                          },
                          {
                            name: "Iida Niskanen",
                            position: "Data Entry",
                            photo: "https://t4.ftcdn.net/jpg/02/44/43/69/240_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg",
                            text: "2 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."
                          },
                          {
                            name: "Renee Sims",
                            position: "Receptionist",
                            photo: "https://t4.ftcdn.net/jpg/02/44/43/69/240_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg",
                            text: "3 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."
                          },
                          {
                            name: "Sasha Ho",
                            position: "Accountant",
                            photo: "https://t4.ftcdn.net/jpg/02/44/43/69/240_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg",
                            text: "4 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."
                          },
                          {
                            name: "Veeti Seppanen",
                            position: "Director",
                            photo: "https://t4.ftcdn.net/jpg/02/44/43/69/240_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg",
                            text: "5 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."
                          }
                        ];
                        
                        let idx = 0;
                        let autoplay;
                        
                        testimonials.forEach((testimonial) => {
                          const dot = document.createElement("div");
                          dot.classList.add("progress-dot");
                          progressDots.appendChild(dot);
                        });
                        
                        function displayTestimonial() {
                          const { name, position, photo, text } = testimonials[idx];
                        
                          testimonialText.innerHTML = text;
                          userImage.src = photo;
                          username.innerHTML = name;
                          role.innerHTML = position;
                        
                          updateProgressDots();
                        }
                        
                        function updateProgressDots() {
                          const dots = progressDots.children;
                          [...dots].forEach((dot) => {
                            dot.classList.remove("active");
                          });
                          dots[idx].classList.add("active");
                        }
                        
                        btnNext.addEventListener("click", () => {
                          idx === testimonials.length - 1 ? (idx = 0) : idx++;
                          displayTestimonial();
                          resetAutoplay();
                        });
                        
                        btnPrev.addEventListener("click", () => {
                          idx === 0 ? (idx = testimonials.length - 1) : idx--;
                          displayTestimonial();
                          resetAutoplay();
                        });
                        
                        function resetAutoplay() {
                          clearInterval(autoplay);
                          autoplay = setInterval(() => {
                            idx === testimonials.length - 1 ? (idx = 0) : idx++;
                            displayTestimonial();
                          }, 2000);
                        }
                        
                        displayTestimonial();
                        resetAutoplay();
                        
                        
                        
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section class="e-suppor-faqs">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                        <h2 class="text-center">Frequently Asked Questionsl</h2>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6  pt-5">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        <img src="{{ asset('assets/e-support/e-support-faqs.png') }}" alt=""
                            class="img-fluid mt-2" width="100%">
                        <p class="faq-font">TTB eSupport Concierge is a remote technical help provider to users who need
                            help with their
                            smart devices. We assist users from all over the world.</p>
                        <div class="faq-btn mt-5">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                        <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                            id="accordionFAQ2">
                            <div class="hs-accordion-group">
                                <div class="hs-accordion active bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                    id="faq-five">
                                    <button type="button"
                                        class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="faq-collapse-seven">
                                        General Terms &amp; Conditions (GTC)
                                        <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-seven"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="faq-five">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by
                                                default, until the collapse plugin adds the appropriate classes that
                                                we
                                                use to style each element. These classes control the overall
                                                appearance,
                                                as well as the showing and hiding via CSS transitions. You can
                                                modify
                                                any of this with custom CSS or overriding our default variables.
                                                It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                    id="faq-six">
                                    <button type="button"
                                        class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="faq-collapse-eight">
                                        Do I need to create an account to make an order?
                                        <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-eight"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="faq-six">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by
                                                default, until the collapse plugin adds the appropriate classes that
                                                we
                                                use to style each element. These classes control the overall
                                                appearance,
                                                as well as the showing and hiding via CSS transitions. You can
                                                modify
                                                any of this with custom CSS or overriding our default variables.
                                                It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                    id="faq-seven">
                                    <button type="button"
                                        class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="faq-collapse-nine">
                                        Where can I subscribe to your newsletter?
                                        <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-nine"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="faq-seven">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by
                                                default, until the collapse plugin adds the appropriate classes that
                                                we
                                                use to style each element. These classes control the overall
                                                appearance,
                                                as well as the showing and hiding via CSS transitions. You can
                                                modify
                                                any of this with custom CSS or overriding our default variables.
                                                It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                    id="faq-eight">
                                    <button type="button"
                                        class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="faq-collapse-ten">
                                        Where can in edit my address?
                                        <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-ten"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="faq-eight">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by
                                                default, until the collapse plugin adds the appropriate classes that
                                                we
                                                use to style each element. These classes control the overall
                                                appearance,
                                                as well as the showing and hiding via CSS transitions. You can
                                                modify
                                                any of this with custom CSS or overriding our default variables.
                                                It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                    id="faq-nine">
                                    <button type="button"
                                        class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                        aria-controls="faq-collapse-eleven">
                                        What are your opening hours?
                                        <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-eleven"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="faq-nine">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by
                                                default, until the collapse plugin adds the appropriate classes that
                                                we
                                                use to style each element. These classes control the overall
                                                appearance,
                                                as well as the showing and hiding via CSS transitions. You can
                                                modify
                                                any of this with custom CSS or overriding our default variables.
                                                It's
                                                also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





















    </div>

    </div>
@endsection
 