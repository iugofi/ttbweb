

@extends('User.Layouts.layout')

@section('title', 'Payment Cansal')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

    <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">

        <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70" id="totel-internet-security">
            <meta charset="UTF-8">
            <div class="payment-cancellation" id="payment">
                <section class="section">
                    <div class="container payment-cancel">
                        <div class="grid grid-cols-12 gap-6 row paymentcancel-grid">
                            <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 column cancel-left">
                                <div class="crossmark">✗</div>
                                <h1>Payment Cancelled</h1>
                                <p>Unfortunately, your payment was not successful. Please try again.</p><br>
                                <a href="https://www.nighthawk-routerlogin.com/vpn-shield" class="bttns">Try Again</a>
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
        
                .payment-cancel {
                    max-width: 900px;
                    width: 100%;
                    background: white;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        
                .cancellation-image {
                    max-width: 100%;
                    height: 100%;
                }
                .paymentcancel-grid {
                 display: block;
                }
                .crossmark {
                    font-size: 4rem;
                    color: #12D2B3;
                }
        
                .bttns {
                    display: inline-block;
                    padding: 10px 20px;
                    font-size: 1rem;
                    color: white;
                    background-color: #12D2B3;
                    text-decoration: none;
                    border-radius: 5px;
                    transition: background-color 0.3s;
                }
        
                .bttn:hover {
                    background-color: #12D2B3;
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