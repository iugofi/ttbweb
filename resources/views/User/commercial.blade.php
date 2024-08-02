@extends('User.Layouts.layout')

@section('title', 'commercial')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')


@section('content')




    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start::commericial section one -->
        <div class="commericial-banner" id="commericial">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                            <div class="lg:py-[3rem] text-vartical"
                                style="position: relative; top: 7rem; padding-right: 2rem;">
                                <h1 class="lg:text-start font-semibold mb-2 text-[2rem]" style="color: #000;">Robust Threat
                                    Protection and
                                    Security Framework</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] dark-text"
                                    style="color: #000;">Holisticly
                                    procrastinate mission-critical convergence with reliable customer service. Assertively
                                    underwhelm idea-sharing for impactful solutions.
                                    Assertively underwhelm idea-sharing for impactful solutions.
                                </div>
                                <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                                    Download Now
                                </a>
                            </div>
                            {{-- <img src="{{ asset('assets/img/icon-img.png') }}" class="img-fluid" width="85%"> --}}
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">

                            <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End::commericial section one -->

        {{-- Start:: commericial section two --}}
        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] ">
            <div class="container main-banner-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12  customize-image text-center">
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img/Second-Section-img.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center animate-bounce">
                            <h6 class="uppercase">25 year of exprience</h6>
                        </div>
                    </div>
                    <div
                        class="xxl:col-span-6 xl:col-span-6 md:col-span-12 lg:col-span-6 pt-5 pb-0 lg:px-2 !text-start  my-auto">
                        <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">What We Do</span>
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">We Provide Web Design
                            With App Development</h4>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>

                        <div class="grid grid-rows-2 grid-flow-col gap-1">
                            <div class="row-span-3">
                                <img src="assets/img/Best-Services-Iocn-1.png" class="img-fluid !inline-flex backimage">
                            </div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Best Services</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum dolor sit amet, eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="grid grid-rows-2 grid-flow-col pt-4 gap-1">
                            <div class="row-span-3"><img src="assets/img/Best-Services-Iocn-2.png "
                                    class="img-fluid !inline-flex backimage"></div>
                            <div class="col-span-2">
                                <h5 class="dark-text px-6">Support 24/7</h5>
                            </div>
                            <div class="row-span-2 col-span-2">
                                <p class="text-gray-light px-6">Lorem ipsum dolor sit amet, eiusmod
                                    tempor. Lorem ipsum dolor sit amet, eiusmod tempor.</p>
                            </div>
                        </div>

                        <div class="action-btns mt-4">
                            <a href="#" class="ti-btn bg-primary text-white">Explore More Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End:: commericial section two --}}

        {{-- Start:: commericial section third --}}
        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container text-center">
                <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">What We Do</span>
                <h1 class="lg:text-center font-semibold mb-2 text-[2rem]">Solutions Coustomers Have<br>
                    Boilt With Instabase</h1><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">

                                        <img src="assets/img/Omniroutes-Lifting.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Omniroutes Lifting</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class=" text-dark font-bold text-sm">Explore More Us</a>

                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Content-Touchpoint.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Content Touchpoint</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class="text-dark font-bold text-sm">Explore More Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Faster-Resolution.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Faster Resolution</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class="text-dark font-bold text-sm">Explore More Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box text-left text-hover">
                            <div class="box-body">
                                <div class="mb-2 commericial-img">
                                    <span class="avatar avatar-md">
                                        <img src="assets/img/Support-Channels.png" alt="img" class="!rounded-md"
                                            style="max-width: 60px;height: 60px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Support Channels</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <hr><br>
                                <a href="#" class="text-dark font-bold text-sm">Explore More Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End:: commericial section third --}}

        {{-- Start:: commericial section forth --}}

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70" id="features">
            <div class="container text-center">
                <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">Last Case
                    Studies</span>
                <h1 class="lg:text-center font-semibold mb-2 text-[2rem]">Over 15 Years, Costomers Have<br>
                    Come To it Solutions.</h1><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-4 md:col-span-6 col-span-12">
                        <div class="boxs">
                            <div class="box-body bg-img1">
                            </div>
                            <div class="box-bottom">
                                <h6 class="font-bold mb-2 pt-2 text-xl" style="color: #000;">Omniroutes Lifting</h6>
                                <p class="card-text mb-4" style="color: #000; font-size:16px;">Engineering</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 md:col-span-6 col-span-12">
                        <div class="boxs">
                            <div class="box-body bg-img2">
                            </div>
                            <div class="box-bottom">
                                <h6 class="font-bold mb-2 pt-2 text-xl" style="color: #000;">Omniroutes Lifting</h6>
                                <p class="card-text mb-4" style="color: #000; font-size:16px;">Engineering</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 md:col-span-12 col-span-12">
                        <div class="boxs">
                            <div class="box-body bg-img3">
                            </div>
                            <div class="box-bottom">
                                <h6 class="font-bold mb-2 pt-2 text-xl" style="color: #000;">Omniroutes Lifting</h6>
                                <p class="card-text mb-4" style="color: #000; font-size:16px;">Engineering</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- End:: commericial section forth --}}

        {{-- Start:: commericial section fifth --}}

        <section
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
            id="features">
            <div class="container main-banner-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="txt">
                            <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">Last Case
                                Studies</span>
                            <h2 class="landing-banner-heading font-semibold mb-2 text-[2rem]"><span>What Our Client Say
                                    About
                                    Apdash</h2>
                            <div class="text-[1rem] mb-[3rem] !text-dark opacity-[0.9] ">Collaboratively actualize
                                excellent schemas without effective <br> models. Synergistically engineer functionalized
                                applications rather <br> than backend e-commerce.</div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-6 md:col-span-6 col-span-12">
                                <div class="box">

                                    <div class="box-body box-bm">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-1.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-6 col-span-12">
                                <div class="box">

                                    <div class="box-body box-bm">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-2.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box">

                                    <div class="box-body box-bm">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-1.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box">

                                    <div class="box-body box-bm">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-2.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box">
                                    <div class="box-body box-bm">
                                        <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                            <img src="assets/img/Icon-3.png" alt="img" class="!rounded-md">
                                        </span>
                                        <h6 class="box-title font-semibold">Special title treatment</h6>
                                        <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 md:col-span-6 col-span-12">
                                <div class="box ">
                                    <div class="box-body box-bm">
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

        {{-- End:: commericial section fifth --}}

        {{-- Start:: commericial section six --}}

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="faq">
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

        {{-- End:: commericial section six --}}


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
                                    <p class="dark-black-p">These guys are extremely responsive. Always available at a toll-free number and have batted 1.000 in fixing whatever issues I've encountered.
                                        I also like that their support extends to all of our devices, phones for my wife and I, my home office PC laptop and various peripherals as
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
                                    <p class="dark-black-p">The technician helped me with all of my devices: laptop, desktop, smart phone and tablet. Each had a different issue but they were knowledgeable
                                        about them and improved the speed while taking care of my security. I would recommend them any day, so much better than some random file.
                                       They follow up periodically to make sure you are having no issues. Great customer service.
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
                                    <p class="dark-black-p">I really appreciate when ever I call TTB they are very knowledgeable, patient, and kind. Today i want to thank Eric Jack for his extremely helpful
                                        disposition. Also he;ping me to figure out how to trndfer a document tp my email. There is no question to small that they will not help you with.
                                        He also clean out my system, added a more secure secrurity system as advising me what to expect as changes were made to was understandable for
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
                                    <p class="dark-black-p">The TTB service is very thorough: we like knowing that all of our IT in the house is covered--routers, IPhones, computers, music systems, etc.
                                        And when we move to a new home, the service stays with us. Josh has been unfailingly patient and proactive during our service calls. Highly recommend!
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
                                    <p class="dark-black-p">Josh at TTB called me to update my PC. He provided excellent service and walked me through the steps to complete a download. I feel confident that my PC
                                        is running optimally with the privacy and data protection that they offer. Great job and I highly recommend this company. Very secure & easy to work with.
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
                                    <p class="dark-black-p">Working with TTB is a pleasure .Very knowledgeable staff guide me through the necessary steps to protect my units. They remember to call and scan and update
                                        my units without being called or reminded. When I have experienced problems and issues my calls are quickly answered and resolved. Your staff is friendly,
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
                                    <p class="dark-black-p">The technicians were very knowledgeable and professional. They would make contact when services needed to be updated.
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
                                    <p class="dark-black-p">Always helpful. a bit hard to understand but always works thru it. Pricing is a bit confusing at times compared to year's past. Thanks.
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
                                    <p class="dark-black-p">I asked them to provide a new license for my TTB Antivirus and they did it very quickly.
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
