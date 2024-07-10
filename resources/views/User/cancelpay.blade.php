

@extends('User.Layouts.layout')

@section('title', 'Payment Cansal')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900" id="particles-js">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="payment-cancel">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="cancel-left">
                    <p class="text-6xl font-bold text-red-500">401</p>
                    <p class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Oops 😢, The page you are looking for is not available.</p>
                    <p class="mb-4 text-gray-600 dark:text-gray-400">We are sorry for the inconvenience. The page you are trying to access has been removed or never existed.</p>
                    <div class="space-x-4">
                        <a href="index.html" class="inline-block bg-[#12D2B3] text-white font-semibold px-6 py-2 rounded mt-4">
                            <i class="ri-arrow-left-line align-middle inline-block"></i> Back To Home
                        </a>
                        <a href="index.html" class="inline-block bg-[#12D2B3] text-white font-semibold px-6 py-2 rounded mt-4">
                            <i class="ri-arrow-left-line align-middle inline-block"></i> Contact Support
                        </a>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="cancel-left">
                    <img src="{{asset('assets/img/payment-cancel.jpg') }}" alt="Payment Cancelled Image" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>
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

    .cancel-left {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .payment-cancel img {
        width: 65%;
    }

    @media (max-width: 1024px) {
        .payment-cancel img {
            width: 80%;
        }
    }

    @media (max-width: 768px) {
        .payment-cancel img {
            width: 100%;
        }
    }
</style>












    
</div>

         



@endsection