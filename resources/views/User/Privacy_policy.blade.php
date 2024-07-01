

@extends('User.Layouts.layout')

@section('title', 'Privacy policy')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">

        <!-- Start::first Content -->
        <div class="landing-banner" id="internet-security">
            <section class="section">
                <div class="container main-banner-container">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12">
                            <div class="lg:py-[3rem]">
                                <p class="landing-banner-heading mb-4 opacity-[0.9] pt-5"><span class="first-color">A single
                                        solution to all <br> your security needs.</p>
                                <div class="text-[1rem] mb-[1.3rem] text-dark opacity-[0.9] text-dark" style="color: #000;">Holisticly
                                    procrastinate mission-critical convergence with reliable customer service. Assertively
                                    underwhelm idea-sharing for impactful solutions.
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
                                <img src="{{ asset('assets/img/Banner-Phone.png') }}" alt="" class="img-fluid"
                                    width="85%">
                            </div>

                            {{-- <div class="dark-shap-two"><img src="{{ asset('assets/img/Shape-2.png') }}" alt=""
                                    class="img-fluid"></div> --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End::first Content -->





























</div>

@endsection