

@extends('User.Layouts.layout')

@section('title', 'Payment Success ')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


<div class="content">
    <div class="main-content">


        <meta charset="UTF-8">

        <div class="container">
            <div class="row payment">
                <div class="column left">
                    <div class="checkmark">✓</div>
                    <h1>Payment Successful</h1>
                    <p>Thank you for your purchase!</p>
                    <a href="{{route('user.signin')}}" class="btn">Go to Dashboard</a>
                </div>
                <div class="column right">
                    <img src="{{asset('assets/img/payment-success.jpg')}}" alt="Success Image" class="success-image">
                   
                </div>
            </div>
        </div>
    </body>
    </html>
    <style>
    
    /* Reset some basic styles */
    body, h1, p, a {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f9;
    }
    
    .container {
        max-width: 900px;
        width: 100%;
        background: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .row {
        display: flex;
        flex-wrap: wrap;
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
        height: auto;
        border-radius: 8px;
    }
    
    .checkmark {
        font-size: 4rem;
        color: #4CAF50;
    }
    
    h1 {
        font-size: 2rem;
        margin: 20px 0;
        color: #333;
    }
    
    p {
        font-size: 1rem;
        color: #777;
        margin-bottom: 20px;
    }
    
    .btn {
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
        .row {
            flex-direction: column;
        }
    
        .left, .right {
            padding: 15px;
        }
    
        h1 {
            font-size: 1.5rem;
        }
    
        p {
            font-size: 0.9rem;
        }
    
        .btn {
            font-size: 0.9rem;
        }
    }
    
    
    </style>
    



        
    </div>
</div>

         



@endsection