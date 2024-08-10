@extends('User.Layouts.layout')

@section('title', 'Download The Best TTB VPN Shield for macOS - TTB Antivirus')

@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">


        <!-- Start::Home Content -->
        <div class="landing-banner-vpn" id="vpnshield">
            <section class="vpnsection">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12 ps-6">
                            <div class="lg:py-[3rem]">
                                <h2 class="landing-banner-heading mb-4 opacity-[0.9] dark-text">Lorem ipsum
                                    dolor sit amet. Lorem ipsum dolor sit amet consectetur.</h2>
                                <div class="text-[1rem] mb-[1rem] text-black opacity-[0.9] dark-text"
                                    style="padding-right:40px;">ynex - Now you can use
                                    this
                                    admin template to design stunning dashboards that will wow your target viewers or users
                                    to no end. Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet.</div>

                                <a href="index.html" class="ti-btn bg-primary text-white mt-5">
                                    View Demos
                                    <i class="ri-eye-line ms-2 align-middle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">

                            <div class="content-img-wrap">
                                <img class="fancy-radius-1 hero-img-width img-custom-width img-fluid gray-light-bg z--1"
                                    src="{{ asset('assets/img/Banner-Img-u.png') }}" alt="modern desk">
                                <div class="position-absolute dot-shape">
                                    <img src="assets/img/dot-shape.png" alt="appdash">
                                </div>
                                <div class="animation-item d-none d-md-block d-lg-block">
                                    <div class="position-absolute rounded-custom d-flex bg-white hero-animated-card-4">
                                        <img src="assets/img/widget-img.jpg" alt="widget"
                                            class="rounded-custom img-fluid">
                                    </div>
                                    <div
                                        class="position-absolute p-4 w-75 rounded-custom d-flex bg-white hero-animated-card-1">
                                        <p class="gr-text-11 mb-0 text-mirage-2 dark-text ttst">“A better way to manage your
                                            sales, team, clients.”</p>
                                        <div class="small-card-img ml-3">
                                            <img src="assets/img/client/3.jpg" alt="" width="80px"
                                                class="rounded-circle img-fluid">
                                        </div>
                                    </div>
                                    <div class="position-absolute hero-animated-card-3">
                                        <img src="assets/img/shape-1-1.png" alt="shape">
                                    </div>
                                    <div
                                        class="position-absolute p-4 w-75 rounded-custom d-flex secondary-bg hero-animated-card-2">
                                        <div class="small-card-img mr-3 text-white">
                                            <img src="assets/img/client/1.jpg" alt="" width="80px"
                                                class="rounded-circle img-fluid">
                                        </div>
                                        <p class="gr-text-11 mb-0 text-white ttst" style="padding:0 10px;">“Ensuring the
                                            best return on investment for business”</p>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                                <img src="{{ asset('assets/img/Banner-Img-4.png') }}" alt="" class="img-fluid">
                            </div> --}}

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End::Home Content -->

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



        {{-- Start:: pricing plan slider  --}}

        <style>
            .carousel {
                display: flex;
                overflow: hidden;
                width: 100%;
            }

            .carousel-item {
                min-width: calc(100% / 3);
                transition: transform 0.5s ease;
            }

            .carousel-container {
                display: flex;
                transition: transform 0.5s ease;
            }

            .carousel-button {
                background-color: #007bff;
                border: none;
                color: white;
                padding: 10px 20px;
                margin: 10px;
                cursor: pointer;
            }

            .carousel-button:disabled {
                background-color: #cccccc;
            }
        </style>
        <div
            class="carousel-container container section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]  main-banner-container mt-5 mb-5 pt-5">

            <div class="grid grid-cols-12 text-center">

            </div>
            <div class="grid-cols-12">
                <h3 class="font-semibold mb-2 pt-5 text-center dark-text">Pricing Plan</h3>
                <div class="grid grid-cols-12 text-center">
                    <div class="col-span-12">
                        <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-6 font-normal dark-text">We have
                            shared some
                            of the most frequently asked questions to help you out.</p>
                    </div>
                </div>
                <div class="carousel">
                    <div id="carouselContainer" class="carousel-container">

                        @foreach ($plandetails as $plandetailsitem)
                            <div class="carousel-item">
                                <!-- Content for second slide -->
                                <div
                                    class="dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70">
                                    <div class="box-body !p-0 sliders-box">
                                        <div class="!p-6">
                                            <div class="flex justify-between items-center mb-4">
                                                <div class="text-[1.125rem] font-semibold m-auto dark-text">TTB VPN SHIELD
                                                    {{ $plandetailsitem->name }}</div>
                                                <div>
                                                    {{-- <span class="badge bg-success/10 text-success">
                                                    For Small Teams
                                                </span> --}}
                                                </div>
                                            </div>
                                            <div class="text-[1.5625rem] font-bold mb-1">${{ $plandetailsitem->price }} <!-- <sub
                                                                                    class="text-[#8c9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                                                                    Per Month</sub>--> </div>
                                            <div class="mb-1 text-[#8c9097] dark:text-white/50 dark-text">Lorem ipsum dolor
                                                sit amet
                                                consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                            <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                            <ul class="list-none mb-0">
                                                <li class="flex items-center mb-4 dark-text">
                                                    <span class="me-2">
                                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                    </span>
                                                    <span>
                                                        <strong class="me-1">5 Free</strong>Websites
                                                    </span>
                                                </li>
                                                <li class="flex items-center mb-4 dark-text">
                                                    <span class="me-2">
                                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                    </span>
                                                    <span>
                                                        <strong class="me-1">5 GB</strong>Hard disk storage
                                                    </span>
                                                </li>
                                                <li class="flex items-center mb-4 dark-text">
                                                    <span class="me-2">
                                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                    </span>
                                                    <span>
                                                        <strong class="me-1">2 Years</strong>Email support
                                                    </span>
                                                </li>
                                                <li class="flex items-center mb-4 dark-text">
                                                    <span class="me-2">
                                                        <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                    </span>
                                                    <span>
                                                        <strong class="me-1">5</strong>Licenses
                                                    </span>
                                                </li>
                                                <li class="flex items-center mb-4 dark-text">
                                                    <span class="me-2">
                                                        <i
                                                            class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                    </span>
                                                    <span>
                                                        Custom SEO optimizataion
                                                    </span>
                                                </li>
                                                <li class="flex items-center mb-4 dark-text">
                                                    <span class="me-2">
                                                        <i
                                                            class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                    </span>
                                                    <span>
                                                        Chat Support
                                                    </span>
                                                </li>
                                                <li class="grid">
                                                    {{-- <button type="button" class="m-1 ti-btn ti-btn-primary-full">Choose
                                                    Plan</button> --}}
                                                    <a href="{{ route('user.fpay', ['id' => encrypt($plandetailsitem->id)]) }}"
                                                        class="ti-btn bg-primary text-white mt-5">Choose Plan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
            <button class="carousel-btn left" onclick="scrollCarousel(-1)">‹</button>
            <button class="carousel-btn right" onclick="scrollCarousel(1)">›</button>
        </div>

        <script>
            function scrollCarousel(direction) {
                const carousel = document.querySelector('.carousel');
                const scrollAmount = carousel.scrollWidth / carousel.children.length;
                carousel.scrollLeft += direction * scrollAmount;
            }
        </script>

        {{-- End:: pricing plan slider  --}}


        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container main-banner-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="lg:py-[3rem]">
                            <p class="landing-banner-heading mb-4 opacity-[0.9]">Lorem ipsum dolor sit amet.</p>
                            <h2 class="landing-banner-heading mb-4 opacity-[0.9]"><span>What Our Client Say About
                                    Apdash</h2>
                            <div class="text-[1rem] mb-[3rem] !text-dark opacity-[0.9] ">Collaboratively actualize
                                excellent schemas without effective <br> models. Synergistically engineer functionalized
                                applications rather <br> than backend e-commerce.</div>

                            <a href="index.html" class="ti-btn bg-primary text-white">
                                Read More
                                <i class="ri-eye-line ms-2 align-middle"></i>
                            </a>


                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box">

                                    <div class="box-body">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-1.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box">

                                    <div class="box-body">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-2.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box">

                                    <div class="box-body">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-3.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box ">

                                    <div class="box-body">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-4.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Start:: Section-9 -->
        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="faq">
            <div class="container text-center">

                <div class="grid grid-cols-12 gap-6 text-start">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-6 col-span-12">
                                <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                                    <img src="{{ asset('assets/img/We-Provide-Web-Design-with-App-Development.png') }}"
                                        alt="" width="600" class="img-fluid">
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                                    <div class="lg:py-[3rem]">
                                        <h2 class="landing-banner-heading mb-4 opacity-[0.9]"><span>What Our Client Say
                                                <br> About
                                                Apdash</h2>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content. <br> Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                                            provident id accusantium.</p>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content. <br> Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
                                            provident id accusantium.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Section-9 -->




        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container text-center">
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box text-center">
                            <div class="box-body">
                                <div class="mb-2 img-hover">
                                    <span class="avatar avatar-md">

                                        <img src="assets/img/Green-icon-1.png" alt="img" class="!rounded-md">
                                    </span>
                                </div>
                                <h6 class="box-title font-semibold mb-2">Why do we use it?</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and <br> web page editors
                                    now use Lorem Ipsum as <br> their default model text.</p>

                            </div>
                            <i class='bx bx-chevrons-right'></i>
                        </div>
                    </div>
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box text-center">
                            <div class="box-body">
                                <div class="mb-2 img-hover2">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Green-icon-2.png" alt="img" class="!rounded-md">

                                    </span>
                                </div>
                                <h6 class="box-title font-semibold mb-2">Why do we use it?</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and <br> web page editors
                                    now use Lorem Ipsum as <br> their default model text.</p>

                            </div>
                            <i class='bx bx-chevrons-right'></i>
                        </div>
                    </div>
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box text-center">
                            <div class="box-body">
                                <div class="mb-2 img-hover3">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Green-icon-3.png" alt="img" class="!rounded-md">

                                    </span>
                                </div>
                                <h6 class="box-title font-semibold mb-2">Why do we use it?</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and <br> web page editors
                                    now use Lorem Ipsum as <br> their default model text.</p>

                            </div>
                            <i class='bx bx-chevrons-right'></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="features">
            <div class="container main-banner-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="xl:col-span-3 col-span-12 border-custom-main">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex align-center w-full">
                                        <img src="assets/img/24-7-Support.png" alt="img"
                                            class="avatar avatar-rounded me-2 !mb-0">
                                        <div class="my-auto">
                                            <div class="text-[.9375rem] font-semibold">24/7 <br>support</span></div>

                                        </div>

                                    </div>
                                </div>
                                <div class="box-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam possimus distinctio
                                    ipsam sed cum tempora!
                                    <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum qui nobis, impedit
                                    nisi fuga quam cupiditate laboriosam nulla.
                                    <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing.
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="xl:col-span-3 col-span-12 border-custom-main">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex align-center w-full">
                                        <img src="assets/img/30-Day-Money-back-Guarantee.png" alt="img"
                                            class="avatar avatar-rounded me-2 !mb-0">
                                        <div class="my-auto">
                                            <div class="text-[.9375rem] font-semibold">30-Day Mony-back
                                                <br>Guarantee</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="box-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam possimus distinctio
                                    ipsam sed cum tempora!
                                    <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum qui nobis, impedit
                                    nisi fuga quam cupiditate laboriosam nulla.
                                    <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    <br> Lorem ipsum dolor sit amet, consectetur adipisicing.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-cols-12 mt-5">
                    <div class="container text-center">
                        <a href="index.html" class="ti-btn bg-primary text-white">
                            Download
                            <i class="ri-eye-line ms-2 align-middle"></i>
                        </a>
                    </div>
                </div>
            </div>


        </section>


        {{-- New testimonial html css start --}}

        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="faq" style="overflow: hidden; padding-bottom: 0rem; height: 470px;">
            <div class="container main-banner-container">
                <section class="testimonial-area">
                    <div class="container">
                        <div class="sec-title white-title">
                            <h4 class="text-center text-4xl font-bold mb-4 pb-4">What Client Say About Us?</h4>
                        </div>
                        <div class="back-img"></div>
                        <div class="testimonial-content owl-carousel">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">Alex was very thorough, knowledgeable & courteous.
                                    everything I needed and more was taken care of. I've always had great service with TTB.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>GG21</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Add more testimonials as needed -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">These guys are extremely responsive. Always available at a
                                    toll-free number and have batted 1.000 in fixing whatever issues I've encountered.
                                    I also like that their support extends to all of our devices, phones for my wife and I,
                                    my home office PC laptop and various peripherals as
                                    well as her Mac and Apple tablet. All for 2 years at a fixed one-time price.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>George kalnin</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">The technician helped me with all of my devices: laptop, desktop,
                                    smart phone and tablet. Each had a different issue but they were knowledgeable
                                    about them and improved the speed while taking care of my security. I would recommend
                                    them any day, so much better than some random file.
                                    They follow up periodically to make sure you are having no issues. Great customer
                                    service.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>Lori Woods</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">I really appreciate when ever I call TTB they are very
                                    knowledgeable, patient, and kind. Today i want to thank Eric Jack for his extremely
                                    helpful
                                    disposition. Also he;ping me to figure out how to trndfer a document tp my email. There
                                    is no question to small that they will not help you with.
                                    He also clean out my system, added a more secure secrurity system as advising me what to
                                    expect as changes were made to was understandable for
                                    someone my age. Just great service.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>Betty M</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">The TTB service is very thorough: we like knowing that all of our
                                    IT in the house is covered--routers, IPhones, computers, music systems, etc.
                                    And when we move to a new home, the service stays with us. Josh has been unfailingly
                                    patient and proactive during our service calls. Highly recommend!
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>Adrienne Otis</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">Josh at TTB called me to update my PC. He provided excellent
                                    service and walked me through the steps to complete a download. I feel confident that my
                                    PC
                                    is running optimally with the privacy and data protection that they offer. Great job and
                                    I highly recommend this company. Very secure & easy to work with.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>Rick Serafine</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">Working with TTB is a pleasure .Very knowledgeable staff guide me
                                    through the necessary steps to protect my units. They remember to call and scan and
                                    update
                                    my units without being called or reminded. When I have experienced problems and issues
                                    my calls are quickly answered and resolved. Your staff is friendly,
                                    patient, and easy to work with. Great Company!
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>John Holt</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">The technicians were very knowledgeable and professional. They
                                    would make contact when services needed to be updated.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>David Richter</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">Always helpful. a bit hard to understand but always works thru it.
                                    Pricing is a bit confusing at times compared to year's past. Thanks.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>Frank</b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
                                    </div>
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                            </div>
                            <!-- Repeat the above block for more testimonials -->
                            <div class="single-testimonial carousel-slide single-testimonial p-4">
                                <div class="round-1 round"></div>
                                <div class="round-2 round"></div>
                                <p class="dark-black-p">I asked them to provide a new license for my TTB Antivirus and they
                                    did it very quickly.
                                    Agent was very polite and responsive to my needs.
                                </p>
                                <div class="client-info">
                                    <div class="client-video">
                                        <a href="#"><img
                                                src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="client-details">
                                        <h6><b>Randall Thomas </b></h6>
                                        {{-- <span>Designer, LLCG Team</span> --}}
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
                        <div class="review-btn">
                            <a class="google-button"
                                href="https://www.trustpilot.com/review/ttbinternetsecurity.com?utm_medium=trustbox&utm_source=MicroReviewCount"
                                target="_blank">Click here to leave a <strong>google review</strong></a>
                            <style>
                                .google-button {
                                    display: block;
                                    margin: 15px auto;
                                    width: 72%;
                                    max-width: 200px;
                                    padding: 4px 10px 4px 40px;
                                    border: 2px solid #11cdbe;
                                    border-radius: 50px;
                                    position: relative;
                                    top: -7rem;
                                    bottom: 0;
                                    text-transform: uppercase;
                                    text-decoration: none;
                                    text-align: center;
                                    font-size: 10px;
                                    line-height: 19px;
                                    color: #ffffff;
                                    background: url(https://cdn2.hubspot.net/hubfs/1961464/Support%20images/new-google-favicon-512.png) no-repeat left 10px center / 24px 24px;
                                    -webkit-transition: all 0.3s ease;
                                    -moz-transition: all 0.3s ease;
                                    -o-transition: all 0.3s ease;
                                    transition: all 0.3s ease;
                                    -webkit-animation: wiggle 2s ease-in infinite;
                                    -moz-animation: wiggle 2s ease-in infinite;
                                    -o-animation: wiggle 2s ease-in infinite;
                                    animation: wiggle 2s ease-in infinite;
                                }

                                .google-button:hover {
                                    color: #ffffff;
                                    background-color: #11cdbe;
                                    background-image: url(https://cdn2.hubspot.net/hubfs/1961464/Support%20images/new-google-favicon-512-white.png);
                                    border-color: #11cdbe;
                                }

                                .google-button strong {
                                    font-size: 14px;
                                    display: block;
                                    color: #11cdbe;
                                }


                                @-webkit-keyframes wiggle {

                                    0%,
                                    20%,
                                    100% {
                                        background-position: left 20px center;
                                    }

                                    5% {
                                        background-position: left 15px center;
                                    }

                                    10% {
                                        background-position: left 20px center;
                                    }

                                    15% {
                                        background-position: left 25px center;
                                    }
                                }

                                @-moz-keyframes wiggle {

                                    0%,
                                    20%,
                                    100% {
                                        background-position: left 20px center;
                                    }

                                    5% {
                                        background-position: left 15px center;
                                    }

                                    10% {
                                        background-position: left 20px center;
                                    }

                                    15% {
                                        background-position: left 25px center;
                                    }
                                }

                                @-o-keyframes wiggle {

                                    0%,
                                    20%,
                                    100% {
                                        background-position: left 20px center;
                                    }

                                    5% {
                                        background-position: left 15px center;
                                    }

                                    10% {
                                        background-position: left 20px center;
                                    }

                                    15% {
                                        background-position: left 25px center;
                                    }
                                }

                                @keyframes wiggle {

                                    0%,
                                    20%,
                                    100% {
                                        background-position: left 20px center;
                                    }

                                    5% {
                                        background-position: left 15px center;
                                    }

                                    10% {
                                        background-position: left 20px center;
                                    }

                                    15% {
                                        background-position: left 25px center;
                                    }
                                }
                            </style>
                        </div>
                    </div>

            </div>
        </section>


        <script>
            $(document).ready(function() {
                testimonials();
            });
        </script>

        {{-- New testimonial html css End --}}





    </div>
@endsection
