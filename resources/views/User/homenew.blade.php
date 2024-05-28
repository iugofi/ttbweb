

@extends('User.Layouts.layout')

@section('title', 'Home')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


<div class="content" style="background-color:#F3F2EA;">
    <div class="main-content">

    <section class="banner-home-one">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                     <h2>Protect Your <br> Data With Powerful</h2>
                     <h3>Cyber Security</h3>
                     <p class="mt-4">Cyber attacks can cause on average $1.5 billion to a company, with our advanced AI system we can block the attack before it happens.</p>
                    <div class="bttn-box"> 
                     <a href="#" class="btn-home-now">Get Started Now </a>
                     <a href="#" class="btn-home-cnt ms-5">Contact Us</a>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                     
                </div>
            </div>
        </div>
    </section>    
    </div>
</div>

<section class="section-home-two">
    <div class="grid grid-cols-12 gap-6">
        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12 text-center">

             <div class="container-slide pt-5 pt-5 mt-5 mb-5">
                <h2>Trusted by millions of customers.</h2>
                <div class="photobanner__wrap pt-5 pb-5 mt-5 mb-5">
                    <div class="photobanner">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="photobanner">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                        <img src="{{ asset('assets/img/brand.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
</section>
         



@endsection