@extends('User.Layouts.layout')

@section('title', 'Behavioral Protection')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

    <style>
        .floatright {
            float: right;
        }
    </style>

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start:: Behavioral Protection section one -->

        <div class="Behavioral-banner" id="Behavioral">
            <section class="section sect-ban">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical" style="position: relative; top: 7rem;">
                                <h1 class="text-left font-semibold mb-2 text-[4rem]" style="color: #fff;">IT Solutions <br>
                                    For Your<br>
                                    Business.</h1>
                                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] text-left dark-text"
                                    style="color: #fff;">The first rule any technology used in business automantion
                                    <br>applied to an efficient operation will magnify.
                                </div>
                                {{-- <div class="bnr-btn text-center">
                                    <a href="index.html" class="m-1 ti-btn ti-btn-primary-full bnr-btn-1"
                                        style="padding: 8px 34px;">
                                        Buy Now
                                    </a>
                                    <a href="index.html" class="m-1 ti-btn bg-white bnr-btn-2" style="color:#11CDBE;">
                                        Download Now
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">

                            <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                            </div>

                        </div> --}}
                    </div>
                </div>
            </section>
        </div>

        <!-- End:: Behavioral Protection section one -->

        <!-- Start:: Behavioral Protection section two -->

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] " id="features">
            <div class="container text-center">
                <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">Our Services</span>
                <h2 class="lg:text-center font-semibold mb-2 text-[2rem]">We do awesome Services for our clients.<br>
                    Check some of our Services.</h2><br>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img1">
                                    <span class="avatar avatar-md pt-5">

                                        <img src="{{ asset('assets/img/Renovation-Building-colored.png') }}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Threat Protection</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>

                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img2">
                                    <span class="avatar avatar-md pt-5">
                                        <img src="{{ asset('assets/img/Power-And-Energy-Colored.png') }}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">
                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Easy to Use</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img3">
                                    <span class="avatar avatar-md pt-5">
                                        <img src="{{ asset('assets/img/Dedicated-Teams-colored.png') }}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Consumer Security</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 md:col-span-6 col-span-12">
                        <div class="box Behav">
                            <div class="box-body">
                                <div class="mb-2 Behavioral-img4 pt-3">
                                    <span class="avatar avatar-md">
                                        <img src="{{ asset('assets/img/Oil-&-Gas-Energy-colored.png') }}" alt="img"
                                            class="!rounded-md" style="max-width: 75px;height: 75px;">

                                    </span>
                                </div>
                                <h6 class="font-bold mb-2 text-xl">Virus Protection</h6>
                                <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action-btns mt-4">
                    <a href="#" class="ti-btn bg-primary text-white" style="width:150px;">View All Services</a>
                </div>
            </div>
        </section>

        <!-- End:: Behavioral Protection section two -->

        <!-- Start:: Behavioral Protection section three -->

        <div class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70">
            <div class="container ttbantivirus-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 pt-5 pb-0 lg:px-2 !text-start">
                        <span class="lg:text-center font-semibold mb-2 text-[1rem]" style="color:#12D2B3;">About Us</span>
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">Construction Industry <br>
                            Awared of in 2024.</h4>
                        <div class="texts-box1" style="display: inline-flex; align-items: center;">
                            <div class="scct-one">
                                <p class="txts text-[4rem] text-[#8c9097] text-left dark:text-white/50 mb-0 ">25
                                </p>
                            </div>
                            <div class="scct-two">
                                <p
                                    class=" text-[0.9rem] text-[#8c9097] text-left dark:text-white/50 mb-4 px-0 year-text-left">
                                    YEARS EXPERIENCES
                                </p>
                            </div>


                        </div>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 px-5">Objectively deliver professional
                            value with diverse web-readiness.<br> Collaboratively transition wireless customer service
                            without<br>
                            goal-oriented catalysts for change. Collaboratively.
                        </p>

                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 antivirus-image text-center behavioral">
                        <div class="lg:text-start !flex items-center lg:justify-start">
                            <img src="{{ asset('assets/img/Construction-Industry-Awared-of-in-2024.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center lock-animantion">
                            <img src="{{ asset('assets/img/Construction-Industry-Awared-of-in-2024-Icon.png') }}"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End:: Behavioral Protection section three -->

        <!-- Start:: Behavioral Protection section four -->

        <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="faq">
            <div class="container text-center">
                {{-- <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                        class="landing-section-heading">F.A.Q</span></p> --}}
                <div class="grid grid-cols-12 gap-6 text-start">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-6 col-span-12">
                                <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                                    <img src="{{ asset('assets/img/Why-Choose-us.png') }}" alt="" width="95%"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="xl:col-span-6 col-span-12">
                                <h3 class="lg:text-center font-semibold mb-2 text-[2rem]">Why Choose Us?</h3>
                                <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                    id="accordionFAQ2">
                                    <div class="hs-accordion-group">
                                        <div class="hs-accordion active bg-white dark:bg-bodybg mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-five">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary dark:border-defaultborder/10-b dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-seven" id="dacor-id">
                                                <i class="fa-regular fa-circle-dot" style="color:#12D2B3;"><span
                                                        class="decor px-2">General Terms Conditions (GTC)</span></i>
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
                                        <div class="hs-accordion bg-white dark:bg-bodybg mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-six">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary dark:border-defaultborder/10-b dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-eight" id="dacor-id">
                                                <i class="fa-regular fa-circle-dot" style="color:#12D2B3;"><span
                                                        class="decor px-2"> Do I need to create an account to make an
                                                        order?</span></i>
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
                                        <div class="hs-accordion bg-white dark:bg-bodybg mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-seven">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary dark:border-defaultborder/10-b dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-nine" id="dacor-id">
                                                <i class="fa-regular fa-circle-dot" style="color:#12D2B3;"><span
                                                        class="decor px-2">Where can I subscribe to your
                                                        newsletter?</span></i>
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
                                        <div class="hs-accordion bg-white dark:bg-bodybg mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                            id="faq-eight">
                                            <button type="button"
                                                class="hs-accordion-toggle hs-accordion-active:!text-primary dark:border-defaultborder/10-b dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-5 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                                aria-controls="faq-collapse-ten" id="dacor-id">
                                                <i class="fa-regular fa-circle-dot" style="color:#12D2B3;"><span
                                                        class="decor px-2">Where can in edit my address?</span></i>
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

        <!-- End:: Behavioral Protection section four -->

        <!-- Start:: Behavioral Protection section five -->

        <div
            class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70">
            <div class="container ttbantivirus-container">
                <h2 class="lg:text-center text-center font-semibold mb-4 mt-4 pt-4 pb-4 text-[2rem]">Services</h2>
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box">

                                <div class="box-body box-bm">
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-gears" style="font-size:40px;"></i>
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
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-code" style="font-size:40px;"></i>
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
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-shield" style="font-size:40px;"></i>
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
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-photo-film" style="font-size:40px;"></i>
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
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-gears" style="font-size:40px;"></i>
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
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-code" style="font-size:40px;"></i>
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
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-file-shield" style="font-size:40px;"></i>
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
                                    <span class="mb-4 avatar avatar-lg avatar-rounded !text-primary">
                                        <i class="fa-solid fa-photo-film" style="font-size:40px;"></i>
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
        <!-- End:: Behavioral Protection section five -->

        <!-- Start:: Behavioral Protection section five -->

        <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]"
            style="padding-top:0px !important;">
            <div class="container ttbantivirus-container">
                <div
                    class="grid grid xl:grid-cols-12 sm:grid-cols-12 md:grid-cols-12 justify-center align-center justify-center align-center">

                    <div
                        class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 pt-5 pb-0 lg:px-2 !text-start text-vertical">
                        <h4 class="lg:text-start font-semibold mb-2 text-[2rem]">The Leading IT Solutions<br>
                            Cpmpany & Your Partner<br>
                            for Innovations</h4>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness. Collaboratively transition wireless customer service without
                            goal-oriented catalysts for change. Collaboratively.
                        </p>
                        <p class=" text-[0.9rem] text-[#8c9097] dark:text-white/50 mb-4 ">Objectively deliver professional
                            value with diverse web-readiness.Collaboratively transition wireless customer service.
                        </p>

                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 antivirus-image text-center">
                        <div class="icon-one">
                            <img src="{{ asset('assets/img/Iconn.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="lg:text-start !flex items-center lg:justify-start justify-center">
                            <img src="{{ asset('assets/img/The-Leading-IT-Solutions-Company-&-Your-Partner-for-Innovations-img.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="icon-two">
                            <img src="{{ asset('assets/img/Construction-Industry-Awared-of-in-2024-Icon.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- End:: Behavioral Protection section five -->












    </div>

@endsection
