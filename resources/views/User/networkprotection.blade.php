@extends('User.Layouts.layout')

@section('title', 'Network Protection')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

        <!-- Start:: network protection section one -->

        <div class="network-protection" id="endpoint">
            <section class="section sect-ban">
                <div class="container network-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="lg:py-[3rem] text-vartical" style="position: relative; top: 10rem;">
                                <h1 class="text-left font-semibold mb-2 text-[2rem] text-center" style="color: #fff;">Secure
                                    Your Network Perimeters Using <br> Our Enhanced Security Solution <br> <span
                                        class="text-color-ttb heading-style">TTB Network Protection</span></h1>
                                <div class="spacing-top-cl text-center mt-5 mb-5">
                                    <a href="https://www.trustpilot.com/review/ttbinternetsecurity.com?utm_medium=trustbox&utm_source=MicroReviewCount"
                                        target="_blank">
                                        <span class="dark-black">Excellent</span><img
                                            src="{{ asset('assets/home-two-img/Review.png') }}">
                                        <span class="dark-black">18,249
                                            Reviews on</span><i class="fa-solid fa-star"></i></a><a
                                        href="https://www.av-test.org/en/antivirus/mobile-devices/manufacturer/ttb/"
                                        target="_blank"><img class="logo-av1"
                                            src="{{ asset('assets/home-two-img/AV-Test.png') }}"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section class="">
            <div class="container">
                <div class="grid grid-cols-12 gap-6">
                    <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">
                        <h2>Introduction</h2>
                        <p>Generally, network protection involves multi-layered defense to keep the users, infrastructure,
                            and networking components protected from misuse & unauthorized access. Likewise, in this current
                            threat landscape, TTB helps protect your network from such threats.
                        </p>
                    </div>
                </div>
            </div>
            <section>

            </section>



        </div>


















    </div>
    {{-- <script src="{{ asset('assets/js/landing.js') }}"></script> --}}
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
@endsection
