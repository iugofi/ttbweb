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
                                    <a href="index.html" class="m-1 ti-btn ti-btn-primary-full bnr-btn-1" style="padding: 8px 34px;">
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
                            <img src="{{ asset('assets/img/ttb-second-section-img-2.png') }}" alt="" class="img-fluid">
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
                <h1 class="lg:text-center font-semibold mb-2 text-[2rem]">Solutions Coustomers Have<br>
                    Boilt With Instabase</h1><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box boxs1">
                            <div class="box-body">
                                <div class="mb-2 anti-img1">
                                    <span class="avatar avatar-md">

                                        <img src="assets/img/Omniroutes-Lifting.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Omniroutes Lifting</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>

                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box boxs1">
                            <div class="box-body">
                                <div class="mb-2 anti-img2">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Content-Touchpoint.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Content Touchpoint</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box boxs1">
                            <div class="box-body">
                                <div class="mb-2 anti-img3">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Faster-Resolution.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Faster Resolution</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box box1">
                            <div class="box-body">
                                <div class="mb-2 anti-img4">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Support-Channels.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Support Channels</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End:: ttbantivirus section third --}}















    @endsection
