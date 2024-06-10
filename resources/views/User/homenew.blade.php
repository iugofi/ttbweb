@extends('User.Layouts.layout')

@section('title', 'Home')
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
                            <p class="mt-4 text-black">Cyber attacks can cause on average $1.5 billion to a company, with our advanced
                                AI system we can block the attack before it happens.</p>
                            <div class="bttn-box">
                                <a href="#" class="btn-home-now">Get Started Now </a>
                                <a href="#" class="btn-home-cnt ms-5">Contact Us</a>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            {{-- <img src="{{ asset('assets/home-two-img/banner-one-home2.png') }}" alt=""
                            class="img-fluid" width="20%"> --}}
                        </div>
                    </div>
                </div>
            </section>


            <section class="section-home2-two">
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
                                </div>
                                <div class="photobanner"style="margin-left: 25em;">
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
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="section-home2-three">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6 bg-white-one">
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12">
                            <div class="icon-box flex p-3">
                                <div
                                    class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12 p-3 img-box">
                                    <img src="{{ asset('assets/home-two-img/feature_box_1_1.svg') }}" alt=""
                                        class="img-fluid" width="90px">
                                </div>
                                <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 md:col-span-12 col-span-12">
                                    <h3 class="mt-1">Block to all hackers </h3>
                                    <p class="mt-2">Cybersecurity refers to the practice of protecting computer systems,
                                        networks,
                                        devices</p>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12 border-box">
                            <div class="icon-box flex p-3">
                                <div
                                    class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12 p-3 img-box">
                                    <img src="{{ asset('assets/home-two-img/feature_box_1_2.svg') }}" alt=""
                                        class="img-fluid" width="90px">
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
                                <div
                                    class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12 p-3 img-box">
                                    <img src="{{ asset('assets/home-two-img/feature_box_1_3.svg') }}" alt=""
                                        class="img-fluid" width="90px">
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

            <section class="section-home2-four">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <img src="{{ asset('assets/home-two-img/About-img-2.png') }}" alt="" class="img-fluid"
                                width="90%">
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12 ">
                            <span>ABOUT US</span>
                            <h2 class="mt-4">Identifying And Responding To Emerging Risks</h2>
                            <p class="mt-3 mb-5">Cybersecurity refers to the practice of protecting computer systems,
                                networks, devices, and
                                data from unauthorized access, cyberattacks, theft, or damage. It encompasses a range of
                                technologies, processes. and practices designed to safeguard digital assets and ensure </p>
                            <ul class="icn-list">
                                <li><i class="far fa-edit"></i>High Quality Service</li>
                                <li><i class="far fa-edit"></i>Website Security Services</li>
                                <li><i class="far fa-edit"></i>Effective Protection</li>
                                <li><i class="far fa-edit"></i>Security Management</li>
                                <li><i class="far fa-edit"></i>Database Security</li>
                            </ul>

                            <a href="#" class="mt-5">Discover More</a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section-home2-five">
                <div class="container imgcon-box">
                    <div class="grid grid-cols-12 ">
                        <div class="col-span-12 text-center pb-5">
                            <span>OUR SERVICES</span>
                            <h2 class="mt-4">We Provide Experts Cyber <br> Security Services.</h2>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_1.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_2.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_3.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_4.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_5.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_6.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_7.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-6 col-span-12 img-boxx">
                            <img src="{{ asset('assets/home-two-img/service_3_8.svg') }}" alt=""
                                class="img-fluid" width="20%">
                            <h3 class="mt-2">Cyber Security</h3>
                            <p class="mt-2 mb-3">Building a cybersecurity culture within organizations is essential to
                                promoting security.</p>
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-home2-six">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <span class="ms-2 mt-5">WHY CHOOSE US</span>
                            <h2 class="mt-4 ms-2">The Perfect Solution For Application Security</h2>
                            <p class="mt-3 mb-5 ms-2">As technology continues to evolve, the future of cybersecurity will
                                likely
                                be shaped by emerging trends such the adoption cloud computing, the proliferation of
                                connected devices.</p>
                            <div class="flex">
                                <div class="icon-txt">
                                    <i class="fa-regular fa-square-check"></i><span>Your Files are Protected</span>
                                </div>
                                <div class="icon-txt">
                                    <i class="fa-regular fa-square-check"></i><span>Your Files are Protected</span>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="icon-txt">
                                    <i class="fa-regular fa-square-check"></i><span>Your Files are Protected</span>
                                </div>
                                <div class="icon-txt">
                                    <i class="fa-regular fa-square-check"></i><span>Your Files are Protected</span>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="icon-txt">
                                    <i class="fa-regular fa-square-check"></i><span>Your Files are Protected</span>
                                </div>
                                <div class="icon-txt">
                                    <i class="fa-regular fa-square-check"></i><span>Your Files are Protected</span>
                                </div>
                            </div>

                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12 ">
                            <img src="{{ asset('assets/home-two-img/why-choose-us.png') }}" alt=""
                                class="img-fluid" width="90%">

                        </div>
                    </div>
                </div>
            </section>

            <section class="home2-seven-pricing">
                <div class="container pricing-bxx">
                    <div class="grid grid-cols-12 gap-6 justify-center mb-[3rem]">
                        <div class="xxl:col-span-2 col-span-12"></div>
                        <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                            <div class="container">
                                <div class="flex justify-center !mx-auto">
                                    <div class="">
                                        <h4 class="pt-5">SUBSCRIPTION PRICING</h4>
                                        <h5 class="text-center mb-5 mt-4"> Simple
                                            Pricing For Everyone </h5>
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
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0 price-box">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">BASIC</h6>
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
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$199</p>
                                                                    <p
                                                                        class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                        per month</p>
                                                                </div>
                                                            </div>
                                                            <ul
                                                                class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Storage
                                                                        Capacity<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">1Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Daily
                                                                        Updates<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Online
                                                                        Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span
                                                                        class="text-[#8c9097] dark:text-white/50">Visitors
                                                                        Monitoring<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">2 Free
                                                                        Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Money
                                                                        Back
                                                                        Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get
                                                                    Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 price-box">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">ADVANCED</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1" viewBox="0 0 168 168">
                                                                        <path fill="#845adf"
                                                                            d="M84 58.25a9.01 9.01 0 0 0-9 9v4a9 9 0 0 0 18 0v-4a9.01 9.01 0 0 0-9-9Zm5 13a5 5 0 0 1-10 0v-4a5 5 0 0 1 10 0Z" />
                                                                        <circle cx="2" cy="149.75" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#403161"
                                                                            d="M11 147.75H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z" />
                                                                        <circle cx="166" cy="149.75" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#845adf"
                                                                            d="M118.154 155.75h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 0 0 0-4h-8.94v-2H104a2 2 0 0 0 0-4zm-44-109a7 7 0 1 1 7-7 7.008 7.008 0 0 1-7 7zm0-10a3 3 0 1 0 3 3 3.003 3.003 0 0 0-3-3zm48 10a7 7 0 1 1 7-7 7.008 7.008 0 0 1-7 7zm0-10a3 3 0 1 0 3 3 3.003 3.003 0 0 0-3-3z" />
                                                                        <path fill="#403161"
                                                                            d="M114 82.25a5.008 5.008 0 0 0-4-4.899V46.455a6.932 6.932 0 0 1-4 0V77.25h-6.91a10.063 10.063 0 0 0-2.731-1.986 12.95 12.95 0 0 1-1.815 3.56A6.002 6.002 0 0 1 98 84.25v14h-2a6.994 6.994 0 0 0-12-4.89 6.994 6.994 0 0 0-12 4.89h-2v-14a6.002 6.002 0 0 1 3.456-5.426 12.95 12.95 0 0 1-1.815-3.56 10.063 10.063 0 0 0-2.731 1.986H62V46.455a6.932 6.932 0 0 1-4 0v30.896a5.008 5.008 0 0 0-4 4.899v16h-1a4.005 4.005 0 0 0-4 4v6a4.005 4.005 0 0 0 4 4h19a6.994 6.994 0 0 0 12 4.89 6.994 6.994 0 0 0 12-4.89h19a4.005 4.005 0 0 0 4-4v-6a4.005 4.005 0 0 0-4-4h-1Zm-56 0a1.001 1.001 0 0 1 1-1h7.472a9.906 9.906 0 0 0-.472 3v14h-8Zm14 26H53v-6h19Zm10 4a3 3 0 0 1-6 0v-14a3 3 0 0 1 6 0Zm10 0a3 3 0 0 1-6 0v-14a3 3 0 0 1 6 0Zm17-31a1.001 1.001 0 0 1 1 1v16h-8v-14a9.906 9.906 0 0 0-.472-3Zm6 21 .002 6H96v-6h19Z" />
                                                                        <path fill="#403161"
                                                                            d="M150.721 147.75H148v-5.5a4.005 4.005 0 0 0-4-4h-1v-4a4.005 4.005 0 0 0-4-4h-3v-88.5h10a2 2 0 0 0 0-4h-5v-10a4.005 4.005 0 0 0-4-4H31a4.005 4.005 0 0 0-4 4v10h-5a2 2 0 0 0 0 4h10v88.5h-3a4.005 4.005 0 0 0-4 4v4h-1a4.005 4.005 0 0 0-4 4v5.5h-2.721a2.017 2.017 0 1 0 0 4H150.72a2.017 2.017 0 1 0 0-4ZM31 37.75v-10h106v10h-22.295a6.932 6.932 0 0 1 0 4H124v88.5H44v-88.5h9.295a6.932 6.932 0 0 1 0-4Zm101 4v88.5h-4v-88.5Zm-92 0v88.5h-4v-88.5Zm-11 92.5h110v4H29Zm115 13.5H24v-5.5h120Z" />
                                                                        <path fill="#403161"
                                                                            d="M67 39.75a6.972 6.972 0 0 1-.295 2h34.59a6.932 6.932 0 0 1 0-4h-34.59a6.972 6.972 0 0 1 .295 2zm22.058-21a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm36-9a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm-64-6a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm86.359 16.5a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM9.76 43.75a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z" />
                                                                        <path fill="#845adf"
                                                                            d="m34.193 14.913 1.486-1.956-.939-.532-.954 2.19h-.032l-.969-2.174-.956.547 1.472 1.909v.032L31 14.631v1.064l2.316-.297v.031l-1.487 1.909.892.563 1.018-2.206h.031l.938 2.191.987-.564-1.502-1.877v-.032l2.361.282v-1.064l-2.361.313v-.031zM3.896 8.403 3.04 9.502l.513.325.587-1.271h.017l.541 1.262.568-.325-.865-1.081v-.018l1.36.162v-.612l-1.36.18v-.018l.856-1.126-.541-.307-.549 1.261h-.019L3.59 6.682l-.55.315.847 1.1v.018l-1.325-.171v.612l1.334-.171v.018zM159.058 47.963V46.92l-2.317.307v-.031l1.458-1.918-.921-.522-.936 2.148h-.031l-.951-2.133-.937.538 1.443 1.872v.031l-2.257-.292v1.043l2.272-.291v.031l-1.458 1.872.875.553.998-2.165h.03l.921 2.149.967-.552-1.473-1.842v-.031l2.317.276zM158.501 5.836l1.258-1.655-.794-.45-.808 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.026l-1.946-.251v.9l1.959-.252v.027l-1.258 1.615.755.477.861-1.867h.026l.795 1.853.834-.476-1.271-1.589v-.027l1.998.239v-.9l-1.998.264v-.026z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$499</p>
                                                                    <p
                                                                        class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                        per month</p>
                                                                </div>
                                                            </div>
                                                            <ul
                                                                class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Storage
                                                                        Capacity<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">5Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Daily
                                                                        Updates<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Online
                                                                        Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span
                                                                        class="text-[#8c9097] dark:text-white/50">Visitors
                                                                        Monitoring<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">10 Free
                                                                        Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Money
                                                                        Back
                                                                        Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get
                                                                    Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 ps-0 price-box
                                                    ">
                                                        <div class="p-6 pricing-offer overflow-hidden">
                                                            <span class="pricing-offer-details shadow">
                                                                <span class="font-semibold">POPULAR</span>
                                                            </span>
                                                            <h6 class="font-semibold text-center text-[1rem]">PREMIUM</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1" viewBox="0 0 168 168">
                                                                        <path fill="#845adf"
                                                                            d="M84 43.87a10 10 0 1 0-10-10 10.011 10.011 0 0 0 10 10Zm0-16a6 6 0 1 1-6 6 6.007 6.007 0 0 1 6-6Z" />
                                                                        <path fill="#403161"
                                                                            d="M39.405 89.93c2.384 2.883 3.825 3.958 5.2 3.94l21.04-1.557a6.076 6.076 0 0 0 2.588-.801l15.81-9.209 15.815 9.209a6.07 6.07 0 0 0 2.589.8l21.024 1.56.118-.005c2.36-.104 4.061-2.476 4.975-3.75.102-.141.182-.257.24-.33a3.781 3.781 0 0 0 1.065-3.601 3.383 3.383 0 0 0-2.613-2.188l-20.75-3.746a2.001 2.001 0 0 1-1.035-.525L98 72.51V54.156c1.612-1.265 6.7-5.02 20.359-13.665a5.704 5.704 0 0 0 1.055-8.758l-.122-.126a5.606 5.606 0 0 0-6.99-.914L96.181 40.745a14.078 14.078 0 0 1-5.965 5.65c1.111 0 2.385 0 3.889.002a1.997 1.997 0 0 0 1.058-.303l19.23-11.991a1.692 1.692 0 0 1 2.136.401 1.722 1.722 0 0 1-.31 2.608C98.303 48.452 94.79 51.607 94.65 51.736A2 2 0 0 0 94 53.21V71.87H74.07V53.211a2 2 0 0 0-.833-1.625c-.172-.123-4.393-3.141-21.475-14.346a1.739 1.739 0 0 1-.293-2.6 1.608 1.608 0 0 1 1.985-.288l18.814 11.741a1.996 1.996 0 0 0 1.044.304c1.825.013 3.291.022 4.531.027a14.073 14.073 0 0 1-5.678-5.11l-16.62-10.371a5.596 5.596 0 0 0-6.963.93 5.71 5.71 0 0 0 .986 8.71c13.01 8.535 18.59 12.344 20.502 13.67v18.279l-7.449 7.195a1.985 1.985 0 0 1-1.033.524l-20.751 3.747a3.572 3.572 0 0 0-2.712 2.149c-.516 1.638.703 3.092 1.162 3.64Zm22.893-5.742a5.978 5.978 0 0 0 3.101-1.584l6.973-6.735h23.347l6.973 6.735a5.99 5.99 0 0 0 3.103 1.585l19.57 3.525-.052.072c-1.091 1.523-1.643 1.977-1.87 2.074l-20.698-1.536a2.05 2.05 0 0 1-.875-.269l-16.054-9.346a3.759 3.759 0 0 0-1.746-.428 4.033 4.033 0 0 0-1.876.472l-15.973 9.302a2.054 2.054 0 0 1-.873.27l-20.506 1.52a13.116 13.116 0 0 1-2.081-2.137Z" />
                                                                        <path fill="#845adf"
                                                                            d="M104.78 116.06A160.279 160.279 0 0 0 84 114.87a160.279 160.279 0 0 0-20.78 1.19c-7.45 1.027-10.22 2.33-10.22 4.81s2.77 3.782 10.22 4.809a160.279 160.279 0 0 0 20.78 1.19 160.279 160.279 0 0 0 20.78-1.19c7.45-1.027 10.22-2.331 10.22-4.81s-2.77-3.782-10.22-4.81ZM84 122.87c-12.637 0-20.997-1.051-24.905-2 3.908-.95 12.268-2 24.905-2s20.997 1.05 24.905 2c-3.908.949-12.268 2-24.905 2Z" />
                                                                        <circle cx="2" cy="149.869" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#403161"
                                                                            d="M11 147.87H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z" />
                                                                        <circle cx="166" cy="149.869" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#845adf"
                                                                            d="M118.154 155.87h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 1 0 0-4h-8.94v-2H104a2 2 0 1 0 0-4z" />
                                                                        <path fill="#403161"
                                                                            d="M150.721 147.87H86v-14.008c14.696-.103 36.55-1.35 50.005-4.967v10.974H136a2 2 0 0 0 0 4h4a2 2 0 0 0 .005-4v-12.213c4.92-1.772 7.995-4.001 7.995-6.787 0-10.283-41.864-13-64-13s-64 2.717-64 13c0 2.787 3.078 5.017 8 6.788v12.212a2 2 0 0 0 0 4h4a2 2 0 0 0 0-4v-10.972c13.455 3.615 35.306 4.862 50 4.965v14.007H17.279a2.017 2.017 0 1 0 0 4H150.72a2.017 2.017 0 1 0 0-4zM40.725 126.715C26.984 124.303 24.037 121.49 24 120.87c.037-.62 2.984-3.433 16.725-5.846C52.3 112.99 67.668 111.869 84 111.869s31.7 1.12 43.275 3.154c13.74 2.413 16.687 5.225 16.725 5.846-.038.621-2.985 3.434-16.725 5.847C115.7 128.75 100.332 129.87 84 129.87s-31.7-1.12-43.275-3.153zm64.58-113.013a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm22.666 19.166a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM9 5.203a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm153.667 8.75a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM35.333 24.869a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z" />
                                                                        <path fill="#845adf"
                                                                            d="m8.498 50.126 1.487-1.955-.939-.532-.954 2.19H8.06l-.97-2.175-.955.548 1.471 1.909v.031l-2.301-.297v1.064l2.316-.297v.031l-1.486 1.908.892.564 1.017-2.206h.031l.939 2.19.986-.563-1.502-1.878v-.031l2.362.282v-1.064l-2.362.313v-.032zM69.829 3.861l-.857 1.099.514.324.586-1.27h.018l.54 1.261.568-.324-.865-1.082v-.018l1.361.163v-.613l-1.361.18v-.018l.856-1.126-.54-.306-.55 1.261h-.018l-.558-1.253-.551.316.848 1.099v.018l-1.325-.171v.613l1.334-.171v.018zM142.055 7.333V6.289l-2.317.307v-.031l1.458-1.918-.921-.521-.936 2.148h-.031l-.951-2.133-.937.537 1.443 1.872v.031l-2.257-.292v1.044l2.272-.291v.03l-1.458 1.872.875.553.998-2.164h.03l.921 2.148.967-.552-1.473-1.842v-.03l2.317.276zM151.396 50.164l1.258-1.655-.795-.45-.807 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.026l-1.946-.251v.9l1.959-.251v.026l-1.258 1.615.755.477.861-1.867h.026l.794 1.853.835-.476-1.271-1.589v-.026l1.998.238v-.9l-1.998.264v-.026z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="text-end ms-5">
                                                                    <p
                                                                        class="text-[1.5625rem] font-semibold mb-0 text-primary">
                                                                        $1,299</p>
                                                                    <p
                                                                        class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                        per month</p>
                                                                </div>
                                                            </div>
                                                            <ul
                                                                class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Storage
                                                                        Capacity<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">10Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Daily
                                                                        Updates<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Online
                                                                        Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span
                                                                        class="text-[#8c9097] dark:text-white/50">Visitors
                                                                        Monitoring<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">30 Free
                                                                        Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Money
                                                                        Back
                                                                        Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button"
                                                                    class="ti-btn bg-primary text-white">Get
                                                                    Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane !p-0 border-b-0 dark:border-defaultborder/10 full-box-brd hidden"
                                                id="pricing-yearly-pane" role="tabpanel">
                                                <div class="grid grid-cols-12">
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12  col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0 price-box">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">BASIC</h6>
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
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$1,499
                                                                    </p>
                                                                    <p
                                                                        class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                        per Year</p>
                                                                </div>
                                                            </div>
                                                            <ul
                                                                class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Storage
                                                                        Capacity<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">1Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Daily
                                                                        Updates<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Online
                                                                        Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span
                                                                        class="text-[#8c9097] dark:text-white/50">Visitors
                                                                        Monitoring<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">2 Free
                                                                        Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Money
                                                                        Back
                                                                        Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get
                                                                    Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 px-0 price-box">
                                                        <div class="p-6">
                                                            <h6 class="font-semibold text-center text-[1rem]">ADVANCED</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1" viewBox="0 0 168 168">
                                                                        <path fill="#845adf"
                                                                            d="M84 58.25a9.01 9.01 0 0 0-9 9v4a9 9 0 0 0 18 0v-4a9.01 9.01 0 0 0-9-9Zm5 13a5 5 0 0 1-10 0v-4a5 5 0 0 1 10 0Z" />
                                                                        <circle cx="2" cy="149.75" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#403161"
                                                                            d="M11 147.75H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z" />
                                                                        <circle cx="166" cy="149.75" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#845adf"
                                                                            d="M118.154 155.75h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 0 0 0-4h-8.94v-2H104a2 2 0 0 0 0-4zm-44-109a7 7 0 1 1 7-7 7.008 7.008 0 0 1-7 7zm0-10a3 3 0 1 0 3 3 3.003 3.003 0 0 0-3-3zm48 10a7 7 0 1 1 7-7 7.008 7.008 0 0 1-7 7zm0-10a3 3 0 1 0 3 3 3.003 3.003 0 0 0-3-3z" />
                                                                        <path fill="#403161"
                                                                            d="M114 82.25a5.008 5.008 0 0 0-4-4.899V46.455a6.932 6.932 0 0 1-4 0V77.25h-6.91a10.063 10.063 0 0 0-2.731-1.986 12.95 12.95 0 0 1-1.815 3.56A6.002 6.002 0 0 1 98 84.25v14h-2a6.994 6.994 0 0 0-12-4.89 6.994 6.994 0 0 0-12 4.89h-2v-14a6.002 6.002 0 0 1 3.456-5.426 12.95 12.95 0 0 1-1.815-3.56 10.063 10.063 0 0 0-2.731 1.986H62V46.455a6.932 6.932 0 0 1-4 0v30.896a5.008 5.008 0 0 0-4 4.899v16h-1a4.005 4.005 0 0 0-4 4v6a4.005 4.005 0 0 0 4 4h19a6.994 6.994 0 0 0 12 4.89 6.994 6.994 0 0 0 12-4.89h19a4.005 4.005 0 0 0 4-4v-6a4.005 4.005 0 0 0-4-4h-1Zm-56 0a1.001 1.001 0 0 1 1-1h7.472a9.906 9.906 0 0 0-.472 3v14h-8Zm14 26H53v-6h19Zm10 4a3 3 0 0 1-6 0v-14a3 3 0 0 1 6 0Zm10 0a3 3 0 0 1-6 0v-14a3 3 0 0 1 6 0Zm17-31a1.001 1.001 0 0 1 1 1v16h-8v-14a9.906 9.906 0 0 0-.472-3Zm6 21 .002 6H96v-6h19Z" />
                                                                        <path fill="#403161"
                                                                            d="M150.721 147.75H148v-5.5a4.005 4.005 0 0 0-4-4h-1v-4a4.005 4.005 0 0 0-4-4h-3v-88.5h10a2 2 0 0 0 0-4h-5v-10a4.005 4.005 0 0 0-4-4H31a4.005 4.005 0 0 0-4 4v10h-5a2 2 0 0 0 0 4h10v88.5h-3a4.005 4.005 0 0 0-4 4v4h-1a4.005 4.005 0 0 0-4 4v5.5h-2.721a2.017 2.017 0 1 0 0 4H150.72a2.017 2.017 0 1 0 0-4ZM31 37.75v-10h106v10h-22.295a6.932 6.932 0 0 1 0 4H124v88.5H44v-88.5h9.295a6.932 6.932 0 0 1 0-4Zm101 4v88.5h-4v-88.5Zm-92 0v88.5h-4v-88.5Zm-11 92.5h110v4H29Zm115 13.5H24v-5.5h120Z" />
                                                                        <path fill="#403161"
                                                                            d="M67 39.75a6.972 6.972 0 0 1-.295 2h34.59a6.932 6.932 0 0 1 0-4h-34.59a6.972 6.972 0 0 1 .295 2zm22.058-21a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm36-9a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm-64-6a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm86.359 16.5a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM9.76 43.75a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z" />
                                                                        <path fill="#845adf"
                                                                            d="m34.193 14.913 1.486-1.956-.939-.532-.954 2.19h-.032l-.969-2.174-.956.547 1.472 1.909v.032L31 14.631v1.064l2.316-.297v.031l-1.487 1.909.892.563 1.018-2.206h.031l.938 2.191.987-.564-1.502-1.877v-.032l2.361.282v-1.064l-2.361.313v-.031zM3.896 8.403 3.04 9.502l.513.325.587-1.271h.017l.541 1.262.568-.325-.865-1.081v-.018l1.36.162v-.612l-1.36.18v-.018l.856-1.126-.541-.307-.549 1.261h-.019L3.59 6.682l-.55.315.847 1.1v.018l-1.325-.171v.612l1.334-.171v.018zM159.058 47.963V46.92l-2.317.307v-.031l1.458-1.918-.921-.522-.936 2.148h-.031l-.951-2.133-.937.538 1.443 1.872v.031l-2.257-.292v1.043l2.272-.291v.031l-1.458 1.872.875.553.998-2.165h.03l.921 2.149.967-.552-1.473-1.842v-.031l2.317.276zM158.501 5.836l1.258-1.655-.794-.45-.808 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.026l-1.946-.251v.9l1.959-.252v.027l-1.258 1.615.755.477.861-1.867h.026l.795 1.853.834-.476-1.271-1.589v-.027l1.998.239v-.9l-1.998.264v-.026z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="text-end ms-5">
                                                                    <p class="text-[1.5625rem] font-semibold mb-0">$5,999
                                                                    </p>
                                                                    <p
                                                                        class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                        per Year</p>
                                                                </div>
                                                            </div>
                                                            <ul
                                                                class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Storage
                                                                        Capacity<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">5Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Daily
                                                                        Updates<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Online
                                                                        Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span
                                                                        class="text-[#8c9097] dark:text-white/50">Visitors
                                                                        Monitoring<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">10 Free
                                                                        Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Money
                                                                        Back
                                                                        Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button" class="ti-btn ti-btn-primary">Get
                                                                    Started</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 ps-0 price-box">
                                                        <div class="p-6 pricing-offer overflow-hidden">
                                                            <span class="pricing-offer-details shadow">
                                                                <span class="font-semibold">POPULAR</span>
                                                            </span>
                                                            <h6 class="font-semibold text-center text-[1rem]">PREMIUM</h6>
                                                            <div class="py-4 flex items-center justify-center">
                                                                <div class="pricing-svg1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        data-name="Layer 1" viewBox="0 0 168 168">
                                                                        <path fill="#845adf"
                                                                            d="M84 43.87a10 10 0 1 0-10-10 10.011 10.011 0 0 0 10 10Zm0-16a6 6 0 1 1-6 6 6.007 6.007 0 0 1 6-6Z" />
                                                                        <path fill="#403161"
                                                                            d="M39.405 89.93c2.384 2.883 3.825 3.958 5.2 3.94l21.04-1.557a6.076 6.076 0 0 0 2.588-.801l15.81-9.209 15.815 9.209a6.07 6.07 0 0 0 2.589.8l21.024 1.56.118-.005c2.36-.104 4.061-2.476 4.975-3.75.102-.141.182-.257.24-.33a3.781 3.781 0 0 0 1.065-3.601 3.383 3.383 0 0 0-2.613-2.188l-20.75-3.746a2.001 2.001 0 0 1-1.035-.525L98 72.51V54.156c1.612-1.265 6.7-5.02 20.359-13.665a5.704 5.704 0 0 0 1.055-8.758l-.122-.126a5.606 5.606 0 0 0-6.99-.914L96.181 40.745a14.078 14.078 0 0 1-5.965 5.65c1.111 0 2.385 0 3.889.002a1.997 1.997 0 0 0 1.058-.303l19.23-11.991a1.692 1.692 0 0 1 2.136.401 1.722 1.722 0 0 1-.31 2.608C98.303 48.452 94.79 51.607 94.65 51.736A2 2 0 0 0 94 53.21V71.87H74.07V53.211a2 2 0 0 0-.833-1.625c-.172-.123-4.393-3.141-21.475-14.346a1.739 1.739 0 0 1-.293-2.6 1.608 1.608 0 0 1 1.985-.288l18.814 11.741a1.996 1.996 0 0 0 1.044.304c1.825.013 3.291.022 4.531.027a14.073 14.073 0 0 1-5.678-5.11l-16.62-10.371a5.596 5.596 0 0 0-6.963.93 5.71 5.71 0 0 0 .986 8.71c13.01 8.535 18.59 12.344 20.502 13.67v18.279l-7.449 7.195a1.985 1.985 0 0 1-1.033.524l-20.751 3.747a3.572 3.572 0 0 0-2.712 2.149c-.516 1.638.703 3.092 1.162 3.64Zm22.893-5.742a5.978 5.978 0 0 0 3.101-1.584l6.973-6.735h23.347l6.973 6.735a5.99 5.99 0 0 0 3.103 1.585l19.57 3.525-.052.072c-1.091 1.523-1.643 1.977-1.87 2.074l-20.698-1.536a2.05 2.05 0 0 1-.875-.269l-16.054-9.346a3.759 3.759 0 0 0-1.746-.428 4.033 4.033 0 0 0-1.876.472l-15.973 9.302a2.054 2.054 0 0 1-.873.27l-20.506 1.52a13.116 13.116 0 0 1-2.081-2.137Z" />
                                                                        <path fill="#845adf"
                                                                            d="M104.78 116.06A160.279 160.279 0 0 0 84 114.87a160.279 160.279 0 0 0-20.78 1.19c-7.45 1.027-10.22 2.33-10.22 4.81s2.77 3.782 10.22 4.809a160.279 160.279 0 0 0 20.78 1.19 160.279 160.279 0 0 0 20.78-1.19c7.45-1.027 10.22-2.331 10.22-4.81s-2.77-3.782-10.22-4.81ZM84 122.87c-12.637 0-20.997-1.051-24.905-2 3.908-.95 12.268-2 24.905-2s20.997 1.05 24.905 2c-3.908.949-12.268 2-24.905 2Z" />
                                                                        <circle cx="2" cy="149.869" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#403161"
                                                                            d="M11 147.87H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zm149 0h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z" />
                                                                        <circle cx="166" cy="149.869" r="2"
                                                                            fill="#403161" />
                                                                        <path fill="#845adf"
                                                                            d="M118.154 155.87h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm-60 0h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zm45.846 0H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 1 0 0-4h-8.94v-2H104a2 2 0 1 0 0-4z" />
                                                                        <path fill="#403161"
                                                                            d="M150.721 147.87H86v-14.008c14.696-.103 36.55-1.35 50.005-4.967v10.974H136a2 2 0 0 0 0 4h4a2 2 0 0 0 .005-4v-12.213c4.92-1.772 7.995-4.001 7.995-6.787 0-10.283-41.864-13-64-13s-64 2.717-64 13c0 2.787 3.078 5.017 8 6.788v12.212a2 2 0 0 0 0 4h4a2 2 0 0 0 0-4v-10.972c13.455 3.615 35.306 4.862 50 4.965v14.007H17.279a2.017 2.017 0 1 0 0 4H150.72a2.017 2.017 0 1 0 0-4zM40.725 126.715C26.984 124.303 24.037 121.49 24 120.87c.037-.62 2.984-3.433 16.725-5.846C52.3 112.99 67.668 111.869 84 111.869s31.7 1.12 43.275 3.154c13.74 2.413 16.687 5.225 16.725 5.846-.038.621-2.985 3.434-16.725 5.847C115.7 128.75 100.332 129.87 84 129.87s-31.7-1.12-43.275-3.153zm64.58-113.013a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zm22.666 19.166a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM9 5.203a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zm153.667 8.75a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM35.333 24.869a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z" />
                                                                        <path fill="#845adf"
                                                                            d="m8.498 50.126 1.487-1.955-.939-.532-.954 2.19H8.06l-.97-2.175-.955.548 1.471 1.909v.031l-2.301-.297v1.064l2.316-.297v.031l-1.486 1.908.892.564 1.017-2.206h.031l.939 2.19.986-.563-1.502-1.878v-.031l2.362.282v-1.064l-2.362.313v-.032zM69.829 3.861l-.857 1.099.514.324.586-1.27h.018l.54 1.261.568-.324-.865-1.082v-.018l1.361.163v-.613l-1.361.18v-.018l.856-1.126-.54-.306-.55 1.261h-.018l-.558-1.253-.551.316.848 1.099v.018l-1.325-.171v.613l1.334-.171v.018zM142.055 7.333V6.289l-2.317.307v-.031l1.458-1.918-.921-.521-.936 2.148h-.031l-.951-2.133-.937.537 1.443 1.872v.031l-2.257-.292v1.044l2.272-.291v.03l-1.458 1.872.875.553.998-2.164h.03l.921 2.148.967-.552-1.473-1.842v-.03l2.317.276zM151.396 50.164l1.258-1.655-.795-.45-.807 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.026l-1.946-.251v.9l1.959-.251v.026l-1.258 1.615.755.477.861-1.867h.026l.794 1.853.835-.476-1.271-1.589v-.026l1.998.238v-.9l-1.998.264v-.026z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="text-end ms-5">
                                                                    <p
                                                                        class="text-[1.5625rem] font-semibold mb-0 text-primary">
                                                                        $11,499</p>
                                                                    <p
                                                                        class="text-[#8c9097] dark:text-white/50 opacity-50 text-[.6875rem] font-semibold mb-0">
                                                                        per Year</p>
                                                                </div>
                                                            </div>
                                                            <ul
                                                                class="list-none text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Storage
                                                                        Capacity<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">10Tb</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Daily
                                                                        Updates<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">Unlimited</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Online
                                                                        Support</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span
                                                                        class="text-[#8c9097] dark:text-white/50">Visitors
                                                                        Monitoring<span
                                                                            class="badge bg-light text-defaulttextcolor ms-1">24/7</span></span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">30 Free
                                                                        Domains</span>
                                                                </li>
                                                                <li class="mb-4">
                                                                    <span class="text-[#8c9097] dark:text-white/50">Money
                                                                        Back
                                                                        Guarentee</span>
                                                                </li>
                                                            </ul>
                                                            <div class="grid">
                                                                <button type="button"
                                                                    class="ti-btn bg-primary text-white">Get
                                                                    Started</button>
                                                            </div>
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
                </div>
            </section>

            <section
                class="section section-home2-eight landing-testimonials bg-[#f9fafb] section-bg text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]"
                id="testimonials">
                <div class="container text-center">
                    <p class="mb-1"><span class="sp-test">TESTIMONIALS</span></p>
                    <h3 class="font-semibold mb-2">We never failed to reach expectations</h3>
                    <div>
                        <div class="xl:col-span-7 col-span-12">
                            <p class="mb-[3rem]">Some of
                                the reviews our clients gave which brings motivation to work for future projects.</p>
                        </div>
                    </div>
                    <div class="swiper pagination-dynamic text-start rtl:dirrtl">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Json Taylor</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    CEO OF NORJA</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>12 days ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Json
                                                        Taylor</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Melissa Blue</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    MANAGER CHO</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>7 days ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Melissa
                                                        Blue</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Kiara Advain</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    CEO OF EMPIRO</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>2 days ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Kiara
                                                        Advain</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Jhonson Smith</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    CHIEF SECRETARY MBIO</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>16 hrs ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Jhonson
                                                        Smith</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Dwayne Stort</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    CEO ARMEDILLO</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>22 days ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Dwayne
                                                        Stort</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Jasmine Kova</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    AGGENT AMIO</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>26 days ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Jasmine
                                                        Kova</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Dolph MR</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    CEO MR BRAND</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>1 month ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Dolph
                                                        MR</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Brenda Simpson</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    CEO AIBMO</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>1 month ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Brenda
                                                        Simpson</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide rtl:dir-rtl">
                                <div class="box testimonial-card">
                                    <div class="box-body">
                                        <div class="flex items-center mb-4">
                                            <span class="avatar avatar-md avatar-rounded me-4">
                                                <img src="assets/images/faces/10.jpg" alt="">
                                            </span>
                                            <div>
                                                <p class="mb-0 font-semibold text-[0.875rem]">Julia Sams</p>
                                                <p
                                                    class="mb-0 text-[0.625rem] font-semibold text-[#8c9097] dark:text-white/50">
                                                    CHIEF SECRETARY BHOL</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-[#8c9097] dark:text-white/50">- Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Earum autem quaerat distinctio --</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                <span class="text-warning block ms-1">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </span>
                                            </div>
                                            <div
                                                class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                <span>2 month ago</span>
                                                <span class="block font-normal text-[0.75rem] text-success"><i>Julia
                                                        Sams</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </section>

            <section class="section-home2-nine">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6 cnt-box"
                        style="background-image:url(/assets/home-two-img/contact-bg.jpg);">
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12 ">
                            <div class="flex">
                                <div class="icon-box">
                                    <i class="las la-headphones"></i>
                                </div>
                                <div>
                                    <span>Call For More Info</span>
                                    <h3><a href="tel:">(+123) 5859 459</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 md:col-span-12 col-span-12">
                            <h2>Let’s Request A Schedule For Free Consultation</h2>
                        </div>
                        <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-12 col-span-12">
                            <a href="#" class="ctc-us">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-home2-ten">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <span>ABOUT US</span>
                            <h2 class="mt-3">Innovate Business Solution For Startup Comapnies</h2>
                            <p class="mt-3 mb-5">Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Libero volutpat sed cras ornare.</p>
                            <ul class="icn-list">
                                <li><i class="far fa-edit"></i>Identify growth opportunities and expand market presence
                                </li>
                                <li><i class="far fa-edit"></i>Enhance operational efficiency and reduce waste</li>
                                <li><i class="far fa-edit"></i>Make informed decisions based on data-driven insights
                                <li>
                            </ul>
                            <a href="#" class="mt-5">VIEW CLIENT STORIES</a>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12 "
                            style="position:relative;">

                            <img class="img-bck" src="{{ asset('assets/home-two-img/about_5_1.png') }}" alt=""
                                class="img-fluid" width="80%">
                            <img class="img-anmt" src="{{ asset('assets/home-two-img/about_5_1sec.png') }}"
                                alt="" class="img-fluid" width="40%">
                        </div>
                    </div>
                </div>
            </section>





        </div>
    </div>


    <section class="section-app-down">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                    <span>TTB INTERNET SECURITY APP</span>
                    <h3 class="mt-3">Download Our App And Start Your Free Trail To Get Started Today!</h3>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                    <a href="#">
                        <img src="{{ asset('assets/home-two-img/store-icon.png') }}" alt=""
                            width="100%"></a>
                </div>
            </div>
        </div>
    </section>






@endsection
