

@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


<div class="content">
    <div class="main-content">

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




        </div>









        

    </div>
</div>
    

         



@endsection