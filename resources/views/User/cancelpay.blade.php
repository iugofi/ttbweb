

@extends('User.Layouts.layout')

@section('title', 'Payment Cansal')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="payment-cancel">

        <meta charset="UTF-8">
        <div class="payment-cancellation" id="payment">
            <section class="section">
                <div class="container payment-cancel">
                    <div class="grid grid-cols-12 gap-6 row paymentcancel-grid d-flex">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 column cancel-left">
                           <p class="font-bold text-red-500" style="font-size: 36px; color: #383853; ">401</p>
                <p class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Oops 😢, The page you are looking for is not available.</p>
                <p class="mb-4 text-lg text-gray-600 dark:text-gray-400">We are sorry for the inconvenience. The page you are trying to access has been removed or never existed.</p>
                <div class="space">
                    <a href="https://www.nighthawk-routerlogin.com/" class="inline-block bg-[#12D2B3] text-white font-semibold px-6 py-2 rounded mt-4">
                        <i class="align-middle inline-block"></i> Back To Home
                    </a>
                    <a href="https://www.nighthawk-routerlogin.com/contact_as" class="inline-block bg-[#12D2B3] text-white font-semibold px-6 py-2 rounded mt-4">
                        <i class="align-middle inline-block"></i> Contact Support
                    </a>
                </div>
                        </div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 column cancel-left">
                             <img src="{{asset('assets/img/payment-cancel.jpg') }}" alt="Payment Cancelled Image" class="w-full h-auto rounded-lg">
                        </div></div>
                </div>
            </section>
     
        <style>
    
            .payment-cancel {
                width: 100%;
                background: white;
                border-radius: 8px;
                overflow: hidden;
                margin: 4rem auto;
                padding: 20px;
            }
    
            .payment .column {
                flex: 1;
            }
    
            .cancel-left {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .crossmark {
                font-size: 4rem;
                color: #12D2B3;
            }
    
            .space a {
                padding: 10px 20px;
                font-size: 1rem;
                color: white;
                background-color: #12D2B3;
                text-decoration: none;
                border-radius: 5px;
            }
    
            .space a:hover {
                border:  1px solid #12D2B3;
                background: transparent;
                color: #12D2B3;
            }
    
            @media (max-width: 768px) {
                .payment-container .grid {
                    display: block;
                }
    
                .payment-container {
                    margin-top: 0rem;
                    margin-bottom: 0rem;
                }
            }
        </style>
    </div>











    
</div>

         



@endsection