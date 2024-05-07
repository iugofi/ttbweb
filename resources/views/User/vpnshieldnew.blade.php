

@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')

<section class="vpn-banner-top">

        <div class="container main-banner-container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                    <div class="lg:py-[3rem]">
                        
                        <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                            Download Now
                            <i class='bx bxs-cloud-download icon-hm'></i>
                        </a>
                        <a href="#" class="popup-youtube btn btn-white btn-circle btn-icon"><i class="bx bx-play watch-icon"></i> </a> 
                        <span class="pl-2 text-black-light wtc-spn"> Watch Now</span>
                    </div>
                </div>
                <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12">
                   
                    <div class="text-end landing-main-image landing-heading-img flex justify-end w-full">
                        <img src="{{ asset('assets/img2/section-one-ttb.gif') }}" alt="" class="img-fluid" width="88%">
                    </div>
                   
                </div>
            </div>
        </div>

</section>





























@section('content')






    






         



@endsection