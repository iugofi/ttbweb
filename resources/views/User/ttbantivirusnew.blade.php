@extends('User.Layouts.layout')

@section('title', 'ttbantiviruenew')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')


@section('content')

<script src="{{ asset('assets/js/main.js')}}"></script>


    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start::ttbantivirus section one -->
        <div class="antivirus-banner" id="antivirus">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical"
                                style="position: relative; top: 7rem; padding-right: 2rem;">
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
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6  antivirus-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img/ttb-second-section-img-2.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center box-animantion">
                            <img src="{{ asset('assets/img/Box.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 pt-5 pb-0 lg:px-2 !text-start">
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
                    <div class="xl:col-span-3 col-span-12">
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
                    <div class="xl:col-span-3 col-span-12">
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
                    <div class="xl:col-span-3 col-span-12">
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
                    <div class="xl:col-span-3 col-span-12">
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
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <h2 class="text-center font-semibold mb-5 text-[2rem]">Pricing Plan</h2>
            <div class="box overflow-hidden container pricing-section">
                <div class="box-body !p-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tabs-pane show active !p-0 border-b-0 dark:border-defaultborder/10"
                            id="pricing-monthly-pane" role="tabpanel">
                            <div class="grid grid-cols-12">
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0">
                                    <div class="p-6 pricing">
                                        <h6 class="font-semibold text-left text-[1rem] text-black px-5">BASIC</h6>
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
                                        {{-- <span class="pricing-offer-details shadow">
                                            <span class="font-semibold">10%</span> <span
                                                class="text-[0.625rem] op-8 ms-1">Off</span>
                                        </span> --}}
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
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0">
                                    <div class="p-6 pricing">
                                        <h6 class="font-semibold text-left text-[1rem] text-black px-5">ADVANCED</h6>
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
        </div>
        {{-- End:: ttbantivirus section forth --}}

        {{-- Start:: ttbantivirus section fifth --}}
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]"  style="padding-top:0px !important;">
            <div class="container ttbantivirus-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6  antivirus-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img/Mobile.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 pt-5 pb-0 lg:px-2 !text-start text-vertical">
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
                <div class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 pt-5 pb-0 lg:px-2 !text-start text-vertical">
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">Mobile Friendly <br>
                            And Better Skills</h4>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness.Collaboratively transition wireless customer service.
                        </p>
                        <div class="grid grid-rows-2 grid-flow-col gap-1">
                            <div class="row-span-3">
                                <img src="assets/img/Best-Services-Iocn-1.png" class="img-fluid !inline-flex backimage">
                            </div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Best Services</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum</p>
                            </div>
                        </div>
                        <div class="grid grid-rows-2 grid-flow-col pt-4 gap-1">
                            <div class="row-span-3"><img src="assets/img/Best-Services-Iocn-2.png " class="img-fluid !inline-flex backimage"></div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Support 24/7</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6  antivirus-image text-center  animantion-round">  
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center img-fst">
                            <img src="{{ asset('assets/img/We-team-of-experience-It-Specialties.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center img-round">
                            <img src="{{ asset('assets/img/Bg-Circle.png') }}" alt=""
                                class="img-fluid">
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
                <h3 class="lg:text-center font-semibold mb-2 text-[2rem]" style="color:#fff !important;">Frequently Asked Question</h3>
                <div class="grid grid-cols-12 justify-center">
                    <div class="col-span-12">
                        <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-12 font-normal">Efficiently
                            productivate reliable paradigms before ubiquitous models. Continually utilize frictionless
                            <br>expertise whereas tactical relationships. Still have questions? Contact us</p>
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
                                        <div class="hs-accordion active bg-white dark:bg-bodybg border-solid  border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
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



        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="faq">
            <div class="container text-center">
                
                <div>
                    <h4 class="font-semibold mb-0 !text-defaulttextcolor">Related Profiles</h4>
                    <p class="!text-defaultsize !text-defaulttextcolor mb-6">Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua</p>
                    <div class="swiper swiper-related-jobs rtl:dir-ltr">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box custom-box">
                                    <div class="box-body">
                                        <div
                                            class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                    <span><i
                                                            class="ri-download-2-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Download Resume
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                    <span><i
                                                            class="ri-heart-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Whislist
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                    <span><i
                                                            class="ri-eye-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        View Profile
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="sm:flex mb-3 items-center">
                                            <span class="avatar avatar-lg !rounded-full">
                                                <img src="assets/images/faces/1.jpg" alt="">
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="font-semibold mb-0 sm:flex items-center"><a
                                                        href="javascript:void(0);"> Brenda Simpson <i
                                                            class="bi bi-check-circle-fill text-success text-[1rem]"
                                                            title="Verified candidate"></i></a></h5>
                                                <div class="sm:flex gap-2">
                                                    <a href="javascript:void(0);">Software Developer</a>
                                                    <p
                                                        class="mb-0 text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                        <i class="bi bi-geo-alt text-[.6875rem]"></i>
                                                        Kondapur, Hyderabad</p>
                                                </div>
                                                <div
                                                    class="sm:flex items-center text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                    <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                    <div class="min-w-fit ms-2">
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-half"></i></span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="ms-1 min-w-fit text-[#8c9097] dark:text-white/50">
                                                        <span>(142)</span>
                                                        <span>Ratings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags">
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-mortarboard text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Graduate</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-moon-stars text-[#8c9097] dark:text-white/50 me-1"></i>
                                                sm:flexible-shift</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-clock text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Immediate Joinee</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-broadcast text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Good at English</a>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center gap-3">
                                            <h6 class="mb-0 font-semibold">Skills :</h6>
                                            <div class="popular-tags sm:flex-grow">
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">HTML</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">CSS</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">Javascript</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">Angular</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-primary/10 text-primary"><i
                                                        class="bi bi-plus"></i> More</a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="badge badge-md !rounded-full bg-info/10 text-info"
                                                    title="1 year bond accepted"><i
                                                        class="bi bi-hand-thumbs-up me-1"></i>1 year bond
                                                    accepted</a>
                                                <a href="javascript:void(0);"
                                                    class="badge badge-md !rounded-full bg-primary/10 text-primary"><i
                                                        class="bi bi-briefcase me-1"></i>Exp : 2 Years</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box custom-box">
                                    <div class="box-body">
                                        <div
                                            class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                    <span><i
                                                            class="ri-download-2-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Download Resume
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                    <span><i
                                                            class="ri-heart-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Whislist
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                    <span><i
                                                            class="ri-eye-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        View Profile
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="sm:flex mb-3 items-center">
                                            <span class="avatar avatar-lg !rounded-full">
                                                <img src="assets/images/faces/3.jpg" alt="">
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="font-semibold mb-0 sm:flex items-center"><a
                                                        href="javascript:void(0);"> Dwayne Stort <i
                                                            class="bi bi-check-circle-fill text-success text-[1rem]"
                                                            title="Verified candidate"></i></a></h5>
                                                <div class="sm:flex gap-2">
                                                    <a href="javascript:void(0);">Web Developer</a>
                                                    <p
                                                        class="mb-0 text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                        <i class="bi bi-geo-alt text-[.6875rem]"></i>
                                                        Gachibowli, Hyderabad</p>
                                                </div>
                                                <div
                                                    class="sm:flex items-center text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                    <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                    <div class="min-w-fit ms-2">
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star"></i></span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="mb-0 ms-1 min-w-fit text-[#8c9097] dark:text-white/50">
                                                        <span>(35)</span>
                                                        <span>Ratings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags">
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-mortarboard text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Post Graduate</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-moon-stars text-[#8c9097] dark:text-white/50 me-1"></i>
                                                sm:flexible-shift</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-clock text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Within 10 Days</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-broadcast text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Good at English</a>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center gap-3">
                                            <h6 class="mb-0 font-semibold">Skills :</h6>
                                            <div class="popular-tags sm:flex-grow">
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">React</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">Javascript</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">React
                                                    Navtive</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-primary/10 text-primary"><i
                                                        class="bi bi-plus"></i> More</a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="badge badge-md !rounded-full bg-info/10 text-info"
                                                    title="1 year bond accepted"><i
                                                        class="bi bi-hand-thumbs-up me-1"></i>2 years bond
                                                    accepted</a>
                                                <a href="javascript:void(0);"
                                                    class="badge badge-md !rounded-full bg-primary/10 text-primary"><i
                                                        class="bi bi-briefcase me-1"></i>Exp : 4 Years</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box custom-box">
                                    <div class="box-body">
                                        <div
                                            class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                    <span><i
                                                            class="ri-download-2-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Download Resume
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                    <span><i
                                                            class="ri-heart-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Whislist
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="hs-tooltip ti-main-tooltip">
                                                <button type="button"
                                                    class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                    <span><i
                                                            class="ri-eye-line text-[.8125rem] align-middle"></i></span>
                                                    <span
                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        View Profile
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="sm:flex mb-3 items-center">
                                            <span class="avatar avatar-lg !rounded-full">
                                                <img src="assets/images/faces/21.jpg" alt="">
                                            </span>
                                            <div class="ms-2">
                                                <h5 class="font-semibold mb-0 sm:flex items-center"><a
                                                        href="javascript:void(0);"> Jasmine Kova <i
                                                            class="bi bi-check-circle-fill text-success text-[1rem]"
                                                            title="Verified candidate"></i></a></h5>
                                                <div class="sm:flex gap-2">
                                                    <a href="javascript:void(0);">Python Developer</a>
                                                    <p
                                                        class="mb-0 text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                        <i class="bi bi-geo-alt text-[.6875rem]"></i>
                                                        Gachibowli, Chennai</p>
                                                </div>
                                                <div
                                                    class="sm:flex items-center text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                    <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                    <div class="min-w-fit ms-2">
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star-fill"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star"></i></span>
                                                        <span class="text-warning"><i
                                                                class="bi bi-star"></i></span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="mb-0 ms-1 min-w-fit text-[#8c9097] dark:text-white/50">
                                                        <span>(56)</span>
                                                        <span>Ratings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popular-tags">
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-mortarboard text-[#8c9097] dark:text-white/50 me-1"></i>
                                                MBA</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-moon-stars text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Day-shift</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-clock text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Within 30 Days</a>
                                            <a href="javascript:void(0);"
                                                class="badge !rounded-full bg-light !text-defaulttextcolor"><i
                                                    class="bi bi-broadcast text-[#8c9097] dark:text-white/50 me-1"></i>
                                                Avg at English</a>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center gap-3">
                                            <h6 class="mb-0 font-semibold">Skills :</h6>
                                            <div class="popular-tags sm:flex-grow">
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">Python</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">Java</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-light !text-defaulttextcolor">React</a>
                                                <a href="javascript:void(0);"
                                                    class="badge !rounded-full bg-primary/10 text-primary"><i
                                                        class="bi bi-plus"></i> More</a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="badge badge-md !rounded-full bg-primary/10 text-primary"><i
                                                        class="bi bi-briefcase me-1"></i>Exp : 5 Years</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
               
            </div>
        </section>


        

        {{-- End:: ttbantivirus section faq saven --}}


         <!-- Candidate Details JS -->
         <script src="{{asset('assets/js/job-candidate-details.js')}}"></script>
		<script src="{{asset('assets/js/custom.js')}}"></script>


    @endsection
