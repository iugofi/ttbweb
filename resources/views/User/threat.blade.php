

@extends('User.Layouts.layout')

@section('title', 'threat-protection')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


{{-- <div class="content">
    <div class="main-content"> --}}

        <section class="Phishing-banner-top">
            <div class="container main-banner-container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <h2>Phishing Refers By Hackers Cyber Criminals</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br>
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis <br>natoque penatibus et magnis .</p>
                        <a href="index.html" class="m-1 ti-btn ti-btn-primary-full mx-3">
                            Explore More
                        </a>
                        <a href="#" class="popup-youtube btn btn-white btn-circle btn-icon"><i
                                class="bx bx-play watch-icon"></i>
                            <span class="pl-2 text-black-light wtc-spn mx-2">Watch Now</a></span>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                        <img src="{{ asset('assets/img/phishing-banner-image.png') }}" alt="" class="img-fluid"
                            width="100%">
                    </div>
                </div>
            </div>
        </section>



    {{-- </div>
</div> --}}

         



@endsection