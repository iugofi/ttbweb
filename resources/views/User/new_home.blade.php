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
                class="bg-[#131313] w-full h1-[900px]  lg1:h-[680px]
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
                                                <span></span>
                                            </div>
                                            <div data-swiper-parallax="300" class="slide-title">
                                                <h2></h2>
                                            </div>
                                            <div data-swiper-parallax="400" class="slide-text">
                                                <p></p>
                                            </div>

                                            <div data-swiper-parallax="500" class="slide-btn">
                                                <a href="about.html" class="btn theme-btn">
                                                    Get Started</a>
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
                                                <span
                                                    class="text-[22px] col:text-[18px] text-[#e4e4e4] font-heading-font">We
                                                    bring the
                                                    right people
                                                    together.</span>
                                            </div>
                                            <div data-swiper-parallax="300" class="slide-title">
                                                <h2
                                                    class="text-[70px] font-black leading-[90px] mt-[10px] mb-[25px] lg:text-[50px] md:text-[40px] md:leading-[55px] col:text-[30px] col:leading-[35px] text-white">
                                                    Helping You Solve Your Problems</h2>
                                            </div>
                                            <div data-swiper-parallax="400" class="slide-text">
                                                <p
                                                    class="text-[25px] text-white font-heading-font 
                                                                           leading-[35px]
                                                   max-w-[500px] pl-[20px] border-l-[2px]
                                                   border-l-white mb-[60px] 
                                                   md:text-[18px] col:leading-[22px] 
                                                   col:mb-[30px]">
                                                    Facilitating client learning that is,teaching clients how to resolve
                                                    similar problems in the future.</p>
                                            </div>

                                            <div data-swiper-parallax="500" class="slide-btn">
                                                <a href="about.html" class="btn theme-btn">
                                                    Get Started</a>
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
