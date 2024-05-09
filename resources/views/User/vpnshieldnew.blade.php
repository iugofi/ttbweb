@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')

<section class="vpn-banner-top">

    <div class="container main-banner-container">
        <div class="grid grid-cols-12 gap-6">
            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                <div class="lg:py-[3rem]">
                    <h2>Explore The World Wide Easy With Netric VPN</h2>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
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
                    <h3>World's Best VPN Services That Provide Own DNS System</h3>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                    <p>ILorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <h6 class="font-semibold mb-2">Project Dependencies</h6>

                    <div class="grid grid-cols-12 justify-center">
                        <div class="xl:col-span-5 col-span-12">
                            <div class="border p-4">
                                <p class="text-[0.75rem] font-semibold mb-0 text-[#8C9097] dark:text-white/50">Html<span
                                        class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">25%</span>
                                </p>
                                <div class="progress progress-xs mb-4 progress-animate">
                                    <div class="progress-bar bg-primary w-1/2">
                                    </div>
                                </div>
                                <p class="text-[0.75rem] font-semibold mb-0 text-[#8C9097] dark:text-white/50">Css<span
                                        class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">35%</span>
                                </p>
                                <div class="progress progress-xs mb-4 progress-animate ">
                                    <div class="progress-bar !rounded-none !bg-secondary w-[35%]">
                                    </div>
                                </div>
                                <p class="text-[0.75rem] font-semibold mb-0 text-[#8C9097] dark:text-white/50">Js<span
                                        class="ltr:float-right rtl:float-left text-[0.625rem] font-normal">40%</span>
                                </p>
                                <div class="progress progress-xs mb-0 progress-animate ">
                                    <div class="progress-bar !rounded-e-full !bg-danger w-2/5">
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

























@section('content')

















@endsection
