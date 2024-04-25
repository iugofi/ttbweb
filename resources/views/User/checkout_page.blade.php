

@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

    
    <section
    class="section !bg-[#f9fafb] dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70 mt-8"
    id="features">
    <div class="container main-banner-container">
       
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4 ">
                    <ul class="list-group mb-3 sticky-top">
                        <li class="list-group-item d-flex justify-content-between lh-condensed p-0">
                            <div>
                                <img src="D:/Neeraj Chaudhary/z-files/Checkout-page/images/ttb antivirus box design.jpg"
                                    class="img-fluid ">
                            </div>

                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0 pt-2 pb-2">TTB VPN SHIELD</h6>
                                <small class="text-muted">One Device/One Month</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6>Product and Offer Details</h6>
                                <p class="text-muted">You are purchasing a one year subscription. We will remind you 30
                                    days before you are charged. You can turn off auto-renewal at any time from the My
                                    Account page . For more details on auto-renewal, see here and the full offer details
                                    here.</p>
                            </div>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Price :-</span>
                            <strong>$7.99</strong>
                        </li>
                        <div class="row mt-4 pro-icon">
                            <div class="col-md-4 text-center">
                                <img src="D:/Neeraj Chaudhary/z-files/Checkout-page/images/icon one.png"
                                    class="img-fluid" width="45%">
                                <p>Our Virus Protection Pledge</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="D:/Neeraj Chaudhary/z-files/Checkout-page/images/icon two.png"
                                    class="img-fluid" width="45%">
                                <p>30-day money back guarantee</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="D:/Neeraj Chaudhary/z-files/Checkout-page/images/icon three.png"
                                    class="img-fluid" width="45%">
                                <p>24/7 online security experts</p>
                            </div>
                        </div>
                    </ul>
                    <!-- <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form> -->
                </div>

                <div class="col-md-8 order-md-1">
                    <div class="pay-details">
                        <h4 class="mb-3">1. E-mail</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="mb-3">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                        required="">
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name </label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                        required="">
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>

                    </div>
                    <div class="Pay-section">
                        <h4 class="mb-3">2. Payment</h4>

                        <button type="submit">Pay With Stripe</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


         



@endsection