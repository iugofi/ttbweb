@extends('User.Layouts.layout')

@section('title', 'Payment Success ')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')


@section('content')
<script>
document.addEventListener('DOMContentLoaded',(event)=>{

let hidecon=document.querySelector('.landing-main-footer');
hidecon.style.display="none";
let hideheader=document.querySelector('.app-sidebar');
hideheader.style.display="none";
let hidefooter=document.querySelector('.landing-footer');
hidefooter.style.display="none";
});

</script>

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">

<style>
        @media (min-width: 320px) and (max-width: 767px) {
            img.payment-success-img {
                width: 100% !important;
            }
        }

    </style>

    <div class="page error-bg dark:!bg-bodybg" id="particles-js">
        <!-- Start::error-page -->
        <div class="error-page">
            <div class="container text-defaulttextcolor dark:text-defaulttextcolor/70 text-defaultsize">
                <div class="text-center p-5 my-auto">
                    <div class="flex items-center justify-center h-full">
                      <div class="xl:col-span-3"></div>
                        <div class="xl:col-span-6 col-span-12">
                            <!-- <p class="error-text sm:mb-0 mb-2">500</p> -->
                            <img src="{{asset('assets/img/paysuccess.jpg')}}" alt="" style="width:60%; height: auto; margin: auto;" class="payment-success-img">
                            <p class="text-[1.125rem] font-semibold mb-4">Payment Successful</p>
                            <div class="flex justify-center items-center mb-5">
                                <div class="xl:col-span-6 w-[50%]">
                                    <p class="mb-0 opacity-[0.7]">Thank you for your purchase!</p> 
                                </div>
                            </div>
                            <a href="{{route('user.index')}}" class="ti-btn bg-primary text-white font-semibold"><i class="ri-arrow-left-line align-middle inline-block"></i>BACK TO HOME</a>
                        </div>
                        <div class="xl:col-span-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>

         



@endsection