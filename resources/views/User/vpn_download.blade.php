@extends('User.Layouts.layout')

@section('title', 'Download')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


    <div class="content">
        <div class="main-content">

            <section class="vpn-download-one">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                            <h2>Add An Extra Layer Of <span>Protection</span> To Your Device.</h2>
                            <p class="mt-2">Select the option that works best for you, below: </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 pt-top">
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 col-span-12 text-center">
                        </div>
                        <div
                            class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 col-span-12 text-center box-down">
                            <img src="{{ asset('assets/img/mac.png') }}" alt="" class="img-fluid" width="25%">
                            <div class="btn-down">
                                <a href="#">Download For Mac</a>

                            </div>
                            <span> X10.15 or above</span>
                        </div>
                        <div
                            class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 col-span-12 text-center box-down">
                            <img src="{{ asset('assets/img/ios.png') }}" alt="" class="img-fluid" width="25%">
                            <div class="btn-down">
                                <a href="#">Download For iOS</a>

                            </div>
                            <span> X10.15 or above</span>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 col-span-12 text-center">
                        </div>
                    </div>
                </div>
            </section>


            <section class="vpn-download-two">
                <div class="container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 cnt-download">
                            <h3>About </h3>
                            <p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.</p>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 cnt-download">
                            <h3>Feedback </h3>
                            <p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.</p>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 col-span-12 cnt-download">
                            <h3>Source </h3>
                            <p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>





@endsection
