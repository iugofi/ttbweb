@extends('User.Layouts.layout')

@section('title', 'ttbantiviruenew')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')


@section('content')

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
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Storage Capacity</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Daily Updates</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Online Support</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Visitors Monitoring</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">2 Free Domains</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Money Back Guarentee</span>
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
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Storage Capacity</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Daily Updates</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Online Support</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Visitors Monitoring</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">10 Free Domains</span>
                                            </li>
                                            <li class="mb-4">
                                                <span class="text-[#000] dark:text-white/50 font-semibold text-sm">Money Back Guarentee</span>
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










    @endsection
