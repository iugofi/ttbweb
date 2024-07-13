@extends('User.Layouts.layout')

@section('title', 'TTB')


@section('content')



    <!-- MAIN-CONTENT -->
    <style>
        .main-content {
            padding: 0px !important;
        }

        /* Start popup css */

        /* Popup container */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
    
        /* Popup content */
        .popup-content {
            background: white;
            padding: 80px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            max-width: 500px;
            width: 90%;
        }
    
        /* Close button */
        .popup-content .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 30px;
            cursor: pointer;
        }
    
        /* Popup image */
        .popup-content img {
         margin: auto;
         max-width: 85px;
        }
    
        /* Popup text */
        .popup-content h1,
        .popup-content p {
            margin: 10px 0;
        }
    
        /* Button */
        .popup-content .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #13d8aa;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
    
        .popup-content .btn:hover {
            background-color: #0bb38c;
        }

        /* End popup css */

    </style>
    {{-- start popup html --}}
{{-- 
    <div class="popup" id="popup">
        <div class="popup-content">
            <button class="close-btn" id="closePopup">&times;</button>
            <img src="https://www.ttbinternetsecurity.com/assets/img/logo.png" alt="Popup Image">
            <h1>Special Offer!</h1>
            <p>Get 10% off your next purchase. <br>Use code: SPECIAL10 at checkout.</p>
            <a href="index.html" class="m-1 ti-btn ti-btn-primary-full mt-6" id="redirectHome">Purchase Now!</a>
        </div>
    </div> --}}
    
    <script>
        // Get the popup element
        const popup = document.getElementById('popup');
    
        // Get the close button element
        const closePopup = document.getElementById('closePopup');
    
        // Show the popup after 15 seconds
        setTimeout(() => {
            popup.style.display = 'flex';
        }, 1000);
    
        // Close the popup when the close button is clicked
        closePopup.addEventListener('click', () => {
            popup.style.display = 'none';
        });
    
        // Close the popup when clicking outside of the popup content
        window.addEventListener('click', (event) => {
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        });
    
        // Redirect to the home page when the button is clicked
        // document.getElementById('redirectHome').addEventListener('click', (event) => {
        //     event.preventDefault();
        //     window.location.href = '/';
        // });
    </script>

    {{-- End popup --}}


    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">


        <!-- Start::Home Content -->
        <div class="landing-banner" id="home">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                            <div class="lg:py-[3rem]">
                                <p class="landing-banner-heading mb-4 opacity-[0.9] pt-5 prevent-select"><span
                                        class="first-color">Robust Threat</span> Protection and Security Framework</p>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] dark-text">Holisticly
                                    procrastinate mission-critical convergence with reliable customer service. Assertively
                                    underwhelm idea-sharing for impactful solutions.
                                </div>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] dark-text">Assertively
                                    underwhelm idea-sharing for impactful solutions.
                                </div>
                                <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                                    Download Now
                                    {{-- <i class="ri-download-cloud-2-fill ms-2 align-middle"></i> --}}
                                    <i class='bx bxs-cloud-download icon-hm'></i>
                                </a>
                                <a href="#" class="popup-youtube  btn-white btn-circle btn-icon"><i
                                        class="bx bx-play watch-icon"></i>
                                    <span class="pl-2 text-black-light wtc-spn">Watch Now</a></span>
                            </div>
                            {{-- <img src="{{ asset('assets/img/icon-img.png') }}" class="img-fluid" width="85%"> --}}
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">

                            <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                                <img src="{{ asset('assets/img2/section-one-ttb.gif') }}" alt="" class="img-fluid"
                                    width="88%">
                            </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End::Home Content -->


        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]">
            <div class="container ">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    <div class="col-span-1 mb-4 ">
                        <div
                            class="p-7  !rounded-sm2 bg-white dark:bg-bodybg border box-shadow  dark:border-defaultborder/10 box-icon-cont">
                            <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                <i class="text-[1.5rem] bx bx-spreadsheet"></i>
                            </span>
                            <h3 class="font-medium mb-0 text-xl text-dark">Complete Online Privacy</h3>
                            <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] dark:text-white/50 ">
                                Lorem Ipsum is simply dummy industry.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 mb-4 ">
                        <div
                            class="p-7  !rounded-sm2 !bg-white dark:!bg-bodybg border box-shadow dark:border-defaultborder/10 box-icon-cont">
                            <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                <i class="text-[1.5rem] bx bx-user-plus"></i>
                            </span>
                            <h3 class="font-medium mb-0 text-xl text-dark">All-Around Digital Protection</h3>
                            <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] dark:text-white/50 ">
                                Lorem Ipsum is simply dummy industry.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 mb-4 ">
                        <div
                            class="p-7  !rounded-sm2 !bg-white dark:!bg-bodybg border box-shadow dark:border-defaultborder/10 box-icon-cont">
                            <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                <i class="text-[1.5rem] bx bx-money"></i>
                            </span>
                            <h3 class="font-medium mb-0 text-xl text-dark">Active Risk Management</h3>
                            <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] dark:text-white/50 ">
                                Lorem Ipsum is simply dummy industry.
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 mb-4 ">
                        <div
                            class="p-7 !rounded-sm2 !bg-white dark:!bg-bodybg border box-shadow dark:border-defaultborder/10 box-icon-cont">
                            <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                <i class="text-[1.5rem] bx bx-money"></i>
                            </span>
                            <h3 class="font-medium mb-0 text-xl text-dark">Zero System-Performance Lags</h3>
                            <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] dark:text-white/50 ">
                                Lorem Ipsum is simply dummy industry.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] third-back sect-three">
            <div class="animated-shape-wrap">
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
                <div class="animated-shape-item"></div>
            </div>
            <div class="container main-banner-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                        <div class="lg:py-[3rem]">
                            <h2 class="landing-banner-heading mb-4 opacity-[0.9] text-35xl"><span
                                    class="dark-black  font-semibold text-35xl">Smarter
                                    solutions for threats ever-sophisticated </span></h2>
                            <div class="text-[1rem] mb-[1.75rem] text-black opacity-[0.9] ">Monotonectally impact
                                sustainable e-services with front-end infomediaries. Collaboratively network functional
                                solutions whereas initiatives. Progressively pontificate collaborative "outside the box"
                                thinking for.</div>
                            <div class="text-[1rem] mb-[3rem] text-black opacity-[0.9] ">Monotonectally impact
                                sustainable e-services with front-end infomediaries. Collaboratively network functional
                                solutions whereas initiatives. Progressively pontificate collaborative "outside the box"
                                thinking for.</div>
                            <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                                Explore More
                                {{-- <i class="ri-eye-line ms-2 align-middle"></i> --}}
                            </a>
                        </div>
                    </div>
                    <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12" style="z-index: 0;">

                        <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                            <img src="{{ asset('assets/img/section-two-ttb.gif') }}" alt="" class="img-fluid"
                                width="75%">
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <div class="container main-banner-container">
                {{-- <div class="grid grid-cols-12 justify-center align-center"> --}}
                <div class="grid lg:grid-cols-12 md:grid-cols-12 sm:grid-cols-12 justify-center align-center">

                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 customize-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img2/section four.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 pt-5 pb-0 lg:px-2 !text-start px-0 my-auto">
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">We Strive To Offer Intelligent
                            Business
                            Solutions</h4> 
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>
                        <p class="text-[0.9rem]  text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition catalysts for change.
                            Collaboratively.
                        </p>
                        <div class="row row-service mt-5" style="display: flex;">
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2">
                                <img src="assets/img/Best-Services-Iocn-1.png" class="img-fluid service-icon p-1">
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2">
                                <h5 class="dark-text">Best Services</h5>
                                <p class="text-gray-light">Lorem ipsum dolor sit amet, eiusmod
                                    tempor.</p>
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2">
                                <img src="assets/img/Best-Services-Iocn-2.png " class="img-fluid service-icon p-1">
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2">
                                <h5 class="dark-text">Support 24/7</h5>
                                <p class="text-gray-light">Lorem ipsum dolor sit amet, eiusmod
                                    tempor.</p>
                            </div>

                        </div>
                        <div class="action-btns mt-5">
                            <a href="#" class="ti-btn bg-primary text-white mt-5">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70 sect-five"
            id="statistics">
            <div class="container text-center relative">
                {{-- <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                    class="landing-section-heading">Download Our Apps</span></p> --}}
                <h3 class="font-semibold mb-2 text-defaulttextcolor dark:text-defaulttextcolor/70  text-35xl ttb-heading">
                    Download Our Apps</h3>
                <div class="">
                    <div class="xl:col-span-7 col-span-12">
                        <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-12 font-normal">Start working with
                            that can provide everything you need to generate awareness, drive traffic, connect. Efficiently
                            <br>transform granular value with client-focused content. Energistically redefine market.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 my-btn-section">

                    <a href="#" class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave my-btn-pro">
                        <span class="fab fa-windows icon-size-sm mx-2 mr-3 h2"></span>
                        <div class="download-text text-left">
                            <small>Download form</small>
                            <h5 class="mb-0">Windows</h5>
                        </div>
                    </a>


                    <a href="#" class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave my-btn-pro">
                        <span class="fab fa-apple icon-size-sm mx-3 mr-3 h2"></span>
                        <div class="download-text text-left">
                            <small>Download form</small>
                            <h5 class="mb-0">App Store</h5>
                        </div>
                    </a>


                    <a href="#" class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave my-btn-pro">
                        <span class="fab fa-google-play icon-size-sm mx-3 mr-3 h2"></span>
                        <div class="download-text text-left">
                            <small>Download form</small>
                            <h5 class="mb-0">Google Play</h5>
                        </div>
                    </a>


                </div>

            </div>
        </section>


        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] " id="about">
            <div class="container text-center">

                <h3 class="font-semibold  mb-2 text-black-light features-one text-35xl ">TTB Features
                </h3>
                <div class="grid grid-cols-12 justify-center max-w-66xl mx-auto  pt-5 ">
                    <div class="col-span-12">
                        <p class=" dark:text-white/50  mb-4 font-normal">Objectively deliver professional value with
                            diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.</p>
                    </div>
                </div>
                <div
                    class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 justify-center align-center mobile-section sect-features">

                    <div class="row">
                        <!--feature new style start-->
                        <div class="grid-cols-3 grid-cols-12">
                            <div class="row  flex p-4">
                                <div class="grid-cols-2 col-md-6 text-left ">
                                    <i class="fa-regular fa-face-smile text-4xl p-2 px-3"></i>
                                </div>
                                <div class="grid-cols-2 sm:grid-cols-1 grid-cols-12 text-left ">
                                    <h4 class="text-2xl5 font-medium">Responsive web design</h4>
                                    <p class="leading-6 mt-2">Modular and monetize an componente between layouts monetize
                                        array. Core competencies for testing.</p>
                                </div>
                            </div>
                            <div class="row flex p-4">
                                <div class="grid-cols-2 col-md-6 text-left ">
                                    <i class='bx bx-vector text-4xl p-2 px-3'></i>
                                </div>
                                <div class="grid-cols-2 col-md-6 text-left">
                                    <h4 class="text-2xl5 font-medium">Responsive web design</h4>
                                    <p class="leading-6 mt-2">Modular and monetize an componente between layouts monetize
                                        array. Core competencies for testing.</p>
                                </div>
                            </div>
                            <div class="row flex p-4">
                                <div class="grid-cols-2 col-md-6 text-left ">
                                    <i class='bx bx-support text-4xl p-2 px-3'></i>
                                </div>
                                <div class="grid-cols-2 col-md-6 text-left">
                                    <h4 class="text-2xl5 font-medium">Responsive web design</h4>
                                    <p class="leading-6 mt-2">Modular and monetize an componente between layouts monetize
                                        array. Core competencies for testing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-cols-3 col-md-5 d-none d-sm-none d-md-block d-lg-block">
                        <div class="position-relative pb-md-5 py-lg-0 center-imgs">
                            <img alt="Image placeholder" src="{{ asset('assets/img/section-three-ttb.gif') }}"
                                class="img-fluid mt-5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="grid-cols-3 grid-cols-12">
                            <div class="row flex p-4">
                                <div class="grid-cols-2 col-md-6 text-left ">
                                    <i class='bx bx-category text-4xl p-2 px-3'></i>
                                </div>
                                <div class="grid-cols-2 col-md-6 text-left">
                                    <h4 class="text-2xl5 font-medium">Responsive web design</h4>
                                    <p class="leading-6 mt-2">Modular and monetize an componente between layouts monetize
                                        array. Core competencies for testing.</p>
                                </div>
                            </div>
                            <div class="row flex p-4">
                                <div class="grid-cols-2 col-md-6 text-left ">
                                    <i class='bx bx-window-alt text-4xl p-2 px-3'></i>
                                </div>
                                <div class="grid-cols-2 col-md-6 text-left">
                                    <h4 class="text-2xl5 font-medium">Responsive web design</h4>
                                    <p class="leading-6 mt-2">Modular and monetize an componente between layouts monetize
                                        array. Core competencies for testing.</p>
                                </div>
                            </div>
                            <div class="row flex p-4">
                                <div class="grid-cols-2 col-md-6 text-left ">
                                    <i class='bx bx-palette text-4xl p-2 px-3'></i>
                                </div>
                                <div class="grid-cols-2 col-md-6 text-left">
                                    <h4 class="text-2xl5 font-medium">Responsive web design</h4>
                                    <p class="leading-6 mt-2">Modular and monetize an componente between layouts monetize
                                        array. Core competencies for testing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature new style end-->


                </div>
            </div>
        </section>

        <!-- Start:: Section-5 -->
        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container text-center">
                {{-- <h3 class="font-semibold mb-2 !text-dark">Features Used in YNEX</h3> --}}
                <h2 class="text-center text-black-light font-semibold text-4xl">TTB #1 <span
                        class="text-color-ttb">Antivirus </span><br>Four Times In A Row.</h2>
                <div>
                    {{-- <div class="xl:col-span-7 col-span-12">
                    <p class="text-dark opacity-[0.8] text-[0.9375rem] mb-4 font-normal">Some of the reviews our
                        clients gave which brings motivation to work for future projects.</p>
                </div> --}}
                </div>
                <div class="text-start">
                    <div class="justify-center">

                        <div class="feature-logos sm:mt-[3rem] flex-wrap">
                            <div class="sm:ms-[0rem] ms-2 text-center mx-3 my-4">
                                <span class="featur-icon counternum !bg-[#f9fafb] dark:!bg-black/10">100</span>
                                <h5 class="mt-8-5 text-dark text-[1.25rem] font-medium">Av Test Certified</h5>
                                <p>May 2023</p>

                            </div>
                            <div class="sm:ms-[0rem] ms-2 text-center mx-3 my-4">
                                <span class="featur-icon counternum !bg-[#f9fafb] dark:!bg-black/10">100</span>
                                <h5 class="mt-8-5 text-dark text-[1.25rem] font-medium">Av Test Certified</h5>
                                <p>May 2023</p>

                            </div>
                            <div class="sm:ms-[0rem] ms-2 text-center mx-3 my-4">
                                <span class="featur-icon counternum !bg-[#f9fafb] dark:!bg-black/10">100</span>
                                <h5 class="mt-8-5 text-dark text-[1.25rem] font-medium">Av Test Certified</h5>
                                <p>May 2023</p>

                            </div>
                            <div class="sm:ms-[0rem] ms-2 text-center mx-3 my-4">
                                <span class="featur-icon counternum !bg-[#f9fafb] dark:!bg-black/10">100</span>
                                <h5 class="mt-8-5 text-dark text-[1.25rem] font-medium">Av Test Certified</h5>
                                <p>May 2023</p>
                            </div>


                        </div>

                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </section>
        <!-- End:: Section-5 -->


        <!-- Start:: Section-9 -->
        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="faq">
            <div class="container text-center">
                <h3 class="font-semibold text-4xl mb-2">Frequently Asked Queries</h3>
                <div class="grid grid-cols-12 justify-center">
                    <div class="col-span-12">
                        <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-12 font-normal">Efficiently
                            productivate reliable paradigms before ubiquitous models. Continually utilize frictionless
                            <br>expertise whereas tactical relationships. Still have questions? Contact us
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 text-start">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-6 col-span-12">
                                <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                                    <img src="{{ asset('assets/img/Faq-images.png') }}" alt="" width="95%"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
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
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
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
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
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
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
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
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
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
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
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
                </div>
            </div>
        </section>
        <!-- End:: Section-9 -->

        <!-- Start:: Section-5 -->
        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container main-banner-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="lg:py-[3rem]">
                            <h2 class="landing-banner-heading mb-4 opacity-[0.9] mt-10 font-semibold text-4xl">
                                <span>What Our Client Say <br> About Apdash</h2>
                            <div class="text-[1rem] mb-[3rem] !text-dark opacity-[0.9] ">Collaboratively actualize
                                excellent schemas without effective <br> models. Synergistically engineer functionalized
                                applications rather<br> than backend e-commerce.</div>


                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">

                        <div class="box custom-box slider-box box-review">
                            <div class="box-body">
                                <div class="swiper  custom-pagination">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide test-slider-img">


                                            <div class="item">
                                                <div class="testimonial-quote-wrap ttb-bg">
                                                    <div class="media author-info mb-3 flex ">
                                                        <div class="author-img mr-3">
                                                            <img src="assets/img/client/1.jpg" alt="client"
                                                                width="10px">
                                                        </div>
                                                        <div class="media-body text-white p-5">
                                                            <h5 class="mb-0 text-white">John Charles</h5>
                                                            <span>Head Of Admin</span>
                                                        </div>
                                                        <i class="fas fa-quote-right text-white"></i>
                                                    </div>
                                                    <div class="client-say text-white">
                                                        <p>Interactively optimize fully researched expertise vis-a-vis
                                                            plug-and-play relationships. Intrinsicly develop viral core
                                                            competencies for fully tested customer service. Enthusiastically
                                                            create next-generation growth strategies and.</p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>



                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Section-5 -->

    =======================================

<style>
    .testimonial-area {
        position: relative;
    }
    .testimonial-content {
        position: relative;
        z-index: 1;
        bottom: 4.8rem;
    }
    .owl-nav {
        position: absolute;
        top: 50%;
        width: calc(100% - 100px); /* Reduced width to leave space for buttons */
        display: flex;
        justify-content: space-between;
        transform: translateY(-4rem);
        /* padding: 0 50px;  */
        box-sizing: border-box;
        width: 100%;
    }
    .owl-nav button {
        background-color: transparent;
        border: none;
        font-size: 30px;
        cursor: pointer;
        transition: color 0.3s;
    }
    .owl-nav button:hover {
        color: var(--blue);
    }
    .sec-title.white-title h2 {
        color: #fff;
    }
    .client-video img {
        width: 150px !important;
        max-width: 65px;
    }
    .client-info i.fa-solid.fa-quote-left {
        position: absolute;
        right: 10px;
        font-size: 60px;
        color: #11CDBE;
    }
    .client-video {
        padding-right: 15px;
    }
    .client-info {
        display: flex;
        align-items: center;
        text-align: left;
        padding-bottom: 30px;
        margin-top: 1rem;
    }
    .single-testimonial p {
        background: #fff;
        padding: 42px 32px;
        box-shadow: 0px 0px 8px 2px #0000001a;
        border-radius: 6px;
    }
    .back-img {
        content: url('https://www.nighthawk-routerlogin.com/assets/img/Bg.png');
        width: 100%;
        position: relative;
        /* top: 5rem; */
    }
    .owl-nav button.owl-prev {
        position: relative;
        left: -3rem;
        padding: 8px;
        border-radius: 39px;
        border-width: 1px;
        border: 1px solid;
        height: 38px;
        align-items: center;
        display: inherit;
        font-size: 24px;
        color: #0000006e;
    }
.owl-nav button.owl-next {
        position: relative;
        right: -2rem;
        padding: 8px;
        border-radius: 39px;
        border-width: 1px;
        border: 1px solid;
        height: 38px;
        align-items: center;
        display: inherit;
        font-size: 24px;
        color: #0000006e;
    }
</style>

<section class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70" id="faq" style="overflow: hidden; padding-bottom: 0rem; height: 420px;">
    <div class="container main-banner-container">
       <section class="testimonial-area">
        <div class="container">
            <div class="sec-title white-title">
                <p class="text-center text-4xl font-bold mb-4 pb-4">What Client Say About Us?</p>
            </div>
            <div class="back-img"></div>
            <div class="testimonial-content owl-carousel">
                <!-- Single Testimonial -->
                <div class="single-testimonial carousel-slide single-testimonial p-4">
                    <div class="round-1 round"></div>
                    <div class="round-2 round"></div>
                    <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="client-info">
                        <div class="client-video">
                            <a href="#"><img src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg" alt=""></a>
                        </div>
                        <div class="client-details">
                            <h6>Yeasin Arafat</h6>
                            <span>Designer, LLCG Team</span>
                        </div>
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                </div>
                <!-- Add more testimonials as needed -->
                <div class="single-testimonial carousel-slide single-testimonial p-4">
                    <div class="round-1 round"></div>
                    <div class="round-2 round"></div>
                    <p>2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="client-info">
                        <div class="client-video">
                            <a href="#"><img src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg" alt=""></a>
                        </div>
                        <div class="client-details">
                            <h6>Yeasin Arafat</h6>
                            <span>Designer, LLCG Team</span>
                        </div>
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                </div>
                <!-- Repeat the above block for more testimonials -->
                <div class="single-testimonial carousel-slide single-testimonial p-4">
                    <div class="round-1 round"></div>
                    <div class="round-2 round"></div>
                    <p>3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="client-info">
                        <div class="client-video">
                            <a href="#"><img src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg" alt=""></a>
                        </div>
                        <div class="client-details">
                            <h6>Yeasin Arafat</h6>
                            <span>Designer, LLCG Team</span>
                        </div>
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                </div>
                <!-- Repeat the above block for more testimonials -->
                <div class="single-testimonial carousel-slide single-testimonial p-4">
                    <div class="round-1 round"></div>
                    <div class="round-2 round"></div>
                    <p>4. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="client-info">
                        <div class="client-video">
                            <a href="#"><img src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg" alt=""></a>
                        </div>
                        <div class="client-details">
                            <h6>Yeasin Arafat</h6>
                            <span>Designer, LLCG Team</span>
                        </div>
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                </div>
                <!-- Repeat the above block for more testimonials -->
                <div class="single-testimonial carousel-slide single-testimonial p-4">
                    <div class="round-1 round"></div>
                    <div class="round-2 round"></div>
                    <p>5. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <div class="client-info">
                        <div class="client-video">
                            <a href="#"><img src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg" alt=""></a>
                        </div>
                        <div class="client-details">
                            <h6>Yeasin Arafat</h6>
                            <span>Designer, LLCG Team</span>
                        </div>
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                </div>
                <!-- Repeat the above block for more testimonials -->
            </div>
            <div class="owl-nav">
                <button class="owl-prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="owl-next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
    </section>
</section>

<script>
    $(document).ready(function(){
        const owl = $(".testimonial-content");
        owl.owlCarousel({
            loop: true,
            margin: 8,
            dots: false,
            nav: false,
            mouseDrag: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        });

        $(".owl-prev").click(function() {
            owl.trigger('prev.owl.carousel');
        });
        
        $(".owl-next").click(function() {
            owl.trigger('next.owl.carousel');
        });
    });
</script>


--------------------------

<footer class="relative overflow-hidden z-1"> 
    <div class="footer-top py-12 bg-gradient-to-br from-purple-600 to-blue-800" style="margin-top: 4rem;">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap footer-flex"> 
          <div class="w-full lg:w-1/2 mb-8 lg:mb-0 mobile-flex">
            {{-- <h2 class="text-white text-3xl font-semibold mb-6">
                TTB INTERNET SECURITY APP</h2> --}}
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 my-btn-section">
                <a href="#" class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave my-btn-pros">
                    <span class="fab fa-apple icon-size-sm mx-3 mr-3 h2"></span>
                    <div class="download-text text-left">
                        <h5 class="mb-0">Download</h5>
                    </div>
                </a>
                <a href="#" class="ti-btn !rounded-full ti-btn-wave my-btn-pro" style="border: 1px solid #13D8AA ">
                    <span class="fab fa-google-play icon-size-sm mx-3 mr-3 h2" style="color: #13D8AA;"></span>
                    <div class="download-text text-left">
                        <h5 class="mb-0">Download</h5>
                    </div>
                </a>


            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="inner-column text-right lg:text-right">
              {{-- <h2 class="text-white text-3xl font-semibold mb-6">FOR MORE INFORMATION SUBSCRIBE TODAY</h2> --}}
              <div class="subscribe-form">
                <div class="" id="show_success_alert"></div>
                <form id="mail_subscribe" method="post">
                @csrf
                  <div class="form-group relative">
                    <input type="email" name="email_subscribe" id="email_subscribe" placeholder="Enter mail address..." required class="w-80 h-12 px-8 py-2 rounded-full bg-transparent text-black border border-white outline-none">
                  
                 <input type="submit" value="Subscribe" id="sub-button" class="absolute right-2 top-2 h-12 bg-yellow-500 text-indigo-800 font-semibold rounded-full px-6 uppercase subscribe-form button">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
        $(document).ready(function(){
            $('#mail_subscribe').submit(function(e){
                e.preventDefault();
                $('#sub-button').val('please wait..');
                $.ajax({
                    url: '{{ route('user.saveemailsub')}}',
                    method: 'post',
                    data: $(this).serialize(),
                    success:function(response) {
                        if(response.status == 400) {
                            showError('email_subscribe',response.messages.email_subscribe);
                            $('#sub-button').val('Subscribe');
                        }
                        else if(response.status == 200) {
                            $("#show_success_alert").html(showMessage('success',response.messages));
                            $('#mail_subscribe')[0].reset();
                            $('.invalid-feedback').empty();
                            removeValidationClass("#mail_subscribe");
                            $('#sub-button').val('Subscribe');
                        }
                    }
                });
            });
            
        });
    </script>
  
    <div class="widgets-section py-6">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap footer-flex justify-between">
            <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
              <div class="footer-widget">
                <div class="logo mb-8">
                  <a href="#"><img src="images/logo/logo-light.png" alt="" class="w-40"></a>
                </div>
                <p class="text-white mb-6">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul class="footer-info text-white">
                  <h2 class="text-white text-xl font-semibold mb-6">CONTACT US</h2>
                  <li class="mb-4 flex items-center"><i class="fa fa-phone mr-2 px-2 text-yellow-500"></i><a href="tel:(800) 710-9311">(800) 710-9311</a></li>
                  <li class="mb-4 flex items-center"><i class="fa-solid fa-envelope mr-2 px-2 text-yellow-500"></i> <a href="mailto:care@ttbinternetsecurity.com">care@ttbinternetsecurity.com</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full lg:w-1/5 mb-8 lg:mb-0 px-12">
              <div class="footer-widget">
                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">QUICK LINKS</h2>
                <ul class="list-none text-white">
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Home</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">About</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Support</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Sign In</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Personal</a></li>
                  <li><a href="#" class="hover:text-yellow-500">Commercial</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
              <div class="footer-widget">
                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">PRODUCTS</h2>
                <ul class="list-none text-white">
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB Antivirus</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB Internet Security</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB Total Security</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">TTB VPN Shield</a></li>
                </ul>
                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">RESOURCES</h2>
                <ul class="list-none text-white">
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">News</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Blogs</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
              <div class="footer-widget">
                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">SOLUTIONS</h2>
                <ul class="list-none text-white">
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">EndPoint Protection</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Network Protection</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Threat Protection</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Behavioral Protection</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Enhanced Firewall</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Malware Detection</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Real Time Anti-phishing</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">Virus Removal Service</a></li>
                  <li class="mb-2"><a href="#" class="hover:text-yellow-500">E-Support Concierge</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full lg:w-1/5 mb-8 lg:mb-0">
              <div class="footer-widget">
                <h2 class="text-white text-lg font-semibold mb-6 text-color-ttb">ADDRESS</h2>
                <ul class="list-none text-white">
                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">USA</h2>
                    <li class="flex items-center pb-2">Sand Lake Rd, Orlando, FL, USA</li>
                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">UNITED KINGDOM</h2>
                    <li class="flex items-center pb-2">Shelton Street, Covent Garden, London, UK</li>
                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">CANADA</h2>
                    <li class="flex items-center pb-2">Sugarpine Court Brampton, Ontario, CA</li>
                    <h2 class="text-white text-lg font-semibold mb-2 text-color-ttb">INDIA</h2>
                    <li class="flex items-center pb-2">Bestech Business Tower, Sector 66, Mohali, IN</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="footer-bottom py-4 border-t border-white">
        <div class="container mx-auto px-4">
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-center">
            
            <!-- Navigation Links Section -->
            <div class="mb-4 lg:mb-0">
                <div class="flex justify-center lg:justify-center below-links">
                  <ul class="flex lg:flex-row lg:space-x-4">
                    <li><a href="#" class="text-white">Support</a></li>
                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-white">Terms Of Service</a></li>
                    <li><a href="#" class="text-white">Return &amp; Refund Policy</a></li>
                    <li><a href="#" class="text-white">Sitemap</a></li>
                  </ul>
                </div>
              </div>


            <!-- Copyright Section -->
            <div class="mb-4 lg:mb-0">
              <p class="text-white text-sm">
                Copyright © 2024 
                <a href="https://nighthawk-routerlogin.com/">
                  <b style="color:#11CDBE;">TTB Antivirus.</b>
                </a> 
                All Rights Reserved
              </p>
            </div>
            
            <!-- Social Media Icons Section -->
            <div class="mb-4 lg:mb-0 icon-margin">
              <ul class="flex justify-center lg:justify-end space-x-2">
                <li>
                    <a href="https://www.facebook.com/ttbinternetsecurities/">
                  <button aria-label="Facebook" type="button" class="ti-btn ti-btn-sm ti-btn-primary">
                    <i class="ri-facebook-line font-bold"></i></a>
                  </button>
                </li>
                <li>
                    <a href="https://x.com/i/flow/login?redirect_after_login=%2FTTBisecure">
                  <button aria-label="Twitter" type="button" class="ti-btn ti-btn-sm ti-btn-secondary">
                    <i class="ri-twitter-line font-bold"></i></a>
                  </button>
                </li>
                <li>
                    <a href="https://www.instagram.com/ttbinternetsecurity/">
                  <button aria-label="Instagram" type="button" class="ti-btn ti-btn-sm ti-btn-warning">
                    <i class="ri-instagram-line font-bold"></i></a>
                  </button>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCda5n02Q-bHeQlyWwm3ieWg">
                  <button aria-label="YouTube" type="button" class="ti-btn ti-btn-sm ti-btn-danger">
                    <i class="ri-youtube-line font-bold"></i></a>
                  </button>
                </li>
                <li>
                    <li>
                        <a href="https://www.linkedin.com/company/ttbinternetsecurity">
                        <button aria-label="linkedin" type="button" class="ti-btn ti-btn-sm ti-btn-success">
                          <i class="fa-brands fa-linkedin font-bold"></i></a>
                        </button>
                      </li>
                      <a href="https://in.pinterest.com/ttbinternetsecurity/_created/">
                        <button aria-label="pinterest" type="button" class="ti-btn ti-btn-sm ti-btn-danger">
                      <i class="fa-brands fa-square-pinterest font-bold"></i></a>
                    </button>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

</footer>


    <style>
    footer {
  position: relative;
  overflow: hidden;
  z-index: 1;
}
footer::after {
  position: absolute;
  content: "";
  left: -1px;
  right: -1px;
  bottom: -1px;
  top: 0;
  z-index: -1;
  background-color: #000;
}
.footer-top h2 {
    font-size: 24px;
}
.footer-top .subscribe-form {
    position: absolute;
    right: 7rem;
    border: 1px solid #13d4b1;
    border-radius: 31px;
}
.footer-top .subscribe-form button {
    position: absolute;
    color: #fff;
    background: #13d4b1;
    right: 0rem;
    top: 0;
}
.footer-top .subscribe-form input {
    border: none;
}

.footer-widget a {
    font-size: 14px;
}
.footer-widget li {
    font-size: 14px;
}
.footer-widget p {
    font-size: 14px;
}
.footer-flex {
    flex-wrap: inherit;
}
.footer-bottom .items-center {
    display: flex;
    gap: 2rem;
}
.below-links li {
    padding: 0 0.4rem;
    border-right: 1px solid #fff;
}
.icon-margin {
    margin: auto;
}
section.section.landing-footer.text-white.text-\[0\.813rem\] {
    display: none;
}
.text-center.landing-main-footer.py-4 {
    display: none;
}
.footer-info li a:hover {
    color: #13d4b1;
}
.below-links li:last-child {
    border-right: 0 !important;
}
.pinterest {
    background: #e6002342;
    color: #e60023;
}
.pinterest:hover {
    color: #fff;
    background-color: #E60023;
}
    </style>  




</section>



    @endsection
