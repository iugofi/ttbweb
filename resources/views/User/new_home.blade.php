@extends('User.Layouts.layout')

@section('title', 'Home')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')


<link href="assets/home-new/css/global.css" rel="stylesheet">
<link href="assets/home-new/css/themify-icons.css" rel="stylesheet">

@section('content')


    <div class="content">
        <div class="main-content">



            <section
                class="bg-[#131313] w-full h1-[511px]  lg1:h-[680px]
                md1:h-[600px] sm1:h-[500px]  relative z-[1] overflow-hidden home-new-banner">
                <div class="swiper-container w-full h-full absolute left-0 top-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image"
                                data-background="{{ asset('assets/home-two-img/TTB-Banner-Without-Content.jpg') }}">
                                <div class="wraper">
                                    <div class="relative h-[900px] lg:h-[680px]  md:h-[600px] sm:h-[500px]">
                                        <div
                                            class="max-w-[550px] lg:w-[600px] md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2">

                                            <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                                <h2>TTB–The Intelligent Threat Protection at your fingertips </h2>
                                            </div>

                                            <div data-swiper-parallax="300" class="slide-text">
                                                <p>Don’t be a sitting duck in the internet forest! Buy TTB antivirus/VPN
                                                    that fights to secure you on the web. Order Now!
                                                </p>
                                            </div>

                                            <div data-swiper-parallax="400" class="slide-btn">
                                                <a href="#" class="theme-btn"> Download</a>
                                                <a href="#" class="theme-btn-2"> Choose Plane</a>

                                            </div>
                                            <div data-swiper-parallax="500" class="slide-title">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image"
                                data-background="{{ asset('assets/home-two-img/TTB-Banner-Without-Content.jpg') }}">
                                <!-- <div class="gradient-overlay"></div> -->
                                <div class="wraper">
                                    <div class="relative height">
                                        <div
                                            class="max-w-[550px] lg:w-[600px] md:w-full  absolute top-1/2 left-0 transform  -translate-y-1/2">

                                            <div data-swiper-parallax="200" class="wpo-hero-title-top">
                                                <h2>We Shield the Privacy that matters to you–TTB</h2>
                                            </div>
                                            <div data-swiper-parallax="300" class="slide-text">
                                                <p>We are the digital saviors to evacuate you from the dark world of
                                                    cyberwarfare with real-time threat detection.</p>
                                            </div>

                                            <div data-swiper-parallax="400" class="slide-btn">
                                                <a href="#" class="theme-btn"> Download</a>
                                                <a href="#" class="theme-btn-2"> Choose Plane</a>
                                            </div>
                                            <div data-swiper-parallax="500" class="slide-title">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                    </div>
                    <!-- end swiper-wrapper -->

                    <!-- swipper controls -->
                    {{-- <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                </div>
                <!-- end of wpo-hero-slide-section-->
            </section>



        </div>
    </div>



    <script src="assets/home-new/js/jquery.min.js"></script>
    <script src="assets/home-new/js/jquery-plugin-collection.js"></script>
    <script src="assets/home-new/js/script.js"></script>




@endsection
