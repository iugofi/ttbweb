@extends('User.Layouts.layout')

@section('title', 'vpnshieldnew')
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
                        <a href="#" class="popup-youtube  btn-white btn-circle btn-icon"><i
                                class="bx bx-play watch-icon"></i>
                            <span class="pl-2 text-white wtc-spn">Watch Now</span></a>
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
                                <h4 class="text-center text-4xl font-bold mb-4 pb-4">What Client Say About Us?</h4>
                            </div>
                            <div class="back-img"></div>
                            <div class="testimonial-content owl-carousel">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial carousel-slide single-testimonial p-4">
                                    <div class="round-1 round"></div>
                                    <div class="round-2 round"></div>
                                    <p class="dark-black-p">1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
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
                                    <p class="dark-black-p">2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
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
                                    <p class="dark-black-p">3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
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
                                    <p class="dark-black-p">4. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
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
                                    <p class="dark-black-p">5. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
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


            <script>
                $(document).ready(function() {
                    testimonials();
                });
            </script>

            {{-- New testimonial html css End --}}



















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
