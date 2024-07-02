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


    {{-- <meta charset="UTF-8">

        <meta charset="UTF-8">

        <div class="payment-success" id="paymet">
         <section class="section">
          <div class="container paymet-container">
            <div class="grid grid-cols-12 gap-6 row payment">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12column right">
                    <img src="{{ asset('assets/img/payment-success.jpg') }}" alt="Success Image" class="success-image">
                   
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 column left">
                    <div class="checkmark">✓</div>
                    <h1>Payment Successful</h1>
                    <p>Thank you for your purchase!</p><br>
                    <a href="https://www.nighthawk-routerlogin.com/signin/" class="bttn">Go to Dashboard</a>
                    <div class="mb-5 mt-5">
                        <div class="btn-list">
                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm !mb-0 ti-btn-primary me-[0.365rem]">
                                <i class="ri-facebook-line font-bold"></i>
                            </button>
                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm !mb-0 ti-btn-secondary me-[0.365rem]">
                                <i class="ri-twitter-line font-bold"></i>
                            </button>
                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm !mb-0 ti-btn-warning me-[0.365rem]">
                                <i class="ri-instagram-line font-bold"></i>
                            </button>
                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm !mb-0 ti-btn-success me-[0.365rem]">
                                <i class="ri-github-line font-bold"></i>
                            </button>
                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm !mb-0 ti-btn-danger">
                                <i class="ri-youtube-line font-bold"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
          </div>
         </section>
        </div>

   
    <style>
        .paymet-container {
            max-width: 1080px;
             width: 100%;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 6rem;
            margin-bottom: 3rem;
            padding: 0;
        }
        .payment .column {
            flex: 1;
        }
        
        .left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
         
        .right {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #12D2B3;
        }
        
        .success-image {
            max-width: 100%;
            height: 100%;
        }
        
        .checkmark {
            font-size: 4rem;
            color: #12D2B3;
        }
        
        .bttn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #12D2B3;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #12D2B3;
        }
        
        @media (max-width: 768px) {
            .paymet-container .grid {
             display: block;
            }
            .paymet-container {
            margin-top: 0rem;
            margin-bottom: 0rem;
            }
        }
        
        </style>
    












        
    </div> --}}

    <!-- Mirrored from php.spruko.com/tailwind/ynex/ynex/pages/error500.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 10:03:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Ynex - PHP Tailwind CSS Admin & Dashboard Template">
    <meta name="keywords" content="admin template, admin dashboard, php admin panel, admin, tailwind css dashboard, php admin dashboard, tailwind admin template, tailwind template, php dashboard, dashboard, tailwind, tailwind dashboard, tailwind css, tailwind css template">
    
    <!-- TITLE -->
    <title> Ynex - PHP Tailwind CSS Admin & Dashboard Template </title>

    <!-- FAVICON -->
    <link rel="icon" href="https://php.spruko.com/tailwind/ynex/ynex/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="assets/css/icons.css" rel="stylesheet">
    
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- MAIN JS -->
    <script src="assets/js/authentication-main.js"></script>

    



</head>

<body>



    <div class="page error-bg dark:!bg-bodybg" id="particles-js">
        <!-- Start::error-page -->
        <div class="error-page">
            <div class="container text-defaulttextcolor dark:text-defaulttextcolor/70 text-defaultsize">
                <div class="text-center p-5 my-auto">
                    <div class="flex items-center justify-center h-full">
                      <div class="xl:col-span-3"></div>
                        <div class="xl:col-span-6 col-span-12">
                            <!-- <p class="error-text sm:mb-0 mb-2">500</p> -->
                            <img src="{{asset('assets/img/paysuccess.jpg')}}" alt="" style="width:70%; height: auto; margin: auto;">
                            <p class="text-[1.125rem] font-semibold mb-4">Oops 😭,The page you are looking for is not available.</p>
                            <div class="flex justify-center items-center mb-[3rem]">
                                <div class="xl:col-span-6 w-[50%]">
                                    <p class="mb-0 opacity-[0.7]">We are sorry for the inconvenience,The page you are trying to access has been removed or never been existed.</p>
                                </div>
                            </div>
                            <a href="index.html" class="ti-btn bg-primary text-white font-semibold"><i class="ri-arrow-left-line align-middle inline-block"></i>BACK TO HOME</a>
                        </div>
                        <div class="xl:col-span-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- SCRIPTS -->

    
    <!-- Particles JS -->
    <script src="assets/libs/particles.js/particles.js"></script>

    <!-- Error JS -->
    <script src="assets/js/error.js"></script>


    <!-- END SCRIPTS -->

</div>

         



@endsection