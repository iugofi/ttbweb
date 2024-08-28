@extends('User.Layouts.layout')

@section('title', 'Endpoint Protection As')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')



    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start::End Point section one -->
        <div class="endpoint-protection" id="endpoint">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical" style="position: relative; top: 7rem;">
                                <h1 class="text-left font-semibold mb-2 text-[2rem]" style="color: #fff;">Limited Time
                                    Offer Flat 50% off - No<br>
                                    Hidden Chnages Hurry Up!!!</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] text-left dark-text"
                                    style="color: #fff;">Holisticly
                                    procrastinate mission-critical convergence with reliable customer service.
                                    <br>Assertively
                                    underwhelm idea-sharing for impactful solutions.
                                </div>
                                <div class="bnr-btn text-left">
                                    <a href="index.html" class="m-1 ti-btn ti-btn-primary-full bnr-btn-1"
                                        style="padding: 8px 34px;">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End::End Point section one -->

        <!-- Start::End Point section two -->

        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] "
            style="padding-top: 0px; padding-bottom: 0px; background-color:#12D2B3;">
            <div class="container main-banner-container">
                <div class="grid lg:grid-cols-12 md:grid-cols-12 sm:grid-cols-12 justify-center align-center tab-css">
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 pt-5 pb-3 lg:px-2 !text-start px-12 my-auto">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-4 endpoint-content"
                            style="display: flex; justify-content: center;">
                            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 col-span-12 inline-flex">
                                <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="width:90px; height:90px">
                                <div class="icon-txt ms-4 mr-[1.0rem]">
                                    <p class="text-white  text-sm py-5" style="color: #fff;">TTB Endpoint Security offers
                                        you complete online security solutions where you don’t need to compromise your<br>
                                        confidentiality. We protect you from unauthorized access, malware, viruses emerging
                                        threats in the modern<br>
                                        tech landscape. From your smartphone to the PC, you get end-to-end protection with a
                                        single product.<br>
                                        We serve a common user to professional enterprises with 24x7 hour expert services.
                                    </p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::End Point section two -->

        <!-- Start::End Point section three -->
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <div class="container endpoint-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img/What-do-TTB-Endpoint-Security-Services-offer-you.png') }}"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 pt-5 pb-0 lg:px-2 !text-start"
                        style="margin: 0 50px auto;">
                        <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">TTB
                            SERVICES</span>
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">What do TTB Endpoint Security<br> Services
                            offer you?</h4>
                        <hr style="width: 20%; height: 2px; background: #13d8aa; margin-bottom: 14px;">
                        <p class=" text-[1rem] text-[#8c9097] dark:text-white/50 mb-4 ">The endpoint security protection
                            from TTB is a unified approach to provide you with a secure
                            & seamless online experience. Here, you get real-time scanning, threat detection & alerts,
                            and multi-layer encryption. Now, shed light on other primary services that you avail from us:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::End Point section three -->

        <!-- Start::End Point section four -->
        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70">
            <div class="endpoint-slider">
                <div class="main-content">
                    <div class="container">
                        <div class="owl-carousel mycustom-test owl-theme">
                            <div class="item bg-white p-5 rounded-lg shadow-md">
                                <img src="{{ asset('assets/img/Enhanced-Firewall-1.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-black text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Enhanced Firewall</p>
                                <p class="mt-3 text-gray-600 text-center">The first line of defense that secures you
                                    from unauthorized access and unknown
                                    cyber threats.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md">
                                <img src="{{ asset('assets/img/Enhanced-Firewall-1.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-black text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Advanced Antivirus Solutions</p>
                                <p class="mt-3 text-gray-600 text-center">A digital barrier with real-time scanning
                                    filters and blocks malicious links, texts,
                                    nasty viruses, and URLs.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md">
                                <img src="{{ asset('assets/img/Centralized-Management-1.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-black text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Real-Time Scanning & Threat Detection</p>
                                <p class="mt-3 text-gray-600 text-center">Provides you with real-time threat alerts and
                                    scanning to aware you of suspicious activities
                                    & emerging menaces.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md">
                                <img src="{{ asset('assets/img/E-Support-Concierge-1.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-black text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Patch Management</p>
                                <p class="mt-3 text-gray-600 text-center">This borderline security keeps your device
                                    updated and fixes the vulnerabilities if occur before
                                    hackers exploit it. </p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md">
                                <img src="{{ asset('assets/img/Enhanced-Firewall-1.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-black text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Data Security Access Control</p>
                                <p class="mt-3 text-gray-600 text-center">Manages & authorizes the user permissions
                                    with Multifactor authentication to limit the access to sensitive
                                    data by blocking unauthorized access.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md">
                                <img src="{{ asset('assets/img/Enhanced-Firewall-1.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-black text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Centralized Management</p>
                                <p class="mt-3 text-gray-600 text-center">We provide you with central management &
                                    endpoint security considering setting, security policies, and monitoring
                                    compliance.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md">
                                <img src="{{ asset('assets/img/Enhanced-Firewall-1.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-black text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">E-Support Concierge</p>
                                <p class="mt-3 text-gray-600 text-center">We serve you 24x7 hours of security services
                                    and assistance regarding the products and services you buy from us.</p>
                            </div>
                        </div>
                    </div>

                    <!-- jQuery -->
                    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
                    <!-- Owl Carousel JS -->
                    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
                    <!-- Initialize Owl Carousel -->
                    <script>
                        $(document).ready(function() {
                            $('.mycustom-test').owlCarousel({
                                loop: true,
                                margin: 10,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    768: {
                                        items: 3
                                    },
                                    1024: {
                                        items: 4
                                    }
                                }
                            });
                        });
                    </script>


        </section>
        <!-- End::End Point section four -->

        <!-- Start::End Point section fifth -->

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] " id="features">
            <div class="container pt-5 pb-5 endpoint-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-6 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 md:col-span-12 col-span-12">
                                <div class="col-lg-7 col-md-12 col-sm-8 order-1 wow animate fadeInDown"
                                    data-wow-duration="1.5s" data-wow-delay="0.5s"
                                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s;">
                                    <div class="l-work-item"><img
                                            src="https://www.nighthawk-routerlogin.com/assets/img/Work-Img-1.png"
                                            alt="images">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-6 col-span-12">
                        <div class="text-content">
                            <p class=" text-[1rem] text-white dark:text-white/50 mb-4 ">Generally, endpoint security for
                                business or a single
                                user is defined as the set of practices and techniques to secure the devices from malicious
                                attacks and viruses.
                                This protection's primary goal is to secure user devices such as PCs, laptops, servers,
                                smartphones, tablets, and
                                virtual environments from malware, spyware, computer viruses, and online/offline
                                threats.<br><br>

                                Likewise, all this is possible if your corporate network endpoint security has core features
                                to compete with the modern surging threats. So, to understand these key points, take a look
                                at the following:
                            </p>
                            {{-- <div class="action-btns mt-4">
                                <a href="#" class="ti-btn bg-primary text-white"
                                    style="border: 2px solid #fff; padding: 8px 27px; font-weight: 600; border-radius: 0;">Read
                                    More</a>
                            </div> --}}
                        </div>
                    </div>


                </div>

                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12 mt-10">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">

                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-gears" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Device & Data Security</h6>
                                    <p class="card-text mb-4">Effective endpoint security services like TTB will ensure the complete security
                                        of your endpoint networks like PC, smartphones, etc., & confidential data by tracking, detecting, and
                                        using smart techniques and isolating the infected gadgets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">

                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-code" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Behavioral Analysis</h6>
                                    <p class="card-text mb-4">The smart endpoint solutions detect the behavior of applications and methods to
                                        detect oddities. It helps to analyze the latest spring-up cyber threats and hacking activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-shield" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Real-Time Scanning & Threat Detection </h6>
                                    <p class="card-text mb-4">The current-day cybersecurity systems such as TTB Endpoint security tools & support
                                        will serve you with innovative real-time scanning and threat detection services by finding and alerting
                                        you if there is any suspicious activity on your digital & social accounts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-photo-film" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Multi-Layer Protection</h6>
                                    <p class="card-text mb-4">The modern era security solutions include multi-layer protection that includes a
                                        Firewall, VPN Shield, TTB Antivirus, intrusion prevention, and more. Here, users are guided to use
                                        these services or our certified & expert team is here.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">

                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-gears" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Cost Savings/Effective</h6>
                                    <p class="card-text mb-4">This centralized management is a cost-effective fix to meet all your security needs.
                                        You get end-to-end security solutions under one umbrella that is TTB which has different plans that suit
                                        your pockets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">

                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-code" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Remote Management</h6>
                                    <p class="card-text mb-4">The present-time paid or free endpoint security services have smart remote management
                                        features. It assists you to set and manage your security tools on various connected devices using your
                                        smartphone or computer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-shield" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Advanced Security Controls & Threat Control</h6>
                                    <p class="card-text mb-4">The modernistic online protection addresses advanced threats, including zero-day exposures,
                                         targeted invasions, & insider menaces. Safety controls, like firewalls, App/Device control, and data loss
                                         prevention implement security policies and mitigate diverse security risks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-photo-film" style="font-size:40px;"></i>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Centralized Management Console</h6>
                                    <p class="card-text mb-4">Many endpoint security solutions offer centralized management consoles that simplify management
                                        by letting security policies, updates, and configurations be managed from one place, such as TTB Endpoint Security.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End::End Point section fifth -->
------------------------------

<section class="endpoint-section-three !bg-[#f9fafb] dark:!bg-black/10">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 text-center">
                <h2>Stay protected from threats- known and unknown!</h2>
                <p class="mt-3 mb-5">Most malware attacks can be recognized based on their past-behaviour, however,<br>
                    those with modified
                    codes
                    and language are difficult to track.</p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-6">
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 ">
                <h2 class="mt-3">25 Years OF EXPERIENCE</h2>

                <p class="mt-3 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores quaerat,
                    quia saepe
                    consequuntur, laudantium, cum at expedita eligendi perferendis amet fugiat? Assumenda numquam nisi
                    at, laborum eligendi necessitatibus est?</p>
                <p class="mt-3 mb-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores quaerat,
                    quia saepe
                    consequuntur laudantium, cum at expedita eligendi perferendis amet fugiat.</p>
            </div>
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 pt-5">
                <img src="https://www.nighthawk-routerlogin.com/assets/img/thread-section-four.png" alt="" class="img-fluid" width="90%">
            </div>
        </div>
    </div>
</section>

------------------------------
        {{-- Start::End Point faq section six --}}
        <section class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg dark:text-defaulttextcolor/70 text-[0.813rem]"
            id="faq">
            <div class="container text-center">
                {{-- <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                        class="landing-section-heading">F.A.Q</span></p> --}}
                <h3 class="lg:text-center font-semibold mb-2 text-[2rem]">Frequently Asked Question</h3>
                <div class="grid grid-cols-12 justify-center">
                    <div class="col-span-12">
                        <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-12 font-normal">Efficiently
                            productivate reliable paradigms before ubiquitous models. Continually utilize frictionless
                            <br>expertise whereas tactical relationships. Still have questions? Contact us
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 text-start">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-6 col-span-12">
                                <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                                    <img src="{{ asset('assets/img/Faq-images.png') }}" alt="" width="95%"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                    id="accordionFAQ2">
                                    <div class="hs-accordion-group">
                                        <div class="hs-accordion active bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-five">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-seven">
                                                General Terms &amp; Conditions (GTC)
                                                <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                            <div id="faq-collapse-seven"
                                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="faq-five">
                                                <div class="p-5">
                                                    <p
                                                        class="text-defaulttextcolor text-[0.9rem] dark:text-defaulttextcolor/70 ">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by
                                                        default, until the collapse plugin adds the appropriate classes that
                                                        we
                                                        use to style each element. These classes control the overall
                                                        appearance,
                                                        as well as the showing and hiding via CSS transitions. You can
                                                        modify
                                                        any of this with custom CSS or overriding our default variables.
                                                        It's
                                                        also worth noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-six">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-eight">
                                                Do I need to create an account to make an order?
                                                <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                            <div id="faq-collapse-eight"
                                                class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                aria-labelledby="faq-six">
                                                <div class="p-5">
                                                    <p
                                                        class="text-defaulttextcolor text-[0.9rem] dark:text-defaulttextcolor/70 ">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by
                                                        default, until the collapse plugin adds the appropriate classes that
                                                        we
                                                        use to style each element. These classes control the overall
                                                        appearance,
                                                        as well as the showing and hiding via CSS transitions. You can
                                                        modify
                                                        any of this with custom CSS or overriding our default variables.
                                                        It's
                                                        also worth noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-seven">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-nine">
                                                Where can I subscribe to your newsletter?
                                                <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                            <div id="faq-collapse-nine"
                                                class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                aria-labelledby="faq-seven">
                                                <div class="p-5">
                                                    <p
                                                        class="text-defaulttextcolor text-[0.9rem] dark:text-defaulttextcolor/70 ">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by
                                                        default, until the collapse plugin adds the appropriate classes that
                                                        we
                                                        use to style each element. These classes control the overall
                                                        appearance,
                                                        as well as the showing and hiding via CSS transitions. You can
                                                        modify
                                                        any of this with custom CSS or overriding our default variables.
                                                        It's
                                                        also worth noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-eight">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-ten">
                                                Where can in edit my address?
                                                <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                    <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                    width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                            <div id="faq-collapse-ten"
                                                class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                                aria-labelledby="faq-eight">
                                                <div class="p-5">
                                                    <p
                                                        class="text-defaulttextcolor text-[0.9rem] dark:text-defaulttextcolor/70 ">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by
                                                        default, until the collapse plugin adds the appropriate classes that
                                                        we
                                                        use to style each element. These classes control the overall
                                                        appearance,
                                                        as well as the showing and hiding via CSS transitions. You can
                                                        modify
                                                        any of this with custom CSS or overriding our default variables.
                                                        It's
                                                        also worth noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </p>
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
        </section>
        {{-- End::End Point faq section six --}}


        {{-- New testimonial html css start --}}

        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="faq" style="overflow: hidden; padding-bottom: 0rem; height: 420px;">
            <div class="container main-banner-container">
                <section class="testimonial-area">
                    <div class="container">
                        <div class="sec-title white-title">
                            <h4 class="text-center text-4xl font-bold mb-4 pb-4">What Client Say About Us?</h4>
                        </div>
                        <div class="back-img"></div>
                        <div class="testimonial-content owl-carousel owl-loaded owl-drag">
                            <!-- Single Testimonial -->

                            <!-- Add more testimonials as needed -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <!-- Repeat the above block for more testimonials -->

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2750px, 0px, 0px); transition: 1s; width: 11000px;">
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Josh at TTB called me to update my PC. He provided
                                                excellent
                                                service and walked me through the steps to complete a download. I feel
                                                confident
                                                that my PC
                                                is running optimally with the privacy and data protection that they offer.
                                                Great job
                                                and I highly recommend this company. Very secure &amp; easy to work with.
                                            </p>
                                            <div class="client-info">
                                                <div class="client-video">
                                                    <a href="#"><img
                                                            src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="client-details">
                                                    <h6><b>Rick Serafine</b></h6>

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Working with TTB is a pleasure .Very knowledgeable
                                                staff guide
                                                me through the necessary steps to protect my units. They remember to call
                                                and scan
                                                and update
                                                my units without being called or reminded. When I have experienced problems
                                                and
                                                issues my calls are quickly answered and resolved. Your staff is friendly,
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">The technicians were very knowledgeable and
                                                professional. They
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Always helpful. a bit hard to understand but always
                                                works thru
                                                it. Pricing is a bit confusing at times compared to year's past. Thanks.
                                            </p>
                                            <div class="client-info">
                                                <div class="client-video">
                                                    <a href="#"><img
                                                            src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="client-details">
                                                    <h6><b>Frank</b></h6>

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">I asked them to provide a new license for my TTB
                                                Antivirus and
                                                they did it very quickly.
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Alex was very thorough, knowledgeable &amp; courteous.
                                                everything I needed and more was taken care of. I've always had great
                                                service with
                                                TTB.
                                            </p>
                                            <div class="client-info">
                                                <div class="client-video">
                                                    <a href="#"><img
                                                            src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="client-details">
                                                    <h6><b>GG21</b></h6>

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">These guys are extremely responsive. Always available
                                                at a
                                                toll-free number and have batted 1.000 in fixing whatever issues I've
                                                encountered.
                                                I also like that their support extends to all of our devices, phones for my
                                                wife and
                                                I, my home office PC laptop and various peripherals as
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">The technician helped me with all of my devices:
                                                laptop,
                                                desktop, smart phone and tablet. Each had a different issue but they were
                                                knowledgeable
                                                about them and improved the speed while taking care of my security. I would
                                                recommend them any day, so much better than some random file.
                                                They follow up periodically to make sure you are having no issues. Great
                                                customer
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">I really appreciate when ever I call TTB they are very
                                                knowledgeable, patient, and kind. Today i want to thank Eric Jack for his
                                                extremely
                                                helpful
                                                disposition. Also he;ping me to figure out how to trndfer a document tp my
                                                email.
                                                There is no question to small that they will not help you with.
                                                He also clean out my system, added a more secure secrurity system as
                                                advising me
                                                what to expect as changes were made to was understandable for
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">The TTB service is very thorough: we like knowing that
                                                all of
                                                our IT in the house is covered--routers, IPhones, computers, music systems,
                                                etc.
                                                And when we move to a new home, the service stays with us. Josh has been
                                                unfailingly
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Josh at TTB called me to update my PC. He provided
                                                excellent
                                                service and walked me through the steps to complete a download. I feel
                                                confident
                                                that my PC
                                                is running optimally with the privacy and data protection that they offer.
                                                Great job
                                                and I highly recommend this company. Very secure &amp; easy to work with.
                                            </p>
                                            <div class="client-info">
                                                <div class="client-video">
                                                    <a href="#"><img
                                                            src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="client-details">
                                                    <h6><b>Rick Serafine</b></h6>

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Working with TTB is a pleasure .Very knowledgeable
                                                staff guide
                                                me through the necessary steps to protect my units. They remember to call
                                                and scan
                                                and update
                                                my units without being called or reminded. When I have experienced problems
                                                and
                                                issues my calls are quickly answered and resolved. Your staff is friendly,
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">The technicians were very knowledgeable and
                                                professional. They
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Always helpful. a bit hard to understand but always
                                                works thru
                                                it. Pricing is a bit confusing at times compared to year's past. Thanks.
                                            </p>
                                            <div class="client-info">
                                                <div class="client-video">
                                                    <a href="#"><img
                                                            src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="client-details">
                                                    <h6><b>Frank</b></h6>

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">I asked them to provide a new license for my TTB
                                                Antivirus and
                                                they did it very quickly.
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">Alex was very thorough, knowledgeable &amp; courteous.
                                                everything I needed and more was taken care of. I've always had great
                                                service with
                                                TTB.
                                            </p>
                                            <div class="client-info">
                                                <div class="client-video">
                                                    <a href="#"><img
                                                            src="https://t4.ftcdn.net/jpg/02/44/43/69/360_F_244436923_vkMe10KKKiw5bjhZeRDT05moxWcPpdmb.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="client-details">
                                                    <h6><b>GG21</b></h6>

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">These guys are extremely responsive. Always available
                                                at a
                                                toll-free number and have batted 1.000 in fixing whatever issues I've
                                                encountered.
                                                I also like that their support extends to all of our devices, phones for my
                                                wife and
                                                I, my home office PC laptop and various peripherals as
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">The technician helped me with all of my devices:
                                                laptop,
                                                desktop, smart phone and tablet. Each had a different issue but they were
                                                knowledgeable
                                                about them and improved the speed while taking care of my security. I would
                                                recommend them any day, so much better than some random file.
                                                They follow up periodically to make sure you are having no issues. Great
                                                customer
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">I really appreciate when ever I call TTB they are very
                                                knowledgeable, patient, and kind. Today i want to thank Eric Jack for his
                                                extremely
                                                helpful
                                                disposition. Also he;ping me to figure out how to trndfer a document tp my
                                                email.
                                                There is no question to small that they will not help you with.
                                                He also clean out my system, added a more secure secrurity system as
                                                advising me
                                                what to expect as changes were made to was understandable for
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 542px; margin-right: 8px;">
                                        <div class="single-testimonial carousel-slide single-testimonial p-4">
                                            <div class="round-1 round"></div>
                                            <div class="round-2 round"></div>
                                            <p class="dark-black-p">The TTB service is very thorough: we like knowing that
                                                all of
                                                our IT in the house is covered--routers, IPhones, computers, music systems,
                                                etc.
                                                And when we move to a new home, the service stays with us. Josh has been
                                                unfailingly
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

                                                </div>
                                                <i class="fa-solid fa-quote-left"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                    class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
                                    role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <div class="owl-nav">
                            <button class="owl-prev"><i class="fa-solid fa-arrow-left"></i></button>
                            <button class="owl-next"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </section>
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
