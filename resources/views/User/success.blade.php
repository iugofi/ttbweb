

@extends('User.Layouts.layout')

@section('title', 'Payment Success ')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">


    <meta charset="UTF-8">

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
    












        
    </div>
</div>

         



@endsection