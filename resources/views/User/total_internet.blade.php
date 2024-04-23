@extends('User.Layouts.layout')

@section('title', 'TTB')



@section('content')

        <!--hero section start-->

        <section class="position-relative banner-internet bg-image pt-100" image-overlay="1">
            <div class="background-image-wraper bg-position-1" style="background: url('assets/img/hero-new-bg.svg'); opacity: 1;"></div>
            <div class="container banner-img">
                <div class="row align-items-center justify-content-between justify-content-sm-center">
                    <div class="col-sm-12 col-md-10 col-lg-6">
                        <div class="section-heading py-5">
                            <h1 class="font-weight-bold">Creative Way to Showcase Your App</h1>
                            <p>Start working with a company that can provide everything you need to generate awareness, drive traffic, connect. Efficiently transform granular value with client-focused content. Energistically redefine the market.</p>
                            <div class="action-btns mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <div class="download-text text-left">
                                                <small>Download Now</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 text-center col-lg-5">
                        <div class="img-wrap">
                            <img src="assets/img/app-hand-top.png" alt="shape" class="img-fluid bnr-img">
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--End hero section start-->


        <!--work process start-->
        <section id="process" class="work-process-section position-relative  ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Work Process</h2>
                            <p>
                                Professional hosting at an affordable price. Distinctively recaptiualize principle-centered core competencies through client-centered core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="work-process-wrap">
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-project-diagram color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Planning Idea</h5>
                                            <p>Holisticly architect sustainable meta-services for process-centric core competencies. Enthusiastically re-engineer best-of-breed outsourcing.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item right-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon ml-4">
                                            <i class="fas fa-puzzle-piece color-primary"></i>
                                        </div>
                                        <div class="process-content text-right">
                                            <h5>Developed Final Product</h5>
                                            <p>Monotonectally harness holistic web-readiness after multimedia based catalysts for change. Completely brand front-end systems before visionary.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape mb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-truck color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Deliver to Customer</h5>
                                            <p>Monotonectally plagiarize synergistic e-business for stand-alone communities. Professionally enhance visionary manufactured products progressive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="img-wrap">
                            <img src="assets/img/app-mobile-image-3.png" alt="features" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--work process end-->





@endsection