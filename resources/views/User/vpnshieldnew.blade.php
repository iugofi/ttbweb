@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')

<!-- Jsvector Maps -->
<link rel="stylesheet" href="assets/libs/jsvectormap/css/jsvectormap.min.css">



<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">
    <section class="vpn-banner-top">
        <div class="container main-banner-container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                    <div class="lg:py-[3rem]">
                        <h2>Explore The World Wide Easy With Netric VPN</h2>
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus
                            mus.</p>
                        <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                            Download Now
                            <i class='bx bxs-cloud-download icon-hm'></i>
                        </a>
                        <a href="#" class="popup-youtube btn btn-white btn-circle btn-icon"><i
                                class="bx bx-play watch-icon mx-2"></i> </a>
                        <span class="pl-2 text-white wtc-spn mx-1"> <a href="#"> Watch Now </a></span>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">

                    <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                        <img src="{{ asset('assets/img/ttb vpn shield.png') }}" alt="" class="img-fluid"
                            width="100%">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="section-two-iconbox pt-8">
        <div class="container main-banner-container">
            <h3 class="text-center">About VPN</h3>
            <h4 class="text-center">Why Should Use Netric VPN?</h4>
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 con-box">
                    <i class="fa-solid fa-eye"></i>
                    <h5>Anonymous Access</h5>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor.</p>
                </div>
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 con-box">
                    <i class="fa-solid fa-user"></i>
                    <h5>No Usage Logs</h5>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor.</p>
                </div>
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 con-box">
                    <i class="fa-solid fa-server"></i>
                    <h5>No Usage Limits</h5>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor.</p>
                </div>
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 con-box">
                    <i class="fa-solid fa-lock"></i>
                    <h5>100% White Listed</h5>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
</div>
</section>

<section class="vpn-section-two">
    <div class="container main-banner-container">
        <div class="grid grid-cols-12 gap-6">
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                <h3>Supported By World's Renowned Venture Capital's</h3>
            </div>
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters.</p>
            </div>
        </div>
        <hr>
        <div class="vpn-innersection-two">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                    <img src="{{ asset('assets/img/vpn shiel image.png') }}" alt="" class="img-fluid"
                        width="100%">
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 prog-section">
                    <h3>World's Best VPN Services That Provide Own DNS System</h3>
                    <p class="mt-3 mb-6">I Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p class="text-[0.75rem] font-semibold mb-3 text-[#8C9097] dark:text-white/50">Fast VPN<span
                            class="ltr:float-right rtl:float-left text-[0.625rem] font-normal ">95%</span>
                    </p>
                    <div class="progress progress-xs mb-4 progress-animate">
                        <div class="progress-bar bg-primary w-96">
                        </div>
                    </div>
                    <p class="text-[0.75rem] font-semibold mb-3 text-[#8C9097] dark:text-white/50">Malware Detection
                        <span class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">73%</span>
                    </p>
                    <div class="progress progress-xs mb-4 progress-animate ">
                        <div class="progress-bar !rounded-none bg-primary w-80">
                        </div>
                    </div>
                    <p class="text-[0.75rem] font-semibold mb-3 text-[#8C9097] dark:text-white/50">Total Security
                        <span class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">92%</span>
                    </p>
                    <div class="progress progress-xs mb-4 progress-animate ">
                        <div class="progress-bar !rounded-e-full bg-primary w-72">
                        </div>
                    </div>
                    <p class="text-[0.75rem] font-semibold mb-3 text-[#8C9097] dark:text-white/50">Absolute Privacy
                        <span class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">81%</span>
                    </p>
                    <div class="progress progress-xs mb-5 progress-animate ">
                        <div class="progress-bar !rounded-e-full bg-primary w-64">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vpn-section-three">
    <div class="container main-banner-container">
        <div class="grid grid-cols-12 gap-6">
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                <h2>What We Offer For You</h2>
                <h3>Your Roadmap To Freedom Information On The Internet</h3>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud xercitation ullamco.</p>

                <div class="grid grid-cols-12 gap-6 mt-9">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <span>87%</span>
                        <h4 class="mt-10">VPN For All Devices</h4>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <span>95%</span>
                        <h4 class="mt-10">VPN For All Devices</h4>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <a href="index.html" class="m-1 ti-btn ti-btn-primary-full mt-9">
                    Get Free Trial
                </a>
            </div>
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                <img src="{{ asset('assets/img/mobile vpn one.jpg') }}" alt="" class="img-fluid" width="100%">
            </div>
        </div>
    </div>
</section>

<section class="vpn-section-four">
    <div class="container main-banner-container">
        <div class="side-border">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 text-center">
                    <div class="img-center">
                        <img src="{{ asset('assets/img/vpn icon four.png') }}" alt="" class="img-fluid"
                            width="20%">
                    </div>
                    <h3 class="mt-2 text-white">278 <sup>+</sup></h3>
                    <p class="text-white">Servers Active</p>
                </div>
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 text-center">
                    <div class="img-center">
                        <img src="{{ asset('assets/img/vpn icon three.png') }}" alt="" class="img-fluid"
                            width="20%">
                    </div>
                    <h3 class="mt-2 text-white">11,458<sup>+</sup></h3>
                    <p class="text-white">User Request</p>
                </div>
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 text-center">
                    <div class="img-center">
                        <img src="{{ asset('assets/img/vpn icon two.png') }}" alt="" class="img-fluid"
                            width="20%">
                    </div>
                    <h3 class="mt-2 text-white">100 <sup>%</sup></h3>
                    <p class="text-white">Money Back</p>
                </div>
                <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 col-span-12 text-center">
                    <div class="img-center">
                        <img src="{{ asset('assets/img/vpn icon one.png') }}" alt="" class="img-fluid"
                            width="20%">
                    </div>
                    <h3 class="mt-2 text-white">85 <sup>+</sup></h3>
                    <p class="text-white">Expert Support Team</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="vpn-section-five">
    <div class="container main-banner-container">
        <div class="grid grid-cols-12 gap-6">
            <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                <div class="img-center text-center">
                    <img src="{{ asset('assets/img/map ttb.png') }}" alt="" class="img-fluid"
                        width="70%">
                </div>
            </div>

        </div>
    </div>
</section>


<section class="vpn-section-six">
    <div class="container main-banner-container">
        <div class="side-border">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 text-center">

                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 text-center">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section vpn-section-seven text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]"
    id="faq">
    <div class="container text-center">
        <h3 class="font-semibold text-4xl mb-2">Frequently Asked Queries</h3>
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
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-seven"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="faq-five">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
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
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-eight"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="faq-six">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
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
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-nine"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="faq-seven">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
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
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                            <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="faq-collapse-ten"
                                        class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                        aria-labelledby="faq-eight">
                                        <div class="p-5">
                                            <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
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



<section
    class="section vpn-section-eight !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
    id="features">
    <div class="container main-banner-container">
        <div class="grid grid-cols-12 gap-6">
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                <div class="lg:py-[3rem]">
                    <h2 class="landing-banner-heading mb-4 opacity-[0.9] mt-10 font-semibold text-4xl">
                        <span>What Our Client Say <br> About Apdash
                    </h2>
                    <div class="text-[1rem] mb-[3rem] !text-dark opacity-[0.9] ">Collaboratively actualize
                        excellent schemas without effective <br> models. Synergistically engineer functionalized
                        applications rather<br> than backend e-commerce.</div>


                </div>
            </div>
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">

                <div class="box custom-box slider-box box-review">
                    <div class="box-body">
                        <div class="swiper  custom-pagination">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide test-slider-img">


                                    <div class="item">
                                        <div class="testimonial-quote-wrap ttb-bg">
                                            <div class="media author-info mb-3 flex ">
                                                <div class="author-img mr-3">
                                                    <img src="assets/img/client/1.jpg" alt="client" width="10px">
                                                </div>
                                                <div class="media-body text-white p-5">
                                                    <h5 class="mb-0 text-white">John Charles</h5>
                                                    <span>Head Of Admin</span>
                                                </div>
                                                <i class="fas fa-quote-right text-white"></i>
                                            </div>
                                            <div class="client-say text-white">
                                                <p>Interactively optimize fully researched expertise vis-a-vis
                                                    plug-and-play relationships. Intrinsicly develop viral core
                                                    competencies for fully tested customer service. Enthusiastically
                                                    create next-generation growth strategies and.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



{{-- vpn add --}}


<style>

    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body{
      display: flex;
      padding: 0 35px;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
      background: #343F4F;
    }
    .wrapper{
      display: flex;
      max-width: 1200px;
      position: relative;
    }
    .wrapper i{
      top: 50%;
      height: 44px;
      width: 44px;
      color: #343F4F;
      cursor: pointer;
      font-size: 1.15rem;
      position: absolute;
      text-align: center;
      line-height: 44px;
      background: #fff;
      border-radius: 50%;
      transform: translateY(-50%);
      transition: transform 0.1s linear;
    }
    .wrapper i:active{
      transform: translateY(-50%) scale(0.9);
    }
    .wrapper i:hover{
      background: #f2f2f2;
    }
    .wrapper i:first-child{
      left: -22px;
      display: none;
    }
    .wrapper i:last-child{
      right: -22px;
    }
    .wrapper .carousel{
      font-size: 0px;
      cursor: pointer;
      overflow: hidden;
      white-space: nowrap;
      scroll-behavior: smooth;
    }
    .carousel.dragging{
      cursor: grab;
      scroll-behavior: auto;
    }
    .carousel.dragging img{
      pointer-events: none;
    }
    .carousel img{
      height: 340px;
      object-fit: cover;
      user-select: none;
      margin-left: 14px;
      width: calc(100% / 3);
    }
    .carousel img:first-child{
      margin-left: 0px;
    }
    
    @media screen and (max-width: 900px) {
      .carousel img{
        width: calc(100% / 2);
      }
    }
    
    @media screen and (max-width: 550px) {
      .carousel img{
        width: 100%;
      }
    }
    
    </style>
    
    
            <!DOCTYPE html>
            <!-- Coding By CodingNepal - youtube.com/codingnepal -->
            <html lang="en" dir="ltr">
              <head>
                <meta charset="utf-8">
                <title>Draggable Image Slider | CodingNepal</title>
                <link rel="stylesheet" href="style.css">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
                <script src="script.js" defer></script>
              </head>
              <body>
                <div class="wrapper">
                  <i id="left" class="fa-solid fa-angle-left"></i>
                  <div class="carousel">
                    <img src="images/img-1.jpg" alt="img" draggable="false">
                    <img src="images/img-2.jpg" alt="img" draggable="false">
                    <img src="images/img-3.jpg" alt="img" draggable="false">
                    <img src="images/img-4.jpg" alt="img" draggable="false">
                    <img src="images/img-5.jpg" alt="img" draggable="false">
                    <img src="images/img-6.jpg" alt="img" draggable="false">
                    <img src="images/img-7.jpg" alt="img" draggable="false">
                    <img src="images/img-8.jpg" alt="img" draggable="false">
                    <img src="images/img-9.jpg" alt="img" draggable="false">
                  </div>
                  <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
                
    
    <script>
    
    const carousel = document.querySelector(".carousel"),
    firstImg = carousel.querySelectorAll("img")[0],
    arrowIcons = document.querySelectorAll(".wrapper i");
    
    let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
    
    const showHideIcons = () => {
        // showing and hiding prev/next icon according to carousel scroll left value
        let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
        arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
        arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
    }
    
    arrowIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
            // if clicked icon is left, reduce width value from the carousel scroll left else add to it
            carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
            setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
        });
    });
    
    const autoSlide = () => {
        // if there is no image left to scroll then return from here
        if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
    
        positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
        let firstImgWidth = firstImg.clientWidth + 14;
        // getting difference value that needs to add or reduce from carousel left to take middle img center
        let valDifference = firstImgWidth - positionDiff;
    
        if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
            return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
        }
        // if user is scrolling to the left
        carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    
    const dragStart = (e) => {
        // updatating global variables value on mouse down event
        isDragStart = true;
        prevPageX = e.pageX || e.touches[0].pageX;
        prevScrollLeft = carousel.scrollLeft;
    }
    
    const dragging = (e) => {
        // scrolling images/carousel to left according to mouse pointer
        if(!isDragStart) return;
        e.preventDefault();
        isDragging = true;
        carousel.classList.add("dragging");
        positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
        carousel.scrollLeft = prevScrollLeft - positionDiff;
        showHideIcons();
    }
    
    const dragStop = () => {
        isDragStart = false;
        carousel.classList.remove("dragging");
    
        if(!isDragging) return;
        isDragging = false;
        autoSlide();
    }
    
    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("touchstart", dragStart);
    
    document.addEventListener("mousemove", dragging);
    carousel.addEventListener("touchmove", dragging);
    
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("touchend", dragStop);
    
    </script>
    
              </body>
            </html>
    
    













</div>


<script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

<!-- JSVector Maps MapsJS -->
<script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
<script src="assets/js/us-merc-en.js"></script>
<script src="assets/js/russia.js"></script>
<script src="assets/js/spain.js"></script>
<script src="assets/js/canada.js"></script>
<script src="assets/js/jsvectormap.js"></script>

@section('content')

@endsection
