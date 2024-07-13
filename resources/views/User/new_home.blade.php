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

            {{-- first section start --}}

            <section class="toast-section">
                <div id="dismiss-toast"
                class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 ti-toast bg-white dark:bg-bodybg dark:border-white/10"
                role="alert">
                <div class="flex p-4">
                    <p class="text-sm text-gray-700 dark:text-[#8C9097] dark:text-white/50">
                        Your email has been sent
                    </p>
                    <div class="ms-auto">
                        <button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                            data-hs-remove-element="#dismiss-toast">
                            <span class="sr-only">Close</span>
                            <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            </section>


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
                                                <a href="#" class="theme-btn-2"> Choose Plan</a>

                                            </div>
                                            <div data-swiper-parallax="500" class="slide-title">
                                                <div class="spacing-top-cl">
                                                    <span>Excellent</span><img
                                                        src="{{ asset('assets/home-two-img/Review.png') }}"> <span>18,249
                                                        Reviews on</span><i class="fa-solid fa-star"></i><img
                                                        src="{{ asset('assets/home-two-img/AV-Test.png') }}">
                                                </div>
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
                                                <a href="#" class="theme-btn-2"> Choose Plan</a>
                                            </div>
                                            <div data-swiper-parallax="500" class="slide-title">
                                                <div class="spacing-top-cl">
                                                    <span>Excellent</span><img
                                                        src="{{ asset('assets/home-two-img/Review.png') }}"> <span>18,249
                                                        Reviews on</span><i class="fa-solid fa-star"></i><img
                                                        src="{{ asset('assets/home-two-img/AV-Test.png') }}">
                                                </div>
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
            {{-- first section End --}}

            {{-- second section start --}}
            <section
                class=" !bg-[##F3F2EA] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70 section-home2-two">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">


                            <div class="photobanner__wrap">
                                <div class="photobanner">
                                    <img src="{{ asset('assets/home-two-img/home-new-brand1.png') }}" alt=""
                                        class="img-fluid" width="30%">
                                    <img src="{{ asset('assets/home-two-img/home-new-brand2.png') }}" alt=""
                                        class="img-fluid" width="30%">
                                    <img src="{{ asset('assets/home-two-img/home-new-brand3.png') }}" alt=""
                                        class="img-fluid" width="30%">
                                </div>
                                <div class="photobanner"style="margin-left: 19em;">
                                    <img src="{{ asset('assets/home-two-img/home-new-brand4.png') }}" alt=""
                                        class="img-fluid" width="30%">
                                    <img src="{{ asset('assets/home-two-img/home-new-brand5.png') }}" alt=""
                                        class="img-fluid" width="30%">
                                    <img src="{{ asset('assets/home-two-img/home-new-brand6.png') }}" alt=""
                                        class="img-fluid" width="30%">
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            {{-- second section End --}}

            {{-- third pricing plan section start --}}

            {{-- <section
                class=" section-bg text-defaulttextcolor dark:text-defaulttextcolor/70 home2-new-seven-pricing">
                <div class="pricing-bxx">
                    <div class="grid grid-cols-12 gap-6 justify-center mb-[3rem]">
                        <div class="xxl:col-span-2 col-span-12"></div>
                        <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                            <div class="container">
                                <div class="flex justify-center !mx-auto">
                                    <div class="">
                                        <h4 class="pt-5">Compare plans</h4>
                                    </div>
                                </div>
                                <div class="flex justify-center mb-4">
                                    <nav class="bg-primary/10 p-4 rounded-md mb-4" aria-label="Tabs">
                                        <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4  text-sm font-medium text-center rounded-sm hover:text-primary active"
                                            id="pricing-item1" data-hs-tab="#pricing-monthly-pane"
                                            aria-controls="pricing-monthly-pane">
                                            Antivirus
                                        </a>
                                        <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4 text-sm font-medium text-center  rounded-sm hover:text-primary "
                                            id="pricing-yearly1-item1" data-hs-tab="#pricing-yearly-pane"
                                            aria-controls="pricing-yearly-pane">
                                            VPN
                                        </a>
                                    </nav>
                                </div>
                                <div class="box overflow-hidden full-box">
                                    <div class="box-body !p-0">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane show active !p-0 border-b-0 dark:border-defaultborder/10 full-box-brd"
                                                id="pricing-monthly-pane" role="tabpanel">
                                                <div class="grid grid-cols-12">
                                                    @foreach ($antivirus as $antivirusitem)
                                                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0 price-box"
                                                            style="margin: 8px;">
                                                            <div class="p-6 text-[#000] dark:text-white/50">
                                                                <h6 class="font-semibold text-center text-[1rem]">
                                                                    Plus  {{ $antivirusitem->name }}</h6>
                                                                <div class="py-4 flex items-center justify-center">
                                                                    <div class="pricing-svg1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            data-name="Layer 1" viewBox="0 0 168 168">
                                                                            <path fill="#845adf"
                                                                                d="M48.877 36.254c3.742 4.464 10.559 4.995 10.847 5.016.048.003.096.005.143.005A2 2 0 0 0 61.84 39.6c.045-.274 1.07-6.786-2.716-11.306-3.742-4.464-10.559-4.995-10.848-5.015a2.017 2.017 0 0 0-2.114 1.669c-.045.274-1.07 6.786 2.715 11.304zm7.18-5.39a9.88 9.88 0 0 1 1.938 6.072 11.383 11.383 0 0 1-6.053-3.252v.001a9.88 9.88 0 0 1-1.938-6.071 11.378 11.378 0 0 1 6.053 3.25zm74.388 24.431c-.278.041-6.858 1.055-10.205 6.168-3.3 5.043-1.996 11.909-1.938 12.199a2 2 0 0 0 1.96 1.613 2.104 2.104 0 0 0 .29-.02c.279-.042 6.859-1.055 10.205-6.169 3.3-5.043 1.996-11.908 1.939-12.198a2.004 2.004 0 0 0-2.251-1.593zm-3.035 11.601a10.55 10.55 0 0 1-5.397 3.854 12.464 12.464 0 0 1 1.575-7.095v-.001a10.549 10.549 0 0 1 5.396-3.855 12.47 12.47 0 0 1-1.574 7.097z" />
                                                                            <path fill="#403161"
                                                                                d="M138.16 29.515c-5.92-2.54-12.61-1.07-17.12.25-3.73 1.09-7.42 2.45-11.03 3.82a26.346 26.346 0 0 0 5.19-7.49 2 2 0 0 0-3.65-1.64c-4.46 9.92-16.63 14.39-19.27 15.26-.69.19-2.33.65-2.4.68a160.941 160.941 0 0 1-34.03 5.64 62.167 62.167 0 0 1-28.93-5.56c-.15-.06-2.81-1.31-3.99-1.93a2.002 2.002 0 0 0-1.85 3.55c.92.48 4.09 1.98 4.13 2 6.21 2.96 8.89 5.82 8.37 13.04a2.05 2.05 0 0 0 2 2.14 1.998 1.998 0 0 0 1.99-1.86 17.056 17.056 0 0 0-1.64-9.49A65.547 65.547 0 0 0 54 50.095v47.33a2.052 2.052 0 0 0-.5.39 2.017 2.017 0 0 0 .17 2.83l.33.29v12.34h-1a2 2 0 1 0 0 4s1 0 1 .01h11v13.99a3.999 3.999 0 0 0 4 4h12a3.999 3.999 0 0 0 4-4v-13.99s11 0 11-.01h1a2 2 0 0 0 0-4h-1v-12.34l.33-.29a2.017 2.017 0 0 0 .17-2.83 2.052 2.052 0 0 0-.5-.39v-53.96a34.048 34.048 0 0 1 12.77 1.16c1.9.56 5.13 1.9 5.55 4.59a2.04 2.04 0 0 0 2.28 1.67 2.003 2.003 0 0 0 1.67-2.29c-.56-3.6-3.53-6.37-8.35-7.81a36.359 36.359 0 0 0-4.83-1.06c1.37-.51 2.73-1.02 4.07-1.54 4.25-1.62 8.64-3.3 13.01-4.58 6.23-1.83 10.81-1.96 14.41-.41 3.99 1.71 8.47 5.05 7.2 11.29a6.907 6.907 0 0 1-4.21 4.86 5.702 5.702 0 0 1-5.49-.58 4.408 4.408 0 0 1-1.18-5.23 2.003 2.003 0 0 0-3.43-2.07c-2.16 3.59-.57 8.53 2.3 10.56a9.485 9.485 0 0 0 5.51 1.77 10.214 10.214 0 0 0 3.76-.73 10.847 10.847 0 0 0 6.66-7.79c1.39-6.82-2.09-12.56-9.54-15.76ZM63 113.275h-5v-8.79l.32.29a2.04 2.04 0 0 0 1.33.5 2.013 2.013 0 0 0 1.27-.45l2.08-1.7Zm10 18h-4v-13.99h4Zm8 0h-4v-13.99h4Zm2-18H67v-11c0-2.76 1.96-5 4.36-5h7.28c2.4 0 4.36 2.24 4.36 5Zm9 0h-5v-10.15l2.08 1.7a2.013 2.013 0 0 0 1.27.45 2.04 2.04 0 0 0 1.33-.5l.32-.29Zm0-14.14-1.71 1.51-5.62-4.59a8.31 8.31 0 0 0-3.74-2.43H69.07a8.31 8.31 0 0 0-3.74 2.43l-5.63 4.59-1.7-1.51v-49.22a168.852 168.852 0 0 0 33.11-5.71c.29-.07.59-.11.89-.17Z" />
                                                                            <path fill="#845adf"
                                                                                d="M146 147.275h-12.199a1.406 1.406 0 0 1 .124-.69.803.803 0 0 1 .468-.35 2 2 0 0 0-.732-3.93 4.834 4.834 0 0 0-3.152 2.198 5.182 5.182 0 0 0-.703 2.772h-1.612a5.182 5.182 0 0 0-.703-2.772 4.834 4.834 0 0 0-3.152-2.199 2.026 2.026 0 0 0-2.341 1.626 1.973 1.973 0 0 0 1.603 2.304.819.819 0 0 1 .474.351 1.406 1.406 0 0 1 .124.69H115.8a1.406 1.406 0 0 1 .124-.69.803.803 0 0 1 .468-.35 2 2 0 0 0-.732-3.93 4.834 4.834 0 0 0-3.152 2.198 5.182 5.182 0 0 0-.703 2.772h-1.612a5.182 5.182 0 0 0-.703-2.772 4.834 4.834 0 0 0-3.152-2.199 2.026 2.026 0 0 0-2.34 1.626 1.973 1.973 0 0 0 1.602 2.304.819.819 0 0 1 .474.351 1.406 1.406 0 0 1 .124.69H97.8a1.406 1.406 0 0 1 .124-.69.803.803 0 0 1 .468-.35 2 2 0 0 0-.732-3.93 4.834 4.834 0 0 0-3.152 2.198 5.182 5.182 0 0 0-.703 2.772h-1.612a5.182 5.182 0 0 0-.703-2.772 4.834 4.834 0 0 0-3.152-2.199 2.026 2.026 0 0 0-2.34 1.626 1.973 1.973 0 0 0 1.602 2.304.819.819 0 0 1 .474.351 1.406 1.406 0 0 1 .124.69h-8.397a1.41 1.41 0 0 1 .123-.69.805.805 0 0 1 .468-.35 2 2 0 0 0-.731-3.93 4.838 4.838 0 0 0-3.154 2.198 5.182 5.182 0 0 0-.702 2.772h-1.612a5.182 5.182 0 0 0-.702-2.772 4.838 4.838 0 0 0-3.154-2.199 2 2 0 1 0-.676 3.942.875.875 0 0 1 .401.319 1.384 1.384 0 0 1 .127.71h-8.388a1.41 1.41 0 0 1 .123-.69.805.805 0 0 1 .468-.35 2 2 0 0 0-.731-3.93 4.838 4.838 0 0 0-3.154 2.198 5.182 5.182 0 0 0-.702 2.772h-1.612a5.182 5.182 0 0 0-.702-2.772 4.838 4.838 0 0 0-3.154-2.199 2 2 0 1 0-.676 3.942.875.875 0 0 1 .401.319 1.384 1.384 0 0 1 .127.71h-8.388a1.41 1.41 0 0 1 .123-.69.805.805 0 0 1 .468-.35 2 2 0 0 0-.731-3.93 4.838 4.838 0 0 0-3.154 2.198 5.182 5.182 0 0 0-.702 2.772h-1.612a5.182 5.182 0 0 0-.702-2.772 4.838 4.838 0 0 0-3.154-2.199 2 2 0 1 0-.676 3.942.875.875 0 0 1 .401.319 1.384 1.384 0 0 1 .127.71H22a2 2 0 0 0-2 2c0 1.105 128 1.105 128 0a2 2 0 0 0-2-2Z" />
                                                                            <circle cx="2" cy="149.275" r="2"
                                                                                fill="#403161" />
                                                                            <path fill="#403161"
                                                                                d="M11 147.275H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z" />
                                                                            <circle cx="166" cy="149.275" r="2"
                                                                                fill="#403161" />
                                                                            <path fill="#845adf"
                                                                                d="M118.154 155.275h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 0 0 0-4h-8.94v-2H104a2 2 0 0 0 0-4z" />
                                                                            <path fill="#403161"
                                                                                d="M150.721 151.275H17.28a2.017 2.017 0 1 1 0-4H150.72a2.017 2.017 0 1 1 0 4Z" />
                                                                            <path fill="#845adf"
                                                                                d="M75 80.275a7.986 7.986 0 0 0-5.93 13.35h11.86A7.986 7.986 0 0 0 75 80.275Zm0 12a4 4 0 1 1 4-4 3.999 3.999 0 0 1-4 4Z" />
                                                                            <path fill="#403161"
                                                                                d="M75.971 29.608a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm82.334 43.167a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM31.97 3.608a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm127.362-3.333a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm-148 42.666a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z" />
                                                                            <path fill="#845adf"
                                                                                d="m5.888 16.953 1.487-1.956-.939-.532-.955 2.19H5.45l-.97-2.174-.955.547 1.471 1.909v.032l-2.301-.298v1.064l2.316-.297v.031l-1.486 1.909.891.563 1.018-2.206h.031l.939 2.191.986-.564-1.502-1.877v-.032l2.362.282v-1.064l-2.362.313v-.031zM92.334 4.455l-.856 1.099.513.325.586-1.271h.018l.541 1.262.568-.325-.865-1.081v-.018l1.36.162v-.612l-1.36.18v-.018l.856-1.126-.541-.307-.55 1.261h-.018l-.558-1.252-.55.315.847 1.1v.018L91 3.996v.612l1.334-.171v.018zM165.638 38.988v-1.043l-2.317.307v-.031l1.459-1.918-.921-.522-.936 2.148h-.032l-.951-2.133-.937.537 1.444 1.873v.031l-2.257-.292v1.043l2.272-.291v.031l-1.459 1.872.875.553.998-2.165h.03l.921 2.149.968-.552-1.474-1.842v-.031l2.317.276zM129.667 19.158l1.258-1.654-.795-.451-.807 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.027l-1.947-.252v.9l1.96-.251v.026l-1.258 1.615.755.477.861-1.867h.026l.794 1.853.835-.476-1.271-1.589v-.026l1.998.238v-.9l-1.998.265v-.027z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="text-end ms-5">
                                                                        <p class="text-[1.5625rem] font-semibold mb-0">
                                                                            ${{ $antivirusitem->price }}</p>
                                                                        <p
                                                                            class="text-[#000] dark:text-white/50 opacity-100 text-[.6875rem] font-semibold mb-0">
                                                                            per month</p>
                                                                    </div>
                                                                </div>
                                                                <ul
                                                                    class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                    <li class="mb-4">
                                                                        <span
                                                                            class="text-[#000] dark:text-white/50">Storage
                                                                            Capacity<span
                                                                                class="badge bg-light text-defaulttextcolor ms-1">1Tb</span></span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">Daily
                                                                            Updates<span
                                                                                class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">Online
                                                                            Support</span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span
                                                                            class="text-[#000] dark:text-white/50">Visitors
                                                                            Monitoring<span
                                                                                class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">2 Free
                                                                            Domains</span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">Money
                                                                            Back
                                                                            Guarentee</span>
                                                                    </li>
                                                                </ul>
                                                                <div class="grid">
                                                                    <a href="{{ route('user.fpay', ['id' => encrypt($antivirusitem->id)]) }}"
                                                                        class="ti-btn ti-btn-primary">Choose Plan</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="tab-pane !p-0 border-b-0 dark:border-defaultborder/10 full-box-brd hidden"
                                                id="pricing-yearly-pane" role="tabpanel">
                                                <div class="grid grid-cols-12">
                                                    @foreach ($vpnshield as $vpnshielditem)
                                                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12  col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0 price-box"
                                                            style="margin: 8px;">
                                                            <div class="p-6 text-[#000] dark:text-white/50">
                                                                <h6 class="font-semibold text-center text-[1rem]">TTB VPN
                                                                    SHIELD {{ $vpnshielditem->name }}</h6>
                                                                <div class="py-4 flex items-center justify-center">
                                                                    <div class="pricing-svg1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            data-name="Layer 1" viewBox="0 0 168 168">
                                                                            <path fill="#845adf"
                                                                                d="M48.877 36.254c3.742 4.464 10.559 4.995 10.847 5.016.048.003.096.005.143.005A2 2 0 0 0 61.84 39.6c.045-.274 1.07-6.786-2.716-11.306-3.742-4.464-10.559-4.995-10.848-5.015a2.017 2.017 0 0 0-2.114 1.669c-.045.274-1.07 6.786 2.715 11.304zm7.18-5.39a9.88 9.88 0 0 1 1.938 6.072 11.383 11.383 0 0 1-6.053-3.252v.001a9.88 9.88 0 0 1-1.938-6.071 11.378 11.378 0 0 1 6.053 3.25zm74.388 24.431c-.278.041-6.858 1.055-10.205 6.168-3.3 5.043-1.996 11.909-1.938 12.199a2 2 0 0 0 1.96 1.613 2.104 2.104 0 0 0 .29-.02c.279-.042 6.859-1.055 10.205-6.169 3.3-5.043 1.996-11.908 1.939-12.198a2.004 2.004 0 0 0-2.251-1.593zm-3.035 11.601a10.55 10.55 0 0 1-5.397 3.854 12.464 12.464 0 0 1 1.575-7.095v-.001a10.549 10.549 0 0 1 5.396-3.855 12.47 12.47 0 0 1-1.574 7.097z" />
                                                                            <path fill="#403161"
                                                                                d="M138.16 29.515c-5.92-2.54-12.61-1.07-17.12.25-3.73 1.09-7.42 2.45-11.03 3.82a26.346 26.346 0 0 0 5.19-7.49 2 2 0 0 0-3.65-1.64c-4.46 9.92-16.63 14.39-19.27 15.26-.69.19-2.33.65-2.4.68a160.941 160.941 0 0 1-34.03 5.64 62.167 62.167 0 0 1-28.93-5.56c-.15-.06-2.81-1.31-3.99-1.93a2.002 2.002 0 0 0-1.85 3.55c.92.48 4.09 1.98 4.13 2 6.21 2.96 8.89 5.82 8.37 13.04a2.05 2.05 0 0 0 2 2.14 1.998 1.998 0 0 0 1.99-1.86 17.056 17.056 0 0 0-1.64-9.49A65.547 65.547 0 0 0 54 50.095v47.33a2.052 2.052 0 0 0-.5.39 2.017 2.017 0 0 0 .17 2.83l.33.29v12.34h-1a2 2 0 1 0 0 4s1 0 1 .01h11v13.99a3.999 3.999 0 0 0 4 4h12a3.999 3.999 0 0 0 4-4v-13.99s11 0 11-.01h1a2 2 0 0 0 0-4h-1v-12.34l.33-.29a2.017 2.017 0 0 0 .17-2.83 2.052 2.052 0 0 0-.5-.39v-53.96a34.048 34.048 0 0 1 12.77 1.16c1.9.56 5.13 1.9 5.55 4.59a2.04 2.04 0 0 0 2.28 1.67 2.003 2.003 0 0 0 1.67-2.29c-.56-3.6-3.53-6.37-8.35-7.81a36.359 36.359 0 0 0-4.83-1.06c1.37-.51 2.73-1.02 4.07-1.54 4.25-1.62 8.64-3.3 13.01-4.58 6.23-1.83 10.81-1.96 14.41-.41 3.99 1.71 8.47 5.05 7.2 11.29a6.907 6.907 0 0 1-4.21 4.86 5.702 5.702 0 0 1-5.49-.58 4.408 4.408 0 0 1-1.18-5.23 2.003 2.003 0 0 0-3.43-2.07c-2.16 3.59-.57 8.53 2.3 10.56a9.485 9.485 0 0 0 5.51 1.77 10.214 10.214 0 0 0 3.76-.73 10.847 10.847 0 0 0 6.66-7.79c1.39-6.82-2.09-12.56-9.54-15.76ZM63 113.275h-5v-8.79l.32.29a2.04 2.04 0 0 0 1.33.5 2.013 2.013 0 0 0 1.27-.45l2.08-1.7Zm10 18h-4v-13.99h4Zm8 0h-4v-13.99h4Zm2-18H67v-11c0-2.76 1.96-5 4.36-5h7.28c2.4 0 4.36 2.24 4.36 5Zm9 0h-5v-10.15l2.08 1.7a2.013 2.013 0 0 0 1.27.45 2.04 2.04 0 0 0 1.33-.5l.32-.29Zm0-14.14-1.71 1.51-5.62-4.59a8.31 8.31 0 0 0-3.74-2.43H69.07a8.31 8.31 0 0 0-3.74 2.43l-5.63 4.59-1.7-1.51v-49.22a168.852 168.852 0 0 0 33.11-5.71c.29-.07.59-.11.89-.17Z" />
                                                                            <path fill="#845adf"
                                                                                d="M146 147.275h-12.199a1.406 1.406 0 0 1 .124-.69.803.803 0 0 1 .468-.35 2 2 0 0 0-.732-3.93 4.834 4.834 0 0 0-3.152 2.198 5.182 5.182 0 0 0-.703 2.772h-1.612a5.182 5.182 0 0 0-.703-2.772 4.834 4.834 0 0 0-3.152-2.199 2.026 2.026 0 0 0-2.341 1.626 1.973 1.973 0 0 0 1.603 2.304.819.819 0 0 1 .474.351 1.406 1.406 0 0 1 .124.69H115.8a1.406 1.406 0 0 1 .124-.69.803.803 0 0 1 .468-.35 2 2 0 0 0-.732-3.93 4.834 4.834 0 0 0-3.152 2.198 5.182 5.182 0 0 0-.703 2.772h-1.612a5.182 5.182 0 0 0-.703-2.772 4.834 4.834 0 0 0-3.152-2.199 2.026 2.026 0 0 0-2.34 1.626 1.973 1.973 0 0 0 1.602 2.304.819.819 0 0 1 .474.351 1.406 1.406 0 0 1 .124.69H97.8a1.406 1.406 0 0 1 .124-.69.803.803 0 0 1 .468-.35 2 2 0 0 0-.732-3.93 4.834 4.834 0 0 0-3.152 2.198 5.182 5.182 0 0 0-.703 2.772h-1.612a5.182 5.182 0 0 0-.703-2.772 4.834 4.834 0 0 0-3.152-2.199 2.026 2.026 0 0 0-2.34 1.626 1.973 1.973 0 0 0 1.602 2.304.819.819 0 0 1 .474.351 1.406 1.406 0 0 1 .124.69h-8.397a1.41 1.41 0 0 1 .123-.69.805.805 0 0 1 .468-.35 2 2 0 0 0-.731-3.93 4.838 4.838 0 0 0-3.154 2.198 5.182 5.182 0 0 0-.702 2.772h-1.612a5.182 5.182 0 0 0-.702-2.772 4.838 4.838 0 0 0-3.154-2.199 2 2 0 1 0-.676 3.942.875.875 0 0 1 .401.319 1.384 1.384 0 0 1 .127.71h-8.388a1.41 1.41 0 0 1 .123-.69.805.805 0 0 1 .468-.35 2 2 0 0 0-.731-3.93 4.838 4.838 0 0 0-3.154 2.198 5.182 5.182 0 0 0-.702 2.772h-1.612a5.182 5.182 0 0 0-.702-2.772 4.838 4.838 0 0 0-3.154-2.199 2 2 0 1 0-.676 3.942.875.875 0 0 1 .401.319 1.384 1.384 0 0 1 .127.71h-8.388a1.41 1.41 0 0 1 .123-.69.805.805 0 0 1 .468-.35 2 2 0 0 0-.731-3.93 4.838 4.838 0 0 0-3.154 2.198 5.182 5.182 0 0 0-.702 2.772h-1.612a5.182 5.182 0 0 0-.702-2.772 4.838 4.838 0 0 0-3.154-2.199 2 2 0 1 0-.676 3.942.875.875 0 0 1 .401.319 1.384 1.384 0 0 1 .127.71H22a2 2 0 0 0-2 2c0 1.105 128 1.105 128 0a2 2 0 0 0-2-2Z" />
                                                                            <circle cx="2" cy="149.275" r="2"
                                                                                fill="#403161" />
                                                                            <path fill="#403161"
                                                                                d="M11 147.275H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z" />
                                                                            <circle cx="166" cy="149.275" r="2"
                                                                                fill="#403161" />
                                                                            <path fill="#845adf"
                                                                                d="M118.154 155.275h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 0 0 0-4h-8.94v-2H104a2 2 0 0 0 0-4z" />
                                                                            <path fill="#403161"
                                                                                d="M150.721 151.275H17.28a2.017 2.017 0 1 1 0-4H150.72a2.017 2.017 0 1 1 0 4Z" />
                                                                            <path fill="#845adf"
                                                                                d="M75 80.275a7.986 7.986 0 0 0-5.93 13.35h11.86A7.986 7.986 0 0 0 75 80.275Zm0 12a4 4 0 1 1 4-4 3.999 3.999 0 0 1-4 4Z" />
                                                                            <path fill="#403161"
                                                                                d="M75.971 29.608a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm82.334 43.167a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM31.97 3.608a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm127.362-3.333a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm-148 42.666a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z" />
                                                                            <path fill="#845adf"
                                                                                d="m5.888 16.953 1.487-1.956-.939-.532-.955 2.19H5.45l-.97-2.174-.955.547 1.471 1.909v.032l-2.301-.298v1.064l2.316-.297v.031l-1.486 1.909.891.563 1.018-2.206h.031l.939 2.191.986-.564-1.502-1.877v-.032l2.362.282v-1.064l-2.362.313v-.031zM92.334 4.455l-.856 1.099.513.325.586-1.271h.018l.541 1.262.568-.325-.865-1.081v-.018l1.36.162v-.612l-1.36.18v-.018l.856-1.126-.541-.307-.55 1.261h-.018l-.558-1.252-.55.315.847 1.1v.018L91 3.996v.612l1.334-.171v.018zM165.638 38.988v-1.043l-2.317.307v-.031l1.459-1.918-.921-.522-.936 2.148h-.032l-.951-2.133-.937.537 1.444 1.873v.031l-2.257-.292v1.043l2.272-.291v.031l-1.459 1.872.875.553.998-2.165h.03l.921 2.149.968-.552-1.474-1.842v-.031l2.317.276zM129.667 19.158l1.258-1.654-.795-.451-.807 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.027l-1.947-.252v.9l1.96-.251v.026l-1.258 1.615.755.477.861-1.867h.026l.794 1.853.835-.476-1.271-1.589v-.026l1.998.238v-.9l-1.998.265v-.027z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="text-end ms-5">
                                                                        <p
                                                                            class="text-[#000] dark:text-white/50 font-semibold mb-0">
                                                                            ${{ $vpnshielditem->price }}
                                                                        </p>
                                                                        <p
                                                                            class="text-[#000] dark:text-white/50 opacity-100 text-[.6875rem] font-semibold mb-0">
                                                                            per Year</p>
                                                                    </div>
                                                                </div>
                                                                <ul
                                                                    class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                    <li class="mb-4">
                                                                        <span
                                                                            class="text-[#000] dark:text-white/50">Storage
                                                                            Capacity<span
                                                                                class="badge bg-light text-defaulttextcolor ms-1">1Tb</span></span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">Daily
                                                                            Updates<span
                                                                                class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">Online
                                                                            Support</span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span
                                                                            class="text-[#000] dark:text-white/50">Visitors
                                                                            Monitoring<span
                                                                                class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">2 Free
                                                                            Domains</span>
                                                                    </li>
                                                                    <li class="mb-4">
                                                                        <span class="text-[#000] dark:text-white/50">Money
                                                                            Back
                                                                            Guarentee</span>
                                                                    </li>
                                                                </ul>
                                                                <div class="grid">

                                                                    <a href="{{ route('user.fpay', ['id' => encrypt($vpnshielditem->id)]) }}"
                                                                        class="ti-btn ti-btn-primary">Choose Plan</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12"></div>
                    </div>
                </div>
            </section> --}}
            <section class="home2-new-seven-pricing">
                <div class="grid grid-cols-12 gap-6 justify-center mb-[3rem] ">
                    <div class="xxl:col-span-2 col-span-12"></div>
                    <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                        <div class="container-fluid">
                            <div class="flex justify-center !mx-auto">
                                <div class="">
                                    <h5 class="font-semibold text-center text-[1.25rem] !text-defaulttextcolor"> Simple
                                        Pricing For Everyone </h5>
                                </div>
                            </div>
                            <div class="flex justify-center mb-4 mt-5">
                                <nav class="bg-primary/10 p-4 rounded-md mb-4" aria-label="Tabs">
                                    <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4  text-sm font-medium text-center rounded-sm hover:text-primary active"
                                        id="pricing-item1" data-hs-tab="#pricing-monthly-pane"
                                        aria-controls="pricing-monthly-pane">
                                        Antivirus
                                    </a>
                                    <a class="hs-tab-active:bg-primary hs-tab-active:text-white cursor-pointer text-primary py-2 px-4 text-sm font-medium text-center  rounded-sm hover:text-primary "
                                        id="pricing-yearly1-item1" data-hs-tab="#pricing-yearly-pane"
                                        aria-controls="pricing-yearly-pane">
                                        VPN Shield
                                    </a>
                                </nav>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane show active !p-0 border-b-0 dark:border-defaultborder/10"
                                            id="pricing-monthly-pane" role="tabpanel">
                                            <div class="grid grid-cols-12">
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        <h6 class="font-semibold text-center text-[1rem]">Plus</h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p class="text-[1.5625rem] font-semibold mb-0 ">$1,299 per
                                                                    month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get
                                                                Started</button>
                                                        </div>
                                                        <ul class="list-none text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>1 PC, Mac, tablet,
                                                                    or phone</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>2GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        <h6 class="font-semibold text-center text-[1rem]">Standard</h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p class="text-[1.5625rem] font-semibold mb-0 ">$1,299 per
                                                                    month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get
                                                                Started</button>
                                                        </div>
                                                        <ul class="list-none  text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i> <span>1 PC, Mac, tablet,
                                                                    or phone</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>10GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i> <span>VPN private
                                                                    internet connection</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        {{-- <span class="pricing-offer-details shadow">
                                                            <span class="font-semibold">10%</span> <span
                                                                class="text-[0.625rem] op-8 ms-1">Off</span>
                                                        </span> --}}
                                                        <h6 class="font-semibold text-center text-[1rem]">Deluxe</h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p
                                                                    class="text-[1.5625rem] font-semibold mb-0 text-primary">
                                                                    $1,299 per month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get Started</button>
                                                        </div>
                                                        <ul class="list-none text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>5 PCs, Macs,
                                                                    tablets, or phones</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>50GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>VPN private internet
                                                                    connection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Parental
                                                                    Control‡</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Dark Web
                                                                    Monitoring§</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 ps-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        <span class="pricing-offer-details shadow">
                                                            <span class="font-semibold">10%</span> <span
                                                                class="text-[0.625rem] op-8 ms-1">Off</span>
                                                        </span>
                                                        <h6 class="font-semibold text-center text-[1rem]">Advanced</h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p class="text-[1.5625rem] font-semibold mb-0 ">$1,299 per
                                                                    month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get
                                                                Started</button>
                                                        </div>
                                                        <ul class="list-none  text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>10 PCs, Macs,
                                                                    tablets, or phones</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>200GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>VPN private internet
                                                                    connection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Parental
                                                                    Control‡</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Dark Web
                                                                    Monitoring§</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Identity Restoration
                                                                    Support</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Credit Report and
                                                                    Score18</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Credit
                                                                    Alerts18</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Stolen Wallet
                                                                    Assist</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Social Media
                                                                    Monitoring17</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>NEW! Financial
                                                                    Monitoring</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane !p-0 border-b-0 dark:border-defaultborder/10 hidden"
                                            id="pricing-yearly-pane" role="tabpanel">
                                            <div class="grid grid-cols-12">
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        <h6 class="font-semibold text-center text-[1rem]">Plus </h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p class="text-[1.5625rem] font-semibold mb-0 ">$1,299 per
                                                                    month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get
                                                                Started</button>
                                                        </div>
                                                        <ul class="list-none text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>1 PC, Mac, tablet,
                                                                    or phone</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>2GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        <h6 class="font-semibold text-center text-[1rem]">Standard</h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p class="text-[1.5625rem] font-semibold mb-0 ">$1,299 per
                                                                    month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get
                                                                Started</button>
                                                        </div>
                                                        <ul class="list-none  text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i> <span>1 PC, Mac, tablet,
                                                                    or phone</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>10GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i> <span>VPN private
                                                                    internet connection</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        {{-- <span class="pricing-offer-details shadow">
                                                            <span class="font-semibold">10%</span> <span
                                                                class="text-[0.625rem] op-8 ms-1">Off</span>
                                                        </span> --}}
                                                        <h6 class="font-semibold text-center text-[1rem]">Deluxe</h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p
                                                                    class="text-[1.5625rem] font-semibold mb-0 text-primary">
                                                                    $1,299 per month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>

                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get Started</button>
                                                        </div>
                                                        <ul class="list-none text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>5 PCs, Macs,
                                                                    tablets, or phones</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>50GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>VPN private internet
                                                                    connection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Parental
                                                                    Control‡</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Dark Web
                                                                    Monitoring§</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12 ps-0 box-price">
                                                    <div class="p-6 pricing-offer overflow-hidden">
                                                        <span class="pricing-offer-details shadow">
                                                            <span class="font-semibold">10%</span> <span
                                                                class="text-[0.625rem] op-8 ms-1">Off</span>
                                                        </span>
                                                        <h6 class="font-semibold text-center text-[1rem]">Advanced</h6>
                                                        <div class="py-4 flex items-center justify-center">
                                                            <div class="pricing-svg1">

                                                            </div>
                                                            <div class="text-end ms-5">
                                                                <p class="text-[1.5625rem] font-semibold mb-0 ">$1,299 per
                                                                    month</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                    See Subscription details below *</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button"
                                                                class="ti-btn bg-primary text-white">Get
                                                                Started</button>
                                                        </div>
                                                        <ul class="list-none  text-[0.75rem] pt-4 mb-0">
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>10 PCs, Macs,
                                                                    tablets, or phones</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Antivirus, malware,
                                                                    ransomware, and hacking protection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>100% Virus
                                                                    Protection Promise2</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>200GB Cloud
                                                                    Backup‡‡,4</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Password
                                                                    Manager</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>VPN private internet
                                                                    connection</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Parental
                                                                    Control‡</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Dark Web
                                                                    Monitoring§</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Identity Restoration
                                                                    Support</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Credit Report and
                                                                    Score18</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Credit
                                                                    Alerts18</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Stolen Wallet
                                                                    Assist</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>Social Media
                                                                    Monitoring17</span>
                                                            </li>
                                                            <li class="mb-4">
                                                                <i class="fa-solid fa-check"></i><span>NEW! Financial
                                                                    Monitoring</span>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-2 col-span-12"></div>
                </div>
            </section>
            {{-- third pricing plan section end --}}


            {{-- forth section start --}}
            <section class="section-home-new-4">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12">
                            <div class="grid grid-cols-12">
                                <div
                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 col-span-3 icon-box-new">
                                    <img src="{{ asset('assets/home-two-img/Real-time threat detection.png') }}"
                                        alt="" class="img-fluid" width="80%">
                                </div>
                                <div
                                    class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 md:col-span-8 col-span-8 text-box-new">
                                    <h4>Real-time threat<br> detection</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12">
                            <div class="grid grid-cols-12">
                                <div
                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 col-span-3 icon-box-new">
                                    <img src="{{ asset('assets/home-two-img/Auto-update feature.png') }}" alt=""
                                        class="img-fluid" width="80%">
                                </div>
                                <div
                                    class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 md:col-span-8 col-span-8 text-box-new">
                                    <h4>Auto-update <br>feature </h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12">
                            <div class="grid grid-cols-12">
                                <div
                                    class="xxl:col-span-4 xl:col-span-33lg:col-span-3 md:col-span-3 col-span-3 icon-box-new">
                                    <img src="{{ asset('assets/home-two-img/24x7 hours.png') }}" alt=""
                                        class="img-fluid" width="80%">
                                </div>
                                <div
                                    class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 md:col-span-8 col-span-8 text-box-new">
                                    <h4>24x7 hours expert & certified services</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-12 col-span-12">
                            <div class="grid grid-cols-12">
                                <div
                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 col-span-3 icon-box-new">
                                    <img src="{{ asset('assets/home-two-img/In-built Firewall.png') }}" alt=""
                                        class="img-fluid" width="80%">
                                </div>
                                <div
                                    class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 md:col-span-8 col-span-8 text-box-new">
                                    <h4>Multi-device <br>compatibility </h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- forth section End --}}

            {{-- fifth section start --}}
            <section class="section-home-new-5">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <img src="{{ asset('assets/home-two-img/section5.png') }}" alt="" class="img-fluid"
                                width="100%">
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <h2><span class="text-color-ttb">TTB VPN Shield</span>–Encrypted Privacy that hides from
                                CyberPunks</h2>
                            <p>Now browse and play securely on the web by using our VPN Shield software. It conceals you
                                from online snoops and never logs your activities. This service is easy to navigate, hides
                                your IP whenever you connect to the online world, and not slows down your network speed.
                                With such a VPN, you can freely use public & shared networks. Buy Now to Stay Hidden!</p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- fifth section start --}}

            {{-- six section start --}}
            <section class="section-home-new-6">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <h2><span class="text-color-ttb">TTB Antivirus</span>– Advanced Threat Intelligence Tool
                            </h2>
                            <p>Our easy-to-install antivirus will alert you about the emerging and new threat that addresses
                                the dark web. It smartly guards your device and confidentiality with real-time threat
                                detection and auto-update features. This advanced tool locks up your privacy and security
                                from malware, ransomware, viruses, & more. Order Now for Advanced Protection!
                            </p>

                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <img src="{{ asset('assets/home-two-img/section6.png') }}" alt="" class="img-fluid"
                                width="100%">
                        </div>
                    </div>
                </div>
            </section>
            {{-- six section End --}}

            {{-- saven section start --}}
            <section class="section-home-new-7">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                            <img src="{{ asset('assets/home-two-img/certificates.png') }}" alt=""
                                class="img-fluid" width="60%">
                        </div>
                    </div>
                </div>
            </section>
            {{-- saven section End --}}

            {{-- New testimonial html css start --}}

            <style>
                .testimonial-area {
                    position: relative;
                }

                .testimonial-content {
                    position: relative;
                    z-index: 1;
                    bottom: 4.8rem;
                }

                .owl-nav {
                    position: absolute;
                    top: 50%;
                    width: calc(100% - 100px);
                    /* Reduced width to leave space for buttons */
                    display: flex;
                    justify-content: space-between;
                    transform: translateY(-4rem);
                    /* padding: 0 50px;  */
                    box-sizing: border-box;
                    width: 100%;
                }

                .owl-nav button {
                    background-color: transparent;
                    border: none;
                    font-size: 30px;
                    cursor: pointer;
                    transition: color 0.3s;
                }

                .owl-nav button:hover {
                    color: var(--blue);
                }

                .sec-title.white-title h2 {
                    color: #fff;
                }

                .client-video img {
                    width: 150px !important;
                    max-width: 65px;
                }

                .client-info i.fa-solid.fa-quote-left {
                    position: absolute;
                    right: 10px;
                    font-size: 60px;
                    color: #11CDBE;
                }

                .client-video {
                    padding-right: 15px;
                }

                .client-info {
                    display: flex;
                    align-items: center;
                    text-align: left;
                    padding-bottom: 30px;
                    margin-top: 1rem;
                }

                .single-testimonial p {
                    background: #fff;
                    padding: 42px 32px;
                    box-shadow: 0px 0px 8px 2px #0000001a;
                    border-radius: 6px;
                }

                .back-img {
                    content: url('https://www.nighthawk-routerlogin.com/assets/img/Bg.png');
                    width: 100%;
                    position: relative;
                    /* top: 5rem; */
                }

                .owl-nav button.owl-prev {
                    position: relative;
                    left: -3rem;
                    padding: 8px;
                    border-radius: 39px;
                    border-width: 1px;
                    border: 1px solid;
                    height: 38px;
                    align-items: center;
                    display: inherit;
                    font-size: 24px;
                    color: #0000006e;
                }

                .owl-nav button.owl-next {
                    position: relative;
                    right: -2rem;
                    padding: 8px;
                    border-radius: 39px;
                    border-width: 1px;
                    border: 1px solid;
                    height: 38px;
                    align-items: center;
                    display: inherit;
                    font-size: 24px;
                    color: #0000006e;
                }
            </style>

            <section
                class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
                id="faq" style="overflow: hidden; padding-bottom: 0rem; height: 420px;">
                <div class="container main-banner-container">
                    <section class="testimonial-area">
                        <div class="container">
                            <div class="sec-title white-title">
                                <p class="text-center text-4xl font-bold mb-4 pb-4">What Client Say About Us?</p>
                            </div>
                            <div class="back-img"></div>
                            <div class="testimonial-content owl-carousel">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial carousel-slide single-testimonial p-4">
                                    <div class="round-1 round"></div>
                                    <div class="round-2 round"></div>
                                    <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </p>
                                    <div class="client-info">
                                        <div class="client-video">
                                            <a href="#"><img
                                                    src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="client-details">
                                            <h6>Yeasin Arafat</h6>
                                            <span>Designer, LLCG Team</span>
                                        </div>
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                </div>
                                <!-- Add more testimonials as needed -->
                                <div class="single-testimonial carousel-slide single-testimonial p-4">
                                    <div class="round-1 round"></div>
                                    <div class="round-2 round"></div>
                                    <p>2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </p>
                                    <div class="client-info">
                                        <div class="client-video">
                                            <a href="#"><img
                                                    src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="client-details">
                                            <h6>Yeasin Arafat</h6>
                                            <span>Designer, LLCG Team</span>
                                        </div>
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                </div>
                                <!-- Repeat the above block for more testimonials -->
                                <div class="single-testimonial carousel-slide single-testimonial p-4">
                                    <div class="round-1 round"></div>
                                    <div class="round-2 round"></div>
                                    <p>3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </p>
                                    <div class="client-info">
                                        <div class="client-video">
                                            <a href="#"><img
                                                    src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="client-details">
                                            <h6>Yeasin Arafat</h6>
                                            <span>Designer, LLCG Team</span>
                                        </div>
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                </div>
                                <!-- Repeat the above block for more testimonials -->
                                <div class="single-testimonial carousel-slide single-testimonial p-4">
                                    <div class="round-1 round"></div>
                                    <div class="round-2 round"></div>
                                    <p>4. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </p>
                                    <div class="client-info">
                                        <div class="client-video">
                                            <a href="#"><img
                                                    src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="client-details">
                                            <h6>Yeasin Arafat</h6>
                                            <span>Designer, LLCG Team</span>
                                        </div>
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                </div>
                                <!-- Repeat the above block for more testimonials -->
                                <div class="single-testimonial carousel-slide single-testimonial p-4">
                                    <div class="round-1 round"></div>
                                    <div class="round-2 round"></div>
                                    <p>5. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </p>
                                    <div class="client-info">
                                        <div class="client-video">
                                            <a href="#"><img
                                                    src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="client-details">
                                            <h6>Yeasin Arafat</h6>
                                            <span>Designer, LLCG Team</span>
                                        </div>
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                </div>
                                <!-- Repeat the above block for more testimonials -->
                            </div>
                            <div class="owl-nav">
                                <button class="owl-prev"><i class="fa-solid fa-arrow-left"></i></button>
                                <button class="owl-next"><i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                </div>
            </section>
            </section>

            <script>
                $(document).ready(function() {
                    const owl = $(".testimonial-content");
                    owl.owlCarousel({
                        loop: true,
                        margin: 8,
                        dots: false,
                        nav: false,
                        mouseDrag: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        smartSpeed: 1000,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 1
                            },
                            1000: {
                                items: 2
                            }
                        }
                    });

                    $(".owl-prev").click(function() {
                        owl.trigger('prev.owl.carousel');
                    });

                    $(".owl-next").click(function() {
                        owl.trigger('next.owl.carousel');
                    });
                });
            </script>

            {{-- New testimonial html css End --}}

            {{-- download section start --}}

            <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] sect-five"
                id="statistics">
                <div class="container text-center relative">

                    <h3
                        class="font-semibold mb-2 text-defaulttextcolor dark:text-defaulttextcolor/70 mb-4 pb-4 text-2xl ttb-heading">
                        Fast, light, and powerful free protection.<br>
                        It's just a click away.</h3>
                    <div class="">
                        <div class="xl:col-span-7 col-span-12">

                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 my-btn-section">
                        <a href="#" class="ti-btn ti-btn-primary-full !rounded-full ti-btn-wave my-btn-pros">
                            <span class="fab fa-apple icon-size-sm mx-3 mr-3 h2"></span>
                            <div class="download-text text-left">
                                <h5 class="mb-0">Download</h5>
                            </div>
                        </a>
                        <a href="#" class="ti-btn !rounded-full ti-btn-wave my-btn-pro"
                            style="border: 1px solid #13D8AA">
                            <span class="fab fa-google-play icon-size-sm mx-3 mr-3 h2" style="color: #13D8AA;"></span>
                            <div class="download-text text-left">
                                <h5 class="mb-0">Download</h5>
                            </div>
                        </a>


                    </div>

                </div>
            </section>

            {{-- End download section --}}











        </div>
    </div>

    {{-- End pricing plan section --}}

    <script src="assets/home-new/js/jquery.min.js"></script>
    <script src="assets/home-new/js/jquery-plugin-collection.js"></script>
    <script src="assets/home-new/js/script.js"></script>




@endsection
