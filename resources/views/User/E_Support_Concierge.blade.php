@extends('User.Layouts.layout')

@section('title', 'virus removal service')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')

    

@section('content')


<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">



    <section class="e-suport-banner">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                    <h2>Protect Your <br> Data With Powerful</h2>
                    <h3>Cyber Security</h3>
                    <p class="mt-4 text-black">Cyber attacks can cause on average $1.5 billion to a company, with our advanced
                        AI system we can block the attack before it happens.</p>
                    <div class="bttn-box">
                        <a href="#" class="btn-home-now">Get Started Now </a>
                        <a href="#" class="btn-home-cnt ms-5">Contact Us</a>
                    </div>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                    <img src="{{asset('assets/home-two-img/banner-one-home2.png') }}" alt=""
                    class="img-fluid" width="100%">
                </div>
            </div>
        </div>
    </section>









</div>
@endsection