@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


    <div class="content" style="background-color:#F3F2EA;">
        <div class="main-content">

            <section class="banner-home-one">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <h2>Protect Your <br> Data With Powerful</h2>
                            <h3>Cyber Security</h3>
                            <p class="mt-4">Cyber attacks can cause on average $1.5 billion to a company, with our advanced
                                AI system we can block the attack before it happens.</p>
                            <div class="bttn-box">
                                <a href="#" class="btn-home-now">Get Started Now </a>
                                <a href="#" class="btn-home-cnt ms-5">Contact Us</a>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">

                        </div>
                    </div>
                </div>
            </section>


            <section class="section-home-two">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                            <h2>Trusted by millions of customers.</h2>

                            <div class="photobanner__wrap">
                                <div class="photobanner">
                                    <img src="{{ asset('assets/home-two-img/brand_3_1.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_2.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_3.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_4.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_5.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_6.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                        <img src="{{ asset('assets/home-two-img/brand_3_1.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_2.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_3.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_4.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_5.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                        <img src="{{ asset('assets/home-two-img/brand_3_3.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_4.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_5.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                </div>
                                {{-- <div class="photobanner">
                                    <img src="{{ asset('assets/home-two-img/brand_3_1.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_2.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_3.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_4.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_5.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                    <img src="{{ asset('assets/home-two-img/brand_3_6.svg') }}" alt=""
                                        class="img-fluid" width="20%">
                                </div> --}}
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="section-home-three">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <div class="icon-box flex p-3">
                                <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12 p-3">
                                    <img src="{{ asset('assets/home-two-img/feature_box_1_1.svg') }}" alt=""
                                        class="img-fluid" width="100%">
                                </div>
                                <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-12 col-span-12">
                                    <h3 class="mt-1">Block to all hackers </h3>
                                    <p class="mt-2">Cybersecurity refers to the practice of protecting computer systems,
                                        networks,
                                        devices</p>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12 ">
                            <div class="icon-box flex p-3">
                                <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12 p-3">
                                    <img src="{{ asset('assets/home-two-img/feature_box_1_2.svg') }}" alt=""
                                        class="img-fluid" width="100%">
                                </div>
                                <div class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 md:col-span-12 col-span-12">
                                    <h3 class="mt-1">Block to all hackers </h3>
                                    <p class="mt-2">Cybersecurity refers to the practice of protecting computer systems,
                                        networks,
                                        devices</p>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12 ">
                            <div class="icon-box flex p-3">
                                <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12 p-3">
                                    <img src="{{ asset('assets/home-two-img/feature_box_1_3.svg') }}" alt=""
                                        class="img-fluid" width="100%">
                                </div>
                                <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-12 col-span-12">
                                    <h3 class="mt-1">Block to all hackers </h3>
                                    <p class="mt-2">Cybersecurity refers to the practice of protecting computer systems,
                                        networks,
                                        devices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-home-three">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6 bg-white-one">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <img src="{{ asset('assets/home-two-img/11111111.svg') }}" alt="" class="img-fluid"
                                width="20%">
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12 border-box">
                            <span>ABOUT US</span>
                            <h2>Identifying And Responding To Emerging Risks</h2>
                            <p>Cybersecurity refers to the practice of protecting computer systems, networks, devices, and
                                data from unauthorized access, cyberattacks, theft, or damage. It encompasses a range of
                                technologies, processes. and practices designed to safeguard digital assets and ensure </p>
                                <i class="fa-solid fa-shield-halved"></i><span>High Quality Service</span>
                                <i class="fa-solid fa-shield-halved"></i><span>Website Security Services</span>
                                <i class="fa-solid fa-shield-halved"></i><span>Effective Protection</span>
                                <i class="fa-solid fa-shield-halved"></i><span>Security Management</span>
                                <i class="fa-solid fa-shield-halved"></i><span>Database Security</span>                        
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>





@endsection
