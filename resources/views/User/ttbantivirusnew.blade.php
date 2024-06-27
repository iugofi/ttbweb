@extends('User.Layouts.layout')

@section('title', 'ttbantiviruenew')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')


@section('content')

    <script src="{{ asset('assets/js/main.js') }}"></script>


    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start::ttbantivirus section one -->
        <div class="antivirus-banner" id="antivirus">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical" style="position: relative; top: 7rem;">
                                <h1 class="text-center font-semibold mb-2 text-[2rem]" style="color: #fff;">Limited Time
                                    Offer Flat 50% off - No<br>
                                    Hidden Chnages Hurry Up!!!</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] text-center dark-text"
                                    style="color: #fff;">Holisticly
                                    procrastinate mission-critical convergence with reliable customer service.
                                    <br>Assertively
                                    underwhelm idea-sharing for impactful solutions.
                                </div>
                                <div class="bnr-btn text-center">
                                    <a href="index.html" class="m-1 ti-btn ti-btn-primary-full bnr-btn-1"
                                        style="padding: 8px 34px;">
                                        Buy Now
                                    </a>
                                    <a href="index.html" class="m-1 ti-btn bg-white bnr-btn-2" style="color:#11CDBE;">
                                        Download Now
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">

                            <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                            </div>

                        </div> --}}
                    </div>
                </div>
            </section>
        </div>
        <!-- End::ttbantivirus section one -->

        {{-- Start:: ttbantivirus section two --}}
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <div class="container ttbantivirus-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 antivirus-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start">
                            <img src="{{ asset('assets/img/ttb-second-section-img-2.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center box-animantion">
                            <img src="{{ asset('assets/img/Box.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 pt-5 pb-0 lg:px-2 !text-start">
                        <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">About Us</span>
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">Good Qualification Services <br>
                            And Better Skills</h4>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness.Collaboratively transition wireless customer service.
                        </p>

                        <div class="action-btns mt-4">
                            <a href="#" class="ti-btn bg-primary text-white">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End:: ttbantivirus section two --}}

        {{-- Start:: ttbantivirus section third --}}
        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container text-center">
                <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">What We Do</span>
                <h2 class="lg:text-center font-semibold mb-2 text-[2rem]">How does TTB Antivirus secure<br>
                    your devices?</h2><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box boxs1">
                            <div class="box-body">
                                <div class="mb-2 anti-img1">
                                    <span class="avatar avatar-md pt-5">

                                        <img src="assets/img/TTB-Antivirus-secure-Icon-1.png" alt="img"
                                            class="!rounded-md" style="max-width: 85px;height: 85px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Threat Protection</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>

                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box boxs1">
                            <div class="box-body">
                                <div class="mb-2 anti-img2">
                                    <span class="avatar avatar-md pt-5">
                                        <img src="assets/img/TTB-Antivirus-secure-Icon-2.png" alt="img"
                                            class="!rounded-md" style="max-width: 85px;height: 85px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Easy to Use</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box boxs1">
                            <div class="box-body">
                                <div class="mb-2 anti-img3">
                                    <span class="avatar avatar-md pt-5">
                                        <img src="assets/img/TTB-Antivirus-secure-Icon-3.png" alt="img"
                                            class="!rounded-md" style="max-width: 85px;height: 85px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Consumer Security</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box boxs1">
                            <div class="box-body">
                                <div class="mb-2 anti-img4 pt-3">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/TTB-Antivirus-secure-Icon-4.png" alt="img"
                                            class="!rounded-md" style="max-width: 85px;height: 85px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Virus Protection</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End:: ttbantivirus section third --}}

        {{-- Start:: ttbantivirus section forth --}}
        {{-- <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <h2 class="text-center font-semibold mb-5 text-[2rem]">Pricing Plan</h2>
            <div class="box overflow-hidden container pricing-section">
                <div class="box-body !p-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tabs-pane show active !p-0 border-b-0 dark:border-defaultborder/10"
                            id="pricing-monthly-pane" role="tabpanel">  
                            <div class="grid grid-cols-12">
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 pe-0">
                                    <div class="p-6 pricing">
                                        <h6 class="font-semibold text-left text-[1rem] text-black px-5 dark:text-white/50 opacity-1">BASIC</h6>
                                        <div class="py-4 flex items-center justify-left">
                                            <div class="text-end ms-5">
                                                <p class="text-[1.5625rem] font-semibold mb-0">$199</p>
                                                <p
                                                    class="text-[#000] dark:text-white/50 opacity-1 text-[.6875rem] font-semibold mb-0">
                                                    per month</p>
                                            </div>
                                        </div>
                                        <ul class="list-none text-left text-[0.75rem] px-4 pt-4 mb-0">
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Lorem dolor sit consectetur</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Daily Updates</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Online Support</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Visitors Monitoring</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">2 Free Domains</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Money Back Guarentee</span>
                                            </li>
                                        </ul>
                                        <div class="grid btnn">
                                            <button type="button" class="ti-btn ti-btn-primary" style="border: 1.8px solid #12D2B3;background: #fff; color: #12D2B3;">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 ps-0">
                                    <div class="p-6 pricing-offer overflow-hidden">
                                        <h6 class="font-semibold text-left text-[1rem] text-white px-5">PREMIUM</h6>
                                        <div class="py-4 flex items-center justify-left">
                                            <div class="text-end ms-5">
                                                <p class="text-[1.5625rem] font-semibold mb-0 text-primary">$499</p>
                                                <p
                                                    class="text-white dark:text-white/1 opacity-1 text-[.6875rem] font-semibold mb-0">
                                                    per month</p>
                                            </div>
                                        </div>
                                        <ul class="list-none text-left text-[0.75rem] px-4 pt-4 mb-0">
                                            <li class="mb-4">
                                                <span class="text-white dark:text-white/50 font-semibold text-sm">Lorem dolor sit consectetur</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-white dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Daily Updates</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-white dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Online Support</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-white dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Visitors Monitoring</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-white dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">30 Free Domains</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-white dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Money Back Guarentee</span>
                                            </li>
                                        </ul>  
                                        <div class="grid">
                                            <button type="button" class="ti-btn bg-primary text-white">Get
                                                Started</button>
                                        </div>
                                    </div>
                                </div>  
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 px-0">
                                    <div class="p-6 pricing">
                                        <h6 class="font-semibold text-left text-[1rem] text-black px-5 dark:text-white/50 opacity-1">ADVANCED</h6>
                                        <div class="py-4 flex items-center justify-left">
                                            <div class="text-end ms-5">
                                                <p class="text-[1.5625rem] font-semibold mb-0">$1,299</p>
                                                <p
                                                    class="text-[#000] dark:text-white/1 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                    per month</p>
                                            </div>
                                        </div>
                                        <ul class="list-none text-left text-[0.75rem] px-4 pt-4 mb-0">
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Lorem dolor sit consectetur</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Daily Updates</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Online Support</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Visitors Monitoring</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">10 Free Domains</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm bx bx-check-double space-icon">Money Back Guarentee</span>
                                            </li>
                                        </ul>
                                        <div class="grid btnn">
                                            <button type="button" class="ti-btn ti-btn-primary" style="border: 1.8px solid #12D2B3;background: #fff; color: #12D2B3;">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- Start:: pricing plan slider  --}}

        <style>
            .carousel {
                display: flex;
                overflow: hidden;
                width: 100%;
            }

            .carousel-item {
                min-width: calc(100% / 3);
                transition: transform 0.5s ease;
            }

            .carousel-container {
                display: flex;
                transition: transform 0.5s ease;
            }

            .carousel-button {
                background-color: #007bff;
                border: none;
                color: white;
                padding: 10px 20px;
                margin: 10px;
                cursor: pointer;
            }

            .carousel-button:disabled {
                background-color: #cccccc;
            }
        </style>
        <div class="carousel-container container section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]  main-banner-container mt-5 mb-5 pt-5">

            <div class="grid grid-cols-12 text-center">

            </div>
            <div class="grid-cols-12">
                <h3 class="font-semibold mb-2 pt-5 text-center">Pricing Plan</h3>
                <div class="grid grid-cols-12 text-center">
                    <div class="col-span-12">
                        <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-6 font-normal">We have shared some
                            of the most frequently asked questions to help you out.</p>
                    </div>
                </div>
                <div class="carousel">
                    <div id="carouselContainer" class="carousel-container">

                        @foreach ($plandetails as $plandetailsitem)
                            
                       
                        <div class="carousel-item">
                            <!-- Content for second slide -->
                            <div class="dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70">
                                <div class="box-body !p-0 sliders-box">
                                    <div class="!p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <div class="text-[1.125rem] font-semibold m-auto">TTB Antivirus {{$plandetailsitem->name}}</div>
                                            <div>
                                                {{-- <span class="badge bg-success/10 text-success">
                                                    For Small Teams
                                                </span> --}}
                                            </div>
                                        </div>
                                        <div class="text-[1.5625rem] font-bold mb-1">${{ $plandetailsitem->price }} <!-- <sub
                                                class="text-[#8c9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                                Per Month</sub>--> </div>
                                        <div class="mb-1 text-[#8c9097] dark:text-white/50">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                        <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                        <ul class="list-none mb-0">
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 Free</strong>Websites
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 GB</strong>Hard disk storage
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">2 Years</strong>Email support
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5</strong>Licenses
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Custom SEO optimizataion
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Chat Support
                                                </span>
                                            </li>
                                            <li class="grid">
                                                {{-- <button type="button" class="m-1 ti-btn ti-btn-primary-full">Choose
                                                    Plan</button> --}}
                                                    <a href="{{ route('user.fpay', ['id' => encrypt($plandetailsitem->id)]) }}" class="m-1 ti-btn ti-btn-primary-full">Choose Plan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>

            </div>
            <button class="carousel-btn left" onclick="scrollCarousel(-1)">‹</button>
            <button class="carousel-btn right" onclick="scrollCarousel(1)">›</button>
        </div>

        <script>
            function scrollCarousel(direction) {
                const carousel = document.querySelector('.carousel');
                const scrollAmount = carousel.scrollWidth / carousel.children.length;
                carousel.scrollLeft += direction * scrollAmount;
            }
        </script>

        {{-- End:: pricing plan slider  --}}
        {{-- End:: ttbantivirus section forth --}}

        {{-- Start:: ttbantivirus section fifth --}}
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]"
            style="padding-top:0px !important;">
            <div class="container ttbantivirus-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 antivirus-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img/Mobile.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div
                        class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 pt-5 pb-0 lg:px-2 !text-start text-vertical">
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">Mobile Friendly <br>
                            And Better Skills</h4>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness.Collaboratively transition wireless customer service.
                        </p>

                        <div class="action-btns mt-4">
                            <a href="#" class="ti-btn bg-primary text-white">Get in Touch</a>
                            <a href="#" class="ti-btn bg-primary text-white">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End:: ttbantivirus section fifth --}}

        {{-- Start:: ttbantivirus section six --}}
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]">
            <div class="container ttbantivirus-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div
                        class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 pt-5 pb-0 lg:px-2 !text-start text-vertical">
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">We Team og Experience
                            It Specialties <br></h4>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness.Collaboratively transition wireless customer service.
                        </p>
                        <div class="grid grid-rows-2 grid-flow-col pt-4 gap-1">
                            <div class="row-span-3"><img src="assets/img/Best-Services-Iocn-1.png "
                                    class="img-fluid !inline-flex backimage"></div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Support 24/7</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum dolor</p>
                            </div>
                        </div>
                        <div class="grid grid-rows-2 grid-flow-col pt-4 gap-1">
                            <div class="row-span-3"><img src="assets/img/Best-Services-Iocn-2.png "
                                    class="img-fluid !inline-flex backimage"></div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Support 24/7</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 antivirus-image text-center pt-5 mt-5 animantion-round">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center img-fst">
                            <img src="{{ asset('assets/img/We-team-of-experience-It-Specialties.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center img-round">
                            <img src="{{ asset('assets/img/Bg-Circle.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End:: ttbantivirus section six --}}

        {{-- Start:: ttbantivirus faq section saven --}}
        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="faq">
            <div class="container text-center">
                {{-- <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                        class="landing-section-heading">F.A.Q</span></p> --}}
                <h3 class="lg:text-center font-semibold mb-2 text-[2rem]">Frequently Asked Question</h3>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End:: ttbantivirus faq section saven --}}

        {{-- Start:: ttbantivirus review section eight --}}
        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container main-banner-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="lg:py-[3rem]">
                            <h2 class="lg:text-center font-semibold mb-2 text-[2rem]">
                                <span>What Our Client Say <br> About Apdash
                            </h2>
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
        {{-- End:: ttbantivirus review section eight --}}




    </div>
@endsection
