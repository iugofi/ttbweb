

@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="content">
    <div class="main-content">

        
        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Checkout</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                  <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Ecommerce
                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                  </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                    Checkout
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <div class="container">
            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xl:col-span-9 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Overview
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll
                                                never share your email
                                                with
                                                anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check !ps-0">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ps-2" for="exampleCheck1">Check
                                                me out</label>
                                        </div>
                                        <button type="submit" class="ti-btn ti-btn-primary-full">Submit</button>
                                    </form>
                                </div>
                                <div class="box-footer hidden !border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;form&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="exampleInputEmail1" class="form-label"&gt;Email
                address&lt;/label&gt;
            &lt;input type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp"&gt;
            &lt;div id="emailHelp" class="form-text"&gt;We'll
                never share your email
                with
                anyone else.&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="exampleInputPassword1" class="form-label"&gt;Password&lt;/label&gt;
            &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
        &lt;/div&gt;
        &lt;div class="mb-3 form-check !ps-0"&gt;
            &lt;input type="checkbox" class="form-check-input" id="exampleCheck1"&gt;
            &lt;label class="form-check-label ps-2" for="exampleCheck1"&gt;Check
                me out&lt;/label&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="ti-btn ti-btn-primary-full"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-3 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title me-1">Order Summary <span class="badge bg-primary/10 text-primary !border-b-0 !rounded-full">02</span></div>
                        </div>
                        <div class="box-body !p-0">
                            <ul class="list-group mb-0 !border-0 !rounded-0">
                                <li class="list-group-item !border-t-0 !border-s-0 !border-e-0">
                                    <div class="flex items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg bg-light">
                                                <img src="assets/images/ecommerce/png/1.png" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="mb-0 font-semibold">Blue sweatshirt</p>
                                            <p class="mb-0 text-[#8c9097] dark:text-white/50 text-[0.75rem]">Quantity : 2  <span class="badge bg-success/10 text-success ms-4">30% Off</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line text-[1rem] text-[#8c9097] dark:text-white/50"></i>
                                                </a>
                                            </p>
                                            <p class="mb-0 text-[0.875rem] font-semibold">$189<span class="ms-1 text-[#8c9097] dark:text-white/50 text-[0.6875rem]"><s>$329</s></span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item  !border-s-0 !border-e-0 dark:border-defaultborder/10 border-start-0 border-end-0">
                                    <div class="flex items-center flex-wrap">
                                        <div class="me-2">
                                            <span class="avatar avatar-lg bg-light">
                                                <img src="assets/images/ecommerce/png/7.png" alt="">
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="mb-0 font-semibold">Denim Jacket</p>
                                            <p class="mb-0 text-[#8c9097] dark:text-white/50 text-[0.75rem]">Quantity : 1  <span class="badge bg-success/10 text-success ms-4">10% Off</span></p>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-end">
                                                <a aria-label="anchor" href="javascript:void(0)">
                                                    <i class="ri-close-line text-[1rem] text-[#8c9097] dark:text-white/50"></i>
                                                </a>
                                            </p>
                                            <p class="mb-0 text-[0.875rem] font-semibold">$129<span class="ms-1 text-[#8c9097] dark:text-white/50 text-[0.6875rem]"><s>$139</s></span></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                <div class="flex items-center justify-between flex-wrap">
                                    <div class="text-[0.75rem] font-semibold bg-primary/10 text-primary p-1 rounded-full">SPRUKO25</div>
                                    <div class="text-success">COUPON APPLIED</div>
                                </div>
                            </div>
                            <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-[#8c9097] dark:text-white/50 opacity-[0.7]">Sub Total</div>
                                    <div class="font-semibold text-[0.875rem]">$318</div>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-[#8c9097] dark:text-white/50 opacity-[0.7]">Discount</div>
                                    <div class="font-semibold text-[0.875rem] text-success">10% - $31.8</div>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-[#8c9097] dark:text-white/50 opacity-[0.7]">Delivery Charges</div>
                                    <div class="font-semibold text-[0.875rem] text-danger">- $29</div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="text-[#8c9097] dark:text-white/50 opacity-[0.7]">Service Tax (18%)</div>
                                    <div class="font-semibold text-[0.875rem]">- $45.29</div>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center justify-between">
                                    <div class="text-[0.9375rem]">Total :</div>
                                    <div class="font-semibold text-[1rem] text-dark"> $1,387</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->
        </div>
        

    </div>
</div>


         



@endsection