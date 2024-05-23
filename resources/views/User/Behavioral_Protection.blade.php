

@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start:: Behavioral Protection section one -->
        <div class="Behavioral-banner" id="Behavioral">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical" style="position: relative; top: 7rem;">
                                <h1 class="text-left font-semibold mb-2 text-[4rem]" style="color: #fff;">IT Solutions <br>
                                    For Your<br>
                                    Business.</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] text-left dark-text"
                                    style="color: #fff;">The first rule any technology used in business automantion
                                    <br>applied to an efficient operation will magnify.
                                </div>
                                {{-- <div class="bnr-btn text-center">
                                    <a href="index.html" class="m-1 ti-btn ti-btn-primary-full bnr-btn-1"
                                        style="padding: 8px 34px;">
                                        Buy Now
                                    </a>
                                    <a href="index.html" class="m-1 ti-btn bg-white bnr-btn-2" style="color:#11CDBE;">
                                        Download Now
                                    </a>
                                </div> --}}
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
        <!-- End:: Behavioral Protection section one -->

        <!-- Start:: Behavioral Protection section two -->

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] "
            id="features">
            <div class="container text-center">
                <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">Our Services</span>
                <h2 class="lg:text-center font-semibold mb-2 text-[2rem]">We do awesome Services for our clients.<br>
                    Check some of our Services.</h2><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img1">
                                    <span class="avatar avatar-md pt-5">

                                        <img src="{{asset('assets/img/Renovation-Building.png')}}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Threat Protection</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>

                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img2">
                                    <span class="avatar avatar-md pt-5">
                                        <img src="{{asset('assets/img/Power-And-Energy-2.png')}}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Easy to Use</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img3">
                                    <span class="avatar avatar-md pt-5">
                                        <img src="{{asset('assets/img/Dedicated-Teams.png')}}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Consumer Security</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img4 pt-3">
                                    <span class="avatar avatar-md">
                                        <img src="{{asset('assets/img/Oil-&-Gas-Energy.png')}}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Virus Protection</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action-btns mt-4">
                    <a href="#" class="ti-btn bg-primary text-white" style="width:150px;">View All Services</a>
                </div>
            </div>
        </section>

        <!-- End:: Behavioral Protection section two -->

        <!-- Start:: Behavioral Protection section three -->

        <div class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70">
            <div class="container ttbantivirus-container">
                <div class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 pt-5 pb-0 lg:px-2 !text-start">
                        <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">About Us</span>
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">Construction Industry <br>
                            Awared of in 2024.</h4>
                            <div class="texts-box1" style="display: inline-flex; align-items: center;">
                                <div class="scct-one">
                                    <p class=" text-[4rem] text-[#8c9097] text-left dark:text-white/50 mb-4 ">25
                                    </p>
                                </div>
                                <div class="scct-two">
                                    <p class="txts text-[0.9rem] text-[#8c9097] text-left dark:text-white/50 mb-4 px-12">YEARS EXPERIENCES
                                    </p>
                                </div>


                            </div>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>

                        <div class="action-btns mt-4">
                            <a href="#" class="ti-btn bg-primary text-white">Learn More</a>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 antivirus-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start">
                            <img src="{{ asset('assets/img/ttb-second-section-img-2.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center box-animantion">
                            <img src="{{ asset('assets/img/Box.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End:: Behavioral Protection section three -->

























</div>

@endsection