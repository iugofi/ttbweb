@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')
@section('content')


    <style>
        body {
            background-color: rgb(var(--body-bg));
        }
    </style>




<div class="content">
    <div class="main-content">
        <div class="container my-[3rem]">
            <div class="grid grid-cols-12 gap-6 mt-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="team-header">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="h5 font-semibold mb-0">Checkout</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-8 col-span-12">
                    <div class="team-members" id="team-members">
                        <div class="grid grid-cols-12 gap-x-6">
                            
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Email Verification
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                            <div class="md:col-span-12 col-span-12 mb-4">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="md:col-span-6 col-span-12 mb-4">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                            </div>
                                            <div class="md:col-span-6 col-span-12 mb-4">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                            </div>
                                            <div class="md:col-span-12 col-span-12 md:flex md:justify-end">
                                                <button type="submit" class="ti-btn ti-btn-primary-full !mb-0">Sign in</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-x-6">
                            
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Payment
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                            
                                            <div class="md:col-span-12 col-span-12 md:flex md:justify-end">
                                                <button type="submit" class="ti-btn ti-btn-primary-full !mb-0">Pay With Stripe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="xl:col-span-4 col-span-12">
                    <div class="team-groups">
                        <div class="box">
                            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0">
                                <div class="box">
                                    <div class="box-body">
                                        <img src="assets/img/ttb antivirus box design.jpg" class="card-img mb-4 !rounded-md" alt="...">
                                        <h6 class="box-title font-semibold">TTB VPN SHIELD</h6>
                                        <p class="card-text mb-4">One Device/One Month</p>
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Purchase</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
