<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTB VPN Shield</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        
    <script>
        $(document).ready(function(){
            $("#darkmode").click(function(){
                $("body").toggleClass("dark-mode");
            });
        });
    </script>
</head>
<?php 
 include("include/header.php"); 
?>


<body>
<button id="darkmode">Toggle Dark Mode</button>
    <div id="content">
        <!-- Your content here -->
    </div>


    <!--hero section start-->
    <style>
    section.position-relative.ptb-100 {
        background-image: url("assets/img/banner-bg.png");
        background-size: cover;
        background-position: center;
    }
    </style>
    <section class="position-relative ptb-100" style="background-color: #f5f6fa;">
        <div class="fit-cover background-image-wraper position-absolute"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12 col-lg-6">
                    <div class="section-heading py-5">
                        <h1 class="font-weight-bolder display-4">Make More Time for the Work</h1>
                        <p class="lead">Start working with that can provide everything you need to generate awareness,
                            drive traffic, connect. Efficiently transform granular value with client-focused.</p>
                        <div class="action-btns mt-3">
                            <a href="#" class="btn btn-brand-01 btn-rounded mr-3">Get Started</a>
                            <a href="#" class="btns"> <span class="pl-2">Watch Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="hero-image-wrap">
                        <div class="content-img-wrap">
                            <img class="fancy-radius-1 hero-img-width img-custom-width img-fluid gray-light-bg z--1"
                                src="assets/img/Banner-Img-4.png" alt="modern desk">
                            <div class="position-absolute dot-shape">
                                <img src="assets/img/dot-shape.png" alt="appdash">
                            </div>
                            <div class="animation-item d-none d-md-block d-lg-block">
                                <div class="position-absolute rounded-custom d-flex bg-white hero-animated-card-4">
                                    <img src="assets/img/widget-img.jpg" alt="widget" class="rounded-custom img-fluid">
                                </div>
                                <div
                                    class="position-absolute p-4 w-75 rounded-custom d-flex bg-white hero-animated-card-1">
                                    <p class="gr-text-11 mb-0 text-mirage-2">“A better way to manage your sales, team,
                                        clients.”</p>
                                    <div class="small-card-img ml-3">
                                        <img src="assets/img/client/3.jpg" alt="" width="80px"
                                            class="rounded-circle img-fluid">
                                    </div>
                                </div>
                                <div class="position-absolute hero-animated-card-3">
                                    <img src="assets/img/Shape-1.png" alt="shape" width="40px" height="90px">
                                </div>
                                <div
                                    class="position-absolute p-4 w-75 rounded-custom d-flex secondary-bg hero-animated-card-2">
                                    <p class="gr-text-11 mb-0 text-white">“Ensuring the best return on investment for
                                        business the best return”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--pricing section start-->

                <!-- <section id="pricing" class="pricing-section ptb-100 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-lg-8">
                                <div class="section-heading text-center mb-4">
                                    <h2>Our Flexible Price</h2>
                                    <p>
                                        Professional hosting at an affordable price. Distinctively recaptiualize
                                        principle-centered
                                        core competencies through client-centered
                                        core competencies.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-md-center justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="text-center bg-white single-pricing-pack mt-4">
                                    <div class="price-img pt-4">
                                        <img src="assets/img/priching-img-1.png" alt="price" width="120"
                                            class="img-fluid">
                                    </div>
                                    <div class="py-4 border-0 pricing-header">
                                        <div class="price text-center mb-0 monthly-price color-secondary"
                                            style="display: block;">$19<span>.99</span></div>
                                        <div class="price text-center mb-0 yearly-price color-secondary"
                                            style="display: none;">$69<span>.99</span></div>
                                    </div>
                                    <div class="price-name">
                                        <h5 class="mb-0">Standard</h5>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="list-unstyled mb-4 pricing-feature-list">
                                            <li><span>Limited</span> access for a month</li>
                                            <li><span>15</span> customize sub page</li>
                                            <li class="text-deem"><span>105</span> disk space</li>
                                            <li class="text-deem"><span>3</span> domain access</li>
                                            <li class="text-deem">24/7 phone support</li>
                                        </ul>
                                        <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3"
                                            target="_blank">Purchase now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="popular-price bg-white text-center single-pricing-pack mt-4">
                                    <div class="price-img pt-4">
                                        <img src="assets/img/priching-img-2.png" alt="price" width="120"
                                            class="img-fluid">
                                    </div>
                                    <div class="py-4 border-0 pricing-header">
                                        <div class="price text-center mb-0 monthly-price color-secondary"
                                            style="display: block;">$49<span>.99</span></div>
                                        <div class="price text-center mb-0 yearly-price color-secondary"
                                            style="display: none;">$159<span>.99</span></div>
                                    </div>
                                    <div class="price-name">
                                        <h5 class="mb-0">Premium</h5>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="list-unstyled mb-4 pricing-feature-list">
                                            <li><span>Unlimited</span> access for a month</li>
                                            <li><span>25</span> customize sub page</li>
                                            <li><span>150</span> disk space</li>
                                            <li class="text-deem"><span>5</span> domain access</li>
                                            <li class="text-deem">24/7 phone support</li>
                                        </ul>
                                        <a href="#" class="btn btn-brand-02 btn-rounded mb-3" target="_blank">Purchase
                                            now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-8">
                                <div class="text-center bg-white single-pricing-pack mt-4">
                                    <div class="price-img pt-4">
                                        <img src="assets/img/priching-img-3.png" alt="price" width="120"
                                            class="img-fluid">
                                    </div>
                                    <div class="py-4 border-0 pricing-header">
                                        <div class="price text-center mb-0 monthly-price color-secondary"
                                            style="display: block;">$69<span>.99</span></div>
                                        <div class="price text-center mb-0 yearly-price color-secondary"
                                            style="display: none;">$259<span>.99</span></div>
                                    </div>
                                    <div class="price-name">
                                        <h5 class="mb-0">Unlimited</h5>
                                    </div>
                                    <div class="pricing-content">
                                        <ul class="list-unstyled mb-4 pricing-feature-list">
                                            <li><span>Limited</span> access for a month</li>
                                            <li><span>15</span> customize sub page</li>
                                            <li><span>120</span> disk space</li>
                                            <li><span>5</span> domain access</li>
                                            <li>24/7 phone support</li>
                                        </ul>
                                        <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3"
                                            target="_blank">Purchase now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

            </div>

        </div>
    </section>
    <!--hero section end-->



    <!-- start pricing carousal  -->
    <style>
    .pricing-table {
        overflow: hidden;
    }

    div#carouselExampleControls {
        margin: 0 12rem;
    }

    div#carouselExampleControls button.carousel-control-prev {
        width: 3%;
        height: 6%;
        background: #13D3B5;
        margin: auto;
        border: none;
        opacity: 1;
    }

    div#carouselExampleControls button.carousel-control-next {
        width: 3%;
        height: 6%;
        background: #13D3B5;
        margin: auto;
        border: none;
        opacity: 1;
    }

    .table-first-slide {
        justify-content: center;
        padding: 40px;
    }

    .table-second-slide {
        justify-content: center;
        padding: 31px 0px;
    }

    @media (min-width: 992px) {
        .carousel-item .col-lg-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
    }

    /* For tablets */
    @media (max-width: 991.98px) {

        .carousel-item .col-lg-4,
        .carousel-item .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    /* For mobile devices */
    @media (max-width: 575.98px) {

        .carousel-item .col-lg-4,
        .carousel-item .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        div#carouselExampleControls {
            margin: auto;
        }

        .table-first-slide {
            justify-content: center;
            padding: 20px;
        }

        .table-second-slide {
            justify-content: center;
            padding: 20px;
        }
    }
    </style>

    <!-- start section two -->
    <div class="continer pricing-table">

        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center mb-4">
                    <h2 style="font-weight: 700;padding: 20px;">Our Flexible Price</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, repellat explicabo magnam
                        nostrum pariatur aut,<br>
                        incidunt veniam ipsa odit dolor earum expedita officiis dolores, ullam quis minima mollitia eius
                        molestias. Fugiat,<br>
                        eos reprehenderit! Nisi quas aspernatur temporibus
                    </p>
                </div>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row table-first-slide">
                        <div class="col-lg-4 col-sm-12">
                            <!-- Content for the first slide -->
                            <div class="text-center bg-white single-pricing-pack mt-4">
                                <div class="price-img pt-4">
                                    <img src="assets/img/Pricing-icon-1.png" alt="price" width="90" class="img-fluid">
                                </div>
                                <div class="py-4 border-0 pricing-header">
                                    <div class="price text-center mb-0 monthly-price color-secondary"
                                        style="display: block; color:#000 !Important;">$19<sub>.99</sub></div>
                                    <div class="price text-center mb-0 yearly-price color-secondary"
                                        style="display: none;">
                                        $69<span>.99</span></div>
                                </div>
                                <div class="price-name">
                                    <h5 class="mb-0">Standard</h5>
                                </div>
                                <div class="pricing-content">
                                    <ul class="list-unstyled mb-4 pricing-feature-list">
                                        <li><span>Limited</span> access for a month</li>
                                        <li><span>15</span> customize sub page</li>
                                        <li><span>120</span> disk space</li>
                                        <li><span>5</span> domain access</li>
                                        <li>24/7 phone support</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3"
                                        target="_blank">Purchase
                                        now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <!-- Content for the second slide -->
                            <div class="popular-price bg-white text-center single-pricing-pack mt-4">
                                <div class="price-img pt-4">
                                    <img src="assets/img/Pricing-icon-2.png" alt="price" width="90" class="img-fluid">
                                </div>
                                <div class="py-4 border-0 pricing-header">
                                    <div class="price text-center mb-0 monthly-price"
                                        style="display: block; color:#000 !Important;">$20<span>.99</span></div>
                                    <div class="price text-center mb-0 yearly-price color-secondary"
                                        style="display: none;">
                                        $159<span>.99</span></div>
                                </div>
                                <div class="price-name">
                                    <h5 class="mb-0">Premium</h5>
                                </div>
                                <div class="pricing-content">
                                    <ul class="list-unstyled mb-4 pricing-feature-list">
                                        <li><span>Unlimited</span> access for a month</li>
                                        <li><span>25</span> customize sub page</li>
                                        <li><span>120</span> disk space</li>
                                        <li><span>5</span> domain access</li>
                                        <li>24/7 phone support</li>
                                    </ul>
                                    <a href="#" class="btn btn-brand-02 btn-rounded mb-3" target="_blank">Purchase
                                        now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="text-center bg-white single-pricing-pack mt-4">
                                <div class="price-img pt-4">
                                    <img src="assets/img/Pricing-icon-3.png" alt="price" width="80" class="img-fluid">
                                </div>
                                <div class="py-4 border-0 pricing-header">
                                    <div class="price text-center mb-0 monthly-price color-secondary"
                                        style="display: block;  color:#000 !Important;">$21<span>.99</span></div>
                                    <div class="price text-center mb-0 yearly-price color-secondary"
                                        style="display: none;">
                                        $259<span>.99</span></div>
                                </div>
                                <div class="price-name">
                                    <h5 class="mb-0">Unlimited</h5>
                                </div>
                                <div class="pricing-content">
                                    <ul class="list-unstyled mb-4 pricing-feature-list">
                                        <li><span>Limited</span> access for a month</li>
                                        <li><span>15</span> customize sub page</li>
                                        <li><span>120</span> disk space</li>
                                        <li><span>5</span> domain access</li>
                                        <li>24/7 phone support</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3"
                                        target="_blank">Purchase
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row table-second-slide">
                        <div class="col-lg-4 col-sm-12">
                            <!-- Content for the third slide -->
                            <div class="text-center bg-white single-pricing-pack mt-4">
                                <div class="price-img pt-4">
                                    <img src="assets/img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                                </div>
                                <div class="py-4 border-0 pricing-header">
                                    <div class="price text-center mb-0 monthly-price color-secondary"
                                        style="display: block;  color:#000 !Important;">$22<span>.99</span></div>
                                    <div class="price text-center mb-0 yearly-price color-secondary"
                                        style="display: none;">
                                        $259<span>.99</span></div>
                                </div>
                                <div class="price-name">
                                    <h5 class="mb-0">Unlimited</h5>
                                </div>
                                <div class="pricing-content">
                                    <ul class="list-unstyled mb-4 pricing-feature-list">
                                        <li><span>Limited</span> access for a month</li>
                                        <li><span>15</span> customize sub page</li>
                                        <li><span>120</span> disk space</li>
                                        <li><span>5</span> domain access</li>
                                        <li>24/7 phone support</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3"
                                        target="_blank">Purchase
                                        now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <!-- Content for the forth slide -->
                            <div class="text-center bg-white single-pricing-pack mt-4">
                                <div class="price-img pt-4">
                                    <img src="assets/img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                                </div>
                                <div class="py-4 border-0 pricing-header">
                                    <div class="price text-center mb-0 monthly-price color-secondary"
                                        style="display: block;  color:#000 !Important;">$23<span>.99</span></div>
                                    <div class="price text-center mb-0 yearly-price color-secondary"
                                        style="display: none;">
                                        $259<span>.99</span></div>
                                </div>
                                <div class="price-name">
                                    <h5 class="mb-0">Unlimited</h5>
                                </div>
                                <div class="pricing-content">
                                    <ul class="list-unstyled mb-4 pricing-feature-list">
                                        <li><span>Limited</span> access for a month</li>
                                        <li><span>15</span> customize sub page</li>
                                        <li><span>120</span> disk space</li>
                                        <li><span>5</span> domain access</li>
                                        <li>24/7 phone support</li>
                                    </ul>
                                    <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3"
                                        target="_blank">Purchase
                                        now</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6 d-none d-md-block"> -->
                        <!-- Content for the sixth slide -->
                        <!-- </div> -->
                    </div>
                </div>
                <!-- Add more carousel-items as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

    <!-- End section two -->

    <!-- start section three -->
    <section class="promo-block ptb-60 mt-5 mb-5" style="background-color: #f5f6fa;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="promo-content-wrap">
                        <h6 style="font-weight: 600; font-size: 16px; color: #000;">OUR QUALITY SERVICES</h6>
                        <h2 style="color: #000; font-size: 28px; font-weight: 700; line-height: 1.5em;">Managing Social
                            Media<br>
                            for Your Business</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                            industry. Lorem Ipsum has been the industry's standard dummy text<br>
                            ever since 1500s. </p>
                    </div>
                    <div class="action-btns mt-3">
                        <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Watch
                            Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                                <div class="card-body">
                                    <div class="pb-2">
                                        <span class="fa-solid fa-lightbulb icon-size-md color-secondary"></span>
                                    </div>
                                    <div class="pt-2 pb-3">
                                        <h5>Modular</h5>
                                        <p class="mb-0">All components are built to be used in combination.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                                <div class="card-body">
                                    <div class="pb-2">
                                        <span
                                            class="fa-solid fa-arrow-up-right-dots icon-size-md color-secondary"></span>
                                    </div>
                                    <div class="pt-2 pb-3">
                                        <h5>Responsive</h5>
                                        <p class="mb-0">Quick is optimized to work for most devices.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                                <div class="card-body">
                                    <div class="pb-2">
                                        <span class="fa-solid fa-hand-holding-hand icon-size-md color-secondary"></span>
                                    </div>
                                    <div class="pt-2 pb-3">
                                        <h5>Scalable</h5>
                                        <p class="mb-0">Remain consistent while developing new features.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                                <div class="card-body">
                                    <div class="pb-2">
                                        <span class="fa-solid fa-tower-cell icon-size-md color-secondary"></span>
                                    </div>
                                    <div class="pt-2 pb-3">
                                        <h5>Customizable</h5>
                                        <p class="mb-0">Change a few variables and the whole theme adapts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start section three -->
    <!-- start section four -->
    <section id="about" class="about-new-section ptb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 pr-lg-5 order-md-1 order-lg-0">
                    <div class="image-overlap">
                        <div class="image-overlap-item">
                            <img src="assets/img/section-img-1.png" alt="about"
                                class="img-fluid rounded-custom shadow-sm">
                            <div class="position-absolute dot-shape dot-shape-2">
                                <img src="assets/img/dot-shape.png" alt="appdash">
                            </div>
                        </div>
                        <div class="image-overlap-item">
                            <img src="assets/img/section-img-2.png" alt="about"
                                class="img-fluid rounded-custom shadow-lg">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 mb-5 mb-md-5 mb-lg-0">
                    <div class="about-content-wrap">
                        <h6 class="text-uppercase color-#000 mb-1" style="font-size: 16px; font-weight: 600;">About our
                            Apdash</h6>
                        <h2 style="font-size: 28px; font-weight: 700;">We Provide Web Design with App Development</h2>
                        <p>Assertively impact highly efficient data before fully researched services. Globally fashion
                            24/365 e-services and parallel paradigms. Monotonectally cultivate unique testing procedures
                            after frictionless vortals. </p>
                        <p>Dynamically pontificate error-free infrastructures vis-a-vis performance based growth
                            strategies. Globally mesh rather than cross functional customer service. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section four -->

    <!-- start section five -->
    <style>
    /* .hover-img-one img.mb-4:hover {
        content: url("assets/img/white-1.png");
        width: 100%;
        max-width: 85px;
    } */
    .promo-one-single:hover img.mb-4.hover-one {
        content: url("assets/img/white-1.png");
    }

    .promo-one-single:hover img.mb-4.hover-two {
        content: url("assets/img/white-2.png");
    }

    .promo-one-single:hover img.mb-4.hover-three {
        content: url("assets/img/white-3.png");
    }
    </style>
    <section class="promo-block ptb-60">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="promo-one-single rounded p-5 my-3 my-md-3 my-lg-0 shadow-lg text-center">
                        <img src="assets/img/Green-icon-1.png" alt="promo" class="mb-4 hover-one" width="85">
                        <h5>Advertising Agency</h5>
                        <p class="mb-0">Intrinsicly create 2.0 testing procedures rather than interdependent
                            schemas. Quickly.</p>
                        <a href="#" class="icon-link accent-bg"><span class="fa-solid fa-angles-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="promo-one-single rounded p-5 my-3 my-md-3 my-lg-0 shadow-lg text-center">
                        <img src="assets/img/Green-icon-2.png" alt="promo" class="mb-4 hover-two" width="85">
                        <h5>Creative Business</h5>
                        <p class="mb-0">Conveniently myocardinate efficient opportunities rather than
                            distributed catalysts for change.</p>
                        <a href="#" class="icon-link accent-bg"><span class="fa-solid fa-angles-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="promo-one-single rounded p-5 my-3 my-md-3 my-lg-0 shadow-lg text-center">
                        <img src="assets/img/Green-icon-3.png" alt="promo" class="mb-4 hover-three" width="85">
                        <h5>Total SEO Services</h5>
                        <p class="mb-0">Quickly expedite cross-media information rather than open-source
                            metrics maintain.</p>
                        <a href="#" class="icon-link accent-bg"><span class="fa-solid fa-angles-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section five -->

    <!-- start section six -->
    <section id="about" class="about-new-section pt-40 pb-40 mb-5">
        <style>
        .two-content-wrap {
            box-shadow: 0px 0px 5px 1px #dbdbdb;
            padding: 26px;
            border-right: 4px solid #13D3B5;
        }
        </style>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 mb-6 mb-md-6 mb-lg-0">
                    <div class="two-content-wrap">
                        <div class="col-md-2 col-lg-2 pt-5"><img src="assets/img/24-7-Support.png" alt="" width="50px;"
                                height="50px;"></div>
                        <div class="col-md-10 col-lg-10 p-0 pb-3">
                            <h2 style="font-size: 28px; font-weight: 700;">24/7 <br>support</span></h2>
                        </div>
                        <p>Assertively impact highly efficient data before fully researched services. Globally fashion
                            24/365 e-services and parallel paradigms. Monotonectally cultivate unique testing procedures
                            after frictionless vortals. </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 mb-6 mb-md-6 mb-lg-0 my-0">
                    <div class="two-content-wrap">
                        <div class="col-md-2 col-lg-2 pt-5"><img src="assets/img/30-Day-Money-back-Guarantee.png" alt=""
                                width="50px;" height="50px;"></div>
                        <div class="col-md-10 col-lg-10 p-0 pb-3">
                            <h2 style="font-size: 28px; font-weight: 700;">30-Day Mony-back <br>Guarantee</span></h2>
                        </div>
                        <p>Assertively impact highly efficient data before fully researched services. Globally fashion
                            24/365 e-services and parallel paradigms. Monotonectally cultivate unique testing procedures
                            after frictionless vortals. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="action-btns mt-3" style="text-align: center;">
            <a href="#" class="btn btn-brand-01 btn-rounded mr-3 mt-5" style="text-algin: center;">Download Now!</a>
        </div>
    </section>

    <!-- End section six -->
    <?php 
      include("include/footer.php"); 
    ?>
    <!--------------------------------------------------------- -->


    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>