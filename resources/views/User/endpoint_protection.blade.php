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
                            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 col-span-12 inline-flex"
                                style="width: 75%; margin: auto;">
                                <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="width:90px; height:90px">
                                <div class="icon-txt ms-4 mr-[1.0rem]">
                                    <p class="text-white  text-sm py-5" style="color: #fff;">TTB Endpoint Security offers
                                        you complete online security solutions where you don’t need to compromise your
                                        confidentiality. We protect you from unauthorized access, malware, viruses emerging
                                        threats in the modern tech landscape. From your smartphone to the PC, you get
                                        end-to-end protection with a
                                        single product. We serve a common user to professional enterprises with 24x7 hour
                                        expert services.
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
                        <p class=" text-[1rem] text-[#BEBFBF] dark:text-white mb-4 ">The endpoint security protection
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
        <section class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70">
            <div class="endpoint-slider">
                <div class="main-content">
                    <div class="container">
                        <div class="owl-carousel mycustom-test owl-theme">
                            <div class="item bg-white p-5 rounded-lg shadow-md box">
                                <img src="{{ asset('assets/img/Enhanced-Firewall-2.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-white text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Enhanced Firewall</p>
                                <p class="mt-3 text-[#333335] text-center">The first line of defense that secures you
                                    from unauthorized access and unknown
                                    cyber threats.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md box">
                                <img src="{{ asset('assets/img/Advanced-Antivirus-Solutions.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-white text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Advanced Antivirus Solutions</p>
                                <p class="mt-3 text-[#333335] text-center">A digital barrier with real-time scanning
                                    filters and blocks malicious links, texts,
                                    nasty viruses, and URLs.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md box">
                                <img src="{{ asset('assets/img/Real-Time-Scanning-&-Threat-Detection.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-white text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Real-Time Scanning & Threat Detection</p>
                                <p class="mt-3 text-[#333335] text-center">Provides you with real-time threat alerts and
                                    scanning to aware you of suspicious activities
                                    & emerging menaces.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md box">
                                <img src="{{ asset('assets/img/Patch-Management-2.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-white text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Patch Management</p>
                                <p class="mt-3 text-[#333335] text-center">This borderline security keeps your device
                                    updated and fixes the vulnerabilities if occur before
                                    hackers exploit it. </p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md box">
                                <img src="{{ asset('assets/img/Data-Security-Access-Control') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-white text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Data Security Access Control</p>
                                <p class="mt-3 text-[#333335] text-center">Manages & authorizes the user permissions
                                    with Multifactor authentication to limit the access to sensitive
                                    data by blocking unauthorized access.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md box">
                                <img src="{{ asset('assets/img/Centralized-Management-2.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-white text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">Centralized Management</p>
                                <p class="mt-3 text-[#333335] text-center">We provide you with central management &
                                    endpoint security considering setting, security policies, and monitoring
                                    compliance.</p>
                            </div>
                            <div class="item bg-white p-5 rounded-lg shadow-md box">
                                <img src="{{ asset('assets/img/E-Support-Concierge-2.png') }}" alt="Img"
                                    style="width: 65px !important;">
                                <p class="dark-white text-teal-400 font-bold text-xl mb-3 pt-5 text-center"
                                    style="font-size: 16px;">E-Support Concierge</p>
                                <p class="mt-3 text-[#333335] text-center">We serve you 24x7 hours of security services
                                    and assistance regarding the products and services you buy from us.</p>
                            </div>
                        </div>
                    </div>


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
                                            src="https://www.nighthawk-routerlogin.com/assets/img/What-do-you-need-to-know-about-Endpoint-Security-Solutions.png"
                                            alt="images">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-6 col-span-12">
                        <div class="text-content">
                            <p class=" text-[1rem] text-white dark:text-white mb-4 ">Generally, endpoint security for
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
                        </div>
                    </div>


                </div>

                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12 mt-10">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">

                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Device & Data Security</h6>
                                    <p class="card-text mb-4">Effective endpoint security services like TTB will ensure the
                                        complete security
                                        of your endpoint networks like PC, smartphones, etc., & confidential data by
                                        tracking, detecting, and
                                        using smart techniques and isolating the infected gadgets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">

                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Behavioral Analysis</h6>
                                    <p class="card-text mb-4">The smart endpoint solutions detect the behavior of
                                        applications and methods to
                                        detect oddities. It helps to analyze the latest spring-up cyber threats and hacking
                                        activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Real-Time Scanning & Threat Detection </h6>
                                    <p class="card-text mb-4">The current-day cybersecurity systems such as TTB Endpoint
                                        security tools & support
                                        will serve you with innovative real-time scanning and threat detection services by
                                        finding and alerting
                                        you if there is any suspicious activity on your digital & social accounts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Multi-Layer Protection</h6>
                                    <p class="card-text mb-4">The modern era security solutions include multi-layer
                                        protection that includes a
                                        Firewall, VPN Shield, TTB Antivirus, intrusion prevention, and more. Here, users are
                                        guided to use
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
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Cost Savings/Effective</h6>
                                    <p class="card-text mb-4">This centralized management is a cost-effective fix to meet
                                        all your security needs.
                                        You get end-to-end security solutions under one umbrella that is TTB which has
                                        different plans that suit
                                        your pockets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">

                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Remote Management</h6>
                                    <p class="card-text mb-4">The present-time paid or free endpoint security services have
                                        smart remote management
                                        features. It assists you to set and manage your security tools on various connected
                                        devices using your
                                        smartphone or computer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Advanced Security Controls & Threat Control
                                    </h6>
                                    <p class="card-text mb-4">The modernistic online protection addresses advanced threats,
                                        including zero-day exposures,
                                        targeted invasions, & insider menaces. Safety controls, like firewalls, App/Device
                                        control, and data loss
                                        prevention implement security policies and mitigate diverse security risks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box endpoint-boxs">
                                <div class="box-body box-bg">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <img src=" {{ asset('assets/img/24-7-icon.png') }}"
                                    class="img-fluid endpoint-icon p-1 mt-3 w-100" style="height: auto; max-width: 65px;">
                                    </span>
                                    </span>
                                    <h6 class="font-semibold pt-5 pb-3 text-xl">Centralized Management Console</h6>
                                    <p class="card-text mb-4">Many endpoint security solutions offer centralized management
                                        consoles that simplify management
                                        by letting security policies, updates, and configurations be managed from one place,
                                        such as TTB Endpoint Security.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End::End Point section fifth -->

        {{-- Start::End Point faq section six --}}

        <section class="endpoint-section-three !bg-[#f9fafb] dark:!bg-black/10 pt-5 pb-5">
            <div class="container pt-5 pb-5">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 text-center">
                        <h3 class="lg:text-center font-semibold mb-2 text-[2rem]">Why do we need the Endpoint security
                            services/solutions?</h3>
                        <p class="mt-3 mb-5 text-base">Moreover, endpoint security solutions are the future-proven
                            technologies
                            that are necessary to fight against the ever-evolving cyber threats and malicious viruses.
                            Likewise, this centralized approach is necessary for your digital gadgets' protection.<br><br>

                            So, we shed light on the essentiality of endpoint security services to make you aware of its
                            importance.
                            Let’s have a close look:</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 check-icon">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Provides you with remote management and virtual infrastructure monitoring.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Reduces the risk of data breach and modern threats and hacking.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Gives real-time scanning threat detection alerts on your connected device.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Finds and isolates the impacted devices.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Prevents unauthorized access to digital and social accounts.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Offers multi-layer protection with advanced tools, such as VPN/Firewall/TTB Antivirus, etc.
                            </p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Enhances the overall security of the digital gadgets.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Cost-effective solution under one roof with advanced technology.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Offers fair deals for commercial and in-home security.</p>
                        </div>
                        <div class="mt-3 flex items-start text-base text-[#333335]">
                            <i class="bx bx-check-double mt-1 mr-2 me-3"
                                style="font-size: 20px; color: #13D8AA; font-weight: 600;"></i>
                            <p>Keeps you protected from remote work risks using URL filtration, and detecting spam
                                links/texts, malicious sites, etc.</p>
                        </div>
                    </div>

                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 pt-5">
                        <img src="https://www.nighthawk-routerlogin.com/assets/img/Why-do-we-need-the-Endpoint-security-services-solutions.png" alt=""
                            class="img-fluid" width="90%">
                    </div>
                </div>
                <p class="mt-10 text-black text-center text-base"><b>With everything taken into account, go for <span
                            style="color:#12D2B3;">TTB Endpoint security</span> to stay ahead in this cyber era.</b></p>
            </div>
        </section>

        {{-- End::End Point faq section six --}}



    </div>


@endsection
