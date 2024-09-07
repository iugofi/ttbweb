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

        [data-hs-tab].active.hs-tab-active\:text-primary {
            color: rgb(0 0 0);
        }
    </style>




    <div class="content checkout-pd">
        <div class="main-content">
            <div class="container my-[3rem]">
                <div class="grid grid-cols-12 gap-6 mt-6">
                    <div class="xl:col-span-12 col-span-12 order-mobile1">
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

                </div>
                <div class="container">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0  product-checkout">
                                    <nav class="md:flex justify-evenly !border-b !border-dashed border-defaultborder dark:border-defaultborder/10"
                                        aria-label="Tabs">
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{route('user.fpay',['id' => encrypt($id_on)])}}" style="pointer-events: none" id="order-tab" data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="bi bi-patch-check me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Verification
                                        </a>
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{route('user.fpay1',['id' => encrypt($id_on)])}}" style="pointer-events: none" id="order-tab" data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="bi bi-file-person me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Personal
                                            Details
                                        </a>
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{route('user.fpay2',['id' => encrypt($id_on)])}}" style="pointer-events: none" id="order-tab" data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="ri-bank-card-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Payment
                                        </a>
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{route('user.fpay3',['id' => encrypt($id_on)])}}"  id="order-tab" data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="ri-checkbox-circle-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Confirmation
                                        </a>
                                    </nav>

                                    <div class="tab-content">
                                        <!-- Default tab content: Verification -->
                                        <div class="tab-pane text-defaulttextcolor dark:!text-defaulttextcolor/70 !border-0 !p-0"
                                            id="order-tab-pane" aria-labelledby="order-tab">
                                            <div class="p-[3rem] checkout-payment-success my-3">
                                                <div class="mb-[3rem]">
                                                    <h5 class="text-success font-semibold text-[1.25rem]">Payment
                                                        Successful...🤝</h5>
                                                </div>
                                                <div class="mb-[3rem] !inline-flex">
                                                    <img src="{{ asset('assets/images/ecommerce/png/24.png') }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="mb-6">
                                                    <p class="mb-1 text-[0.875rem]">You can track your order with Order Id
                                                        <b>SPK#1FR</b> from <a class="link-success"
                                                            href="javascript:void(0);"><u class="text-success">Track
                                                                Order</u></a>
                                                    </p>
                                                    <p class="text-[#8c9097] dark:text-white/50">Thankyou for shopping with
                                                        us.</p>
                                                </div>
                                                <a href="{{url('/')}}"
                                                    class="ti-btn bg-success text-white !font-medium">Continue Shopping<i
                                                        class="bi bi-cart ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>



                        @include('components.plan-card', ['plan' => $plan])
                    </div>
                    <!--End::row-1 -->
                </div>
            </div>
        </div>
    </div>









@endsection
