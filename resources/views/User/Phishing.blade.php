@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start:: anti-phishing section one -->

        <div class="anti-phishing" id="phishing">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical" style="position: relative; top: 7rem;">
                                <h1 class="text-left font-semibold mb-2 text-[4rem]" style="color: #fff;">Empowe Your<br>
                                    Business Journey<br>
                                    With it Ecpertise</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] text-left dark-text"
                                    style="color: #fff;">The first rule any technology used in business automantion
                                    <br>applied to an efficient operation will magnify.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- End:: anti-phishing section one -->

        <!-- Start:: anti-phishing section two -->

        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <div class="container main-banner-container">
                <div class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">

                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 pt-5 pb-0 lg:px-2 !text-start  my-auto">
                        <div class="grid grid-col-12 gap-x-6">
                            <div class="row flex gap-8">
                                <div class="group flex items-center xl:col-grid-6 col-grid-6  px-2 py-5 gap-3 flex-box">
                                    <div class="ltr:ml-3 rtl:mr-3">
                                        <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900">FEATURES</p>
                                        <h5 class="text-sm font-bold text-xl text-slate-500 group-hover:text-slate-700">Tech-Oriented</h5>
                                    </div>
                                    <div class="flex-img">
                                    <img src="https://nighthawk-routerlogin.com/assets/img/Best-Services-Iocn-1.png" alt="widget" class="rounded-custom img-fluid">
                                    </div>
                                </div>
                                <div class="group flex items-center xl:col-grid-6 col-grid-6  px-2 py-5 gap-3 flex-box">
                                    <div class="ltr:ml-3 rtl:mr-3">
                                        <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900">FEATURES</p>
                                        <h5 class="text-sm font-bold text-xl text-slate-500 group-hover:text-slate-700">Innovative Solution<br>
                                            For Business</h5>
                                    </div>
                                    <div class="flex-img">
                                        <img src="https://nighthawk-routerlogin.com/assets/img/Best-Services-Iocn-1.png" alt="widget" class="rounded-custom img-fluid">
                                    </div>
                                </div>
                                <div class="group flex items-center xl:col-grid-6 col-grid-6  px-2 py-5 gap-3 flex-box">
                                    <div class="ltr:ml-3 rtl:mr-3">
                                        <p class="text-sm font-medium text-slate-700 group-hover:text-slate-900">FEATURES</p>
                                        <h5 class="text-sm font-bold text-xl text-slate-500 group-hover:text-slate-700">Top Class Support<br>
                                            For Customers</h5>
                                    </div>
                                    <div class="flex-img">
                                        <img src="https://nighthawk-routerlogin.com/assets/img/Best-Services-Iocn-1.png" alt="widget" class="rounded-custom img-fluid">
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End:: anti-phishing section two -->

        <!-- Start:: anti-phishing section three -->

        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" style="padding-top: 0px !important">
            <div class="container main-banner-container">
                <div class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 customize-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img/Third-section-img.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 pt-5 pb-0 lg:px-2 !text-start  my-auto">
                        <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">Who We Are</span>
                        <h2 class="lg:text-start font-semibold mb-2 pt-5 text-[2rem]">We Provide Web Design<br>
                            With App Development</h2>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>

                        <div class="row row-service mt-5" style="display: flex;">
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2">
                                <img src="{{asset('assets/img/The-Largest-Business-Expert-Company-icon-1.png')}}" class="img-fluid p-1">
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2 pe-3">
                                <h5 class="dark-text">32+ Year Of</h5>
                                <p class="text-gray-light">Business Experience</p>
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2">
                                <img src="{{asset('assets/img/The-Largest-Business-Expert-Company-icon-2.png')}}" class="img-fluid p-1">
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 col-span-2">
                                <h5 class="dark-text">Company Data</h5>
                                <p class="text-gray-light">Business Experience</p>
                            </div>

                        </div>
						<div class="row row-service mt-5" style="display: flex;">
                            <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                                value with diverse web-readiness. Collaboratively transition wireless customer service without
                                goal-oriented catalysts for change. Collaboratively.
                            </p><br><br>

                        </div>
						<a href="index.html" class="ti-btn bg-primary text-white" style="width:26%;">
                            Learn More Us
                         </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- End:: anti-phishing section three -->












    </div>

@endsection
