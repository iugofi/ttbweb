@extends('User.Layouts.layout')

@section('title', 'Home')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


    <div class="content">
        <div class="main-content">



            <section class="home-new-banner">
                <div class="container">
                    <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box custom-box">

                                <div class="swiper vertical vertical-mouse-control !h-[352px]">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="assets/images/media/media-28.jpg"
                                                class="!rounded-md" alt="">hello </div>
                                        <div class="swiper-slide"><img src="assets/images/media/media-30.jpg"
                                                class="!rounded-md" alt="">neeraj</div>
                                        <div class="swiper-slide"><img src="assets/images/media/media-32.jpg"
                                                class="!rounded-md" alt="">kunal</div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>





@endsection
