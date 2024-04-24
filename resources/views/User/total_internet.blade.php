@extends('User.Layouts.layout')

@section('title', 'Total Internet Protection TTB - TTB Antivirus')
@section('Description', 'Surfing the internet has become very vulnerable nowadays. Secure your devices and surf worry-free with total internet protection TTB antivirus has to offer you.')
@section('keywords', '')
@section('canonical', route('user.totalinternet'))



@section('content')

<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">

        <!-- Start::first Content -->
        <div class="landing-banner" id="internet-security">
            <section class="section">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                            <div class="lg:py-[3rem]">
                                <p class="landing-banner-heading mb-4 opacity-[0.9] pt-5"><span class="first-color">A single solution to all <br> your security needs.</p>
                                <div class="text-[1rem] mb-[1.3rem] text-dark opacity-[0.9] text-dark">Holisticly procrastinate mission-critical convergence with reliable customer service. Assertively underwhelm idea-sharing for impactful solutions.
                                </div>  
                                <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                                    Download Now
                                    {{-- <i class="ri-download-cloud-2-fill ms-2 align-middle"></i> --}}
                                    <i class='bx bxs-cloud-download icon-hm'></i>
                                </a>
                              
                            </div>
                            {{-- <img src="{{ asset('assets/img/icon-img.png') }}" class="img-fluid" width="85%"> --}}
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">
                           
                            <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                                <img src="{{ asset('assets/img/Banner-Phone.png') }}" alt="" class="img-fluid" width="85%">
                            </div>
                           
                            {{-- <div class="dark-shap-two"><img src="{{ asset('assets/img/Shape-2.png') }}" alt=""
                                    class="img-fluid"></div> --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End::first Content -->

         <!-- Start::second Content -->
         <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] third-back internet2-section">
         <div class="sectiontwo-heading pb-5 pt-5" style="text-align: center;">
            <h2 class="landing-banner-heading mb-4 opacity-[0.9] pt-5"><span class="text-dark" style="font-size:40px; font-weight:600;">Our Work Process</h2>
                <div class="text-[1rem] mb-[1.3rem] text-black-light opacity-[0.9] dark-text pb-5">Holisticly procrastinate mission-critical convergence with reliable customer service.<br> Assertively underwhelm idea-sharing for impactful solutions.
            </div>
            <div class="container main-banner-container section-two-icon">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="work-process-wrap">
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-project-diagram color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5 style="font-weight:600;">Planning Idea</h5>
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
                                            <h5 style="font-weight:600;">Developed Final Product</h5>
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
                                            <h5 style="font-weight:600;">Deliver to Customer</h5>
                                            <p>Monotonectally plagiarize synergistic e-business for stand-alone communities. Professionally enhance visionary manufactured products progressive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">

                        <div class="text-end flex justify-end w-full">
                            <img src="{{ asset('assets/img/Secnd-section-img-2.png') }}" alt="" class="img-fluid" width="100%">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End::second Content -->

        <!-- Start::third Content -->

        <section class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70" id="features">
            <div class="container text-center">
                <div class="forth heading" style="text-align: center; padding: 0 10rem; font-size: 16px;">
                    <h2 class="landing-banner-heading mb-4 pb-5 opacity-[0.9] pt-5"><span class="text-dark" style="font-size:40px; font-weight:600;">Privacy that you can rely on...</h2>
                    <p class="card-text mb-4 pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa iusto perspiciatis rerum ex sint? Possimus harum aliquid molestiae voluptates. Laborum totam explicabo maiores qui culpa? Corporis corrupti aperiam cupiditate officia.</p>
                </div>
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
 
         <!-- End::third Content -->

         <!-- Start::forth Content -->
         <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="features">
            <div class="container main-banner-container">
                <div class="forth heading" style="text-align: center; padding: 0 10rem; font-size: 16px;">
                    <h3 class="landing-banner-heading mb-4 pb-5 opacity-[0.9] pt-5"><span class="text-dark" style="font-size:40px; font-weight:600;">System Requirements</h3>
                    <p class="card-text mb-4 pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa iusto perspiciatis rerum ex sint? Possimus harum aliquid molestiae voluptates. Laborum totam explicabo maiores qui culpa? Corporis corrupti aperiam cupiditate officia.</p>
                </div>
                <div class="grid grid-cols-12 gap-6 forth-s-main">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="xl:col-span-3 col-span-12 border-custom-main">
                                <div class="box-header forth-s-inner">
                                    <div class="flex align-center w-full">
                                        <img src="/assets/img/Hardware-Requirement.png" alt="img" class="avatar avatar-rounded me-2 !mb-0">
                                       
                                </div>
                                <div class="box-body forth-section">
                                       <div class="my-auto">
                                            <div class="text-[.9375rem] font-semibold" style="font-size: 18px; font-weight: 700;">24/7 support</div>
                                          
                                        </div><br>
                                         - Lorem ipsum dolor sit amet consectetur
                                    <br> - Lorem ipsum dolor, sit amet consectetur
                                    <br> - Lorem ipsum dolor sit amet consectetur
                                    <br> - Lorem ipsum dolor sit amet, consectetur
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <div class="xl:col-span-3 col-span-12 border-custom-main">
                                <div class="box-header forth-s-inner">
                                    <div class="flex align-center w-full">
                                        <img src="/assets/img/OS-Requirement.png" alt="img" class="avatar avatar-rounded me-2 !mb-0">
                                       
                                </div>
                                <div class="box-body forth-section">
                                       <div class="my-auto">
                                            <div class="text-[.9375rem] font-semibold" style="font-size: 18px; font-weight: 700;">24/7 support</div>
                                          
                                        </div><br>
                                         - Lorem ipsum dolor sit amet consectetur
                                    <br> - Lorem ipsum dolor, sit amet consectetur
                                    <br> - Lorem ipsum dolor sit amet consectetur
                                    <br> - Lorem ipsum dolor sit amet, consectetur
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- End::forth Content -->

      <!-- Start::fifth Content -->
      <div class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]">
        <div class="container text-center">
            <p class="text-[0.75rem] font-semibold text-success mb-1"><span class="landing-section-heading">F.A.Q</span>
            </p>
            <h3 class="font-semibold mb-2">Frequently asked questions ?</h3>
            <div class="grid grid-cols-12 justify-center">
                <div class="col-span-12">
                    <p class="text-[#8c9097] dark:text-white/50 text-[0.9375rem] mb-12 font-normal">We have shared some
                        of the most frequently asked questions to help you out.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 text-start">
                <div class="xl:col-span-12 col-span-12">
                    <div class="grid grid-cols-12 gap-6">
                        <div
                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-1 col-span-12 boxbordercus">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0">
                                    <div class="px-1 py-2 bg-success/30"></div>
                                    <div class="!p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <div class="text-[1.125rem] font-semibold">Team</div>
                                            <div>
                                                <span class="badge bg-success/10 text-success">
                                                    For Small Teams
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-[1.5625rem] font-bold mb-1">$149<sub
                                                class="text-[#8c9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                                Per Month</sub></div>
                                        <div class="mb-1 text-[#8c9097] dark:text-white/50">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                        <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                        <ul class="list-none mb-0">
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 Free</strong>Websites
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 GB</strong>Hard disk storage
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">2 Years</strong>Email support
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5</strong>Licenses
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Custom SEO optimizataion
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Chat Support   
                                                </span>
                                            </li>
                                            <li class="grid">
                                                <button type="button" class="ti-btn ti-btn-light ">Choose Plan</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-1 col-span-12 boxbordercus">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0">
                                    <div class="px-1 py-2 bg-success/30"></div>
                                    <div class="!p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <div class="text-[1.125rem] font-semibold">Team</div>
                                            <div>
                                                <span class="badge bg-success/10 text-success">
                                                    For Small Teams
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-[1.5625rem] font-bold mb-1">$149<sub
                                                class="text-[#8c9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                                Per Month</sub></div>
                                        <div class="mb-1 text-[#8c9097] dark:text-white/50">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                        <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                        <ul class="list-none mb-0">
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 Free</strong>Websites
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 GB</strong>Hard disk storage
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">2 Years</strong>Email support
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5</strong>Licenses
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Custom SEO optimizataion
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Chat Support
                                                </span>
                                            </li>
                                            <li class="grid">
                                                <button type="button" class="ti-btn ti-btn-light ">Choose
                                                    Plan</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="xxl:col-span-4 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-1 col-span-12 boxbordercus">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0">
                                    <div class="px-1 py-2 bg-success/30"></div>
                                    <div class="!p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <div class="text-[1.125rem] font-semibold">Team</div>
                                            <div>
                                                <span class="badge bg-success/10 text-success">
                                                    For Small Teams
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-[1.5625rem] font-bold mb-1">$149<sub
                                                class="text-[#8c9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                                Per Month</sub></div>
                                        <div class="mb-1 text-[#8c9097] dark:text-white/50">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                        <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                        <ul class="list-none mb-0">
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 Free</strong>Websites
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5 GB</strong>Hard disk storage
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">2 Years</strong>Email support
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                </span>
                                                <span>
                                                    <strong class="me-1">5</strong>Licenses
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Custom SEO optimizataion
                                                </span>
                                            </li>
                                            <li class="flex items-center mb-4">
                                                <span class="me-2">
                                                    <i
                                                        class="ri-checkbox-circle-line text-[.9375rem] text-[#8c9097] dark:text-white/50 opacity-[0.3]"></i>
                                                </span>
                                                <span>
                                                    Chat Support
                                                </span>
                                            </li>
                                            <li class="grid">
                                                <button type="button" class="ti-btn ti-btn-light ">Choose
                                                    Plan</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- End::fifth Content -->

@endsection