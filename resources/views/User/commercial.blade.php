

@extends('User.Layouts.layout')

@section('title', 'commercial')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start::commericial section one -->
        <div class="commericial-banner" id="commericial">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                            <div class="lg:py-[3rem] text-vartical" style="position: relative; top: 7rem; padding-right: 2rem;">
                                <h1 class="lg:text-start font-semibold mb-2 text-[2rem]">Robust Threat Protection and Security Framework</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] dark-text">Holisticly procrastinate mission-critical convergence with reliable customer service. Assertively underwhelm idea-sharing for impactful solutions.
                                    Assertively underwhelm idea-sharing for impactful solutions.
                                </div>
                                <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                                    Download Now
                                </a>
                            </div>
                            {{-- <img src="{{ asset('assets/img/icon-img.png') }}" class="img-fluid" width="85%"> --}}
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">
                           
                            <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                            </div>
                           
                            <div class="dark-shap-two"><img src="{{ asset('assets/img/Shape-2.png') }}" alt=""
                                    class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End::Home Content -->

        {{-- Start:: commericial section two --}}

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
                            <h2 class="landing-banner-heading mb-4 opacity-[0.9]"><span class="dark-black">Smarter
                                    solutions for threats ever-sophisticated </span></h2>
                            <div class="text-[1rem] mb-[1.75rem] text-black-ligh opacity-[0.9] ">Monotonectally impact
                                sustainable e-services with front-end infomediaries. Collaboratively network functional
                                solutions whereas initiatives. Progressively pontificate collaborative "outside the box"
                                thinking for.</div>
                            <div class="text-[1rem] mb-[3rem] text-black-ligh opacity-[0.9] ">Monotonectally impact
                                sustainable e-services with front-end infomediaries. Collaboratively network functional
                                solutions whereas initiatives. Progressively pontificate collaborative "outside the box"
                                thinking for.</div>
                            <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                                Explore More
                                {{-- <i class="ri-eye-line ms-2 align-middle"></i> --}}
                            </a>
                        </div>
                    </div>
                    <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">

                        <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                            <img src="{{ asset('assets/img/section-two-ttb.gif') }}" alt="" class="img-fluid" width="75%">
                        </div>

                    </div>
                </div>
            </div>
        </div> 

        {{-- End:: commericial section two --}}















































</div>


         

























@endsection