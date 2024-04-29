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
                            <div class="lg:py-[3rem] text-vartical"
                                style="position: relative; top: 7rem; padding-right: 2rem;">
                                <h1 class="lg:text-start font-semibold mb-2 text-[2rem]">Robust Threat Protection and
                                    Security Framework</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] dark-text">Holisticly
                                    procrastinate mission-critical convergence with reliable customer service. Assertively
                                    underwhelm idea-sharing for impactful solutions.
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
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <div class="container main-banner-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6  customize-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img2/section four.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center animate-bounce">
                            <h6 class="uppercase">25 year of exprience</h6>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 pt-5 pb-0 lg:px-2 !text-start  my-auto">
                        <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">What We Do</span>
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">We Provide Web Design
                            With App Development</h4>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>

                        <div class="grid grid-rows-2 grid-flow-col gap-4">
                            <div class="row-span-3">
                                <img src="assets/img/Best-Services-Iocn-1.png" class="img-fluid !inline-flex backimage">
                            </div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Best Services</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum dolor sit amet, eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="grid grid-rows-2 grid-flow-col gap-4">
                            <div class="row-span-3"><img src="assets/img/Best-Services-Iocn-2.png "
                                    class="img-fluid !inline-flex backimage"></div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Support 24/7</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum dolor sit amet, eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="action-btns mt-4">
                            <a href="#" class="ti-btn bg-primary text-white">Explore More Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End:: commericial section two --}}

        {{-- Start:: commericial section third --}}
        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container text-center">
                <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">What We Do</span>
                <h1 class="lg:text-center font-semibold mb-2 text-[2rem]">Solutions Coustomers Have<br>
                    Boilt With Instabase</h1><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">

                                        <img src="assets/img/Omniroutes-Lifting.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Omniroutes Lifting</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class=" text-dark font-bold text-sm">Explore More Us</a>

                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Content-Touchpoint.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Content Touchpoint</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class="text-dark font-bold text-sm">Explore More Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Faster-Resolution.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Faster Resolution</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class="text-dark font-bold text-sm">Explore More Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Support-Channels.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Support Channels</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class="text-dark font-bold text-sm">Explore More Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End:: commericial section third --}}

        {{-- Start:: commericial section forth --}}

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70" id="features">
            <div class="container text-center">
                <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">What We Do</span>
                <h1 class="lg:text-center font-semibold mb-2 text-[2rem]">Solutions Coustomers Have<br>
                    Boilt With Instabase</h1><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box">
                                <div class="box-body bg-img1">
                                </div>
                                    <div class="box-bottom">
                                        <h6 class="font-bold mb-2 pt-2 text-xl">Omniroutes Lifting</h6>
                                        <p class="card-text mb-4">Engineering</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box">
                                <div class="box-body bg-img2">
                                </div>
                                    <div class="box-bottom">
                                        <h6 class="font-bold mb-2 pt-2 text-xl">Omniroutes Lifting</h6>
                                        <p class="card-text mb-4">Engineering</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box">
                                <div class="box-body bg-img3">
                                </div>
                                    <div class="box-bottom">
                                        <h6 class="font-bold mb-2 pt-2 text-xl">Omniroutes Lifting</h6>
                                        <p class="card-text mb-4">Engineering</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
         
        {{-- End:: commericial section forth --}}













































    </div>




























@endsection
