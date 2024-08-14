@extends('Admin.Layouts.layout')

@section('title', 'Mail Edit')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')



    <div class="content">
        <div class="main-content">
            <div class="block justify-between page-header md:flex">
                <div>
                    {{-- <h3
                class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                Admin Create </h3> --}}
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Mail Edit
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Mail Edit
                    </li>
                </ol>
            </div>
            <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header block !justify-start">
                        <div class="sm:flex block items-center w-full">
                            <div class="me-2">
                                <span class="avatar bg-light avatar-md mb-1">
                                    <img src="assets/images/ecommerce/png/1.png" alt="">
                                </span>
                            </div>
                            <div class="flex-grow">
                                <a href="javascript:void(0)">
                                    <span class="text-[0.875rem] font-semibold">Denim Zep.Co Sweat Shirt</span>
                                </a>
                                <span class="block text-success">$1,299</span>
                            </div>
                            <div class="sm:text-center">
                                <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                <span class="sm:block">#SPK-1203</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="flex items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 font-semibold">Delivery Address</p>
                                <p class="text-[#8c9097] dark:text-white/50 mb-0">
                                    mig-1-11,monroe street, georgetown, Washington D.C
                                </p>
                            </div>
                            <div class="delivery-date text-center ms-auto">
                                <span class="text-[1.125rem] text-primary font-bold">13</span>
                                <span class="font-semibold">Dec</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer sm:flex block items-center w-full justify-between">
                        <div><span class="text-[#8c9097] dark:text-white/50 me-2">Status:</span><span class="badge bg-success/10 text-success">Shipped</span></div>
                        <div class="sm:mt-0 mt-2">
                            <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header block !justify-start">
                        <div class="sm:flex block items-center w-full">
                            <div class="me-2">
                                <span class="avatar bg-light avatar-md mb-1">
                                    <img src="assets/images/ecommerce/png/1.png" alt="">
                                </span>
                            </div>
                            <div class="flex-grow">
                                <a href="javascript:void(0)">
                                    <span class="text-[0.875rem] font-semibold">Denim Zep.Co Sweat Shirt</span>
                                </a>
                                <span class="block text-success">$1,299</span>
                            </div>
                            <div class="sm:text-center">
                                <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                <span class="sm:block">#SPK-1203</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="flex items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 font-semibold">Delivery Address</p>
                                <p class="text-[#8c9097] dark:text-white/50 mb-0">
                                    mig-1-11,monroe street, georgetown, Washington D.C
                                </p>
                            </div>
                            <div class="delivery-date text-center ms-auto">
                                <span class="text-[1.125rem] text-primary font-bold">13</span>
                                <span class="font-semibold">Dec</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer sm:flex block items-center w-full justify-between">
                        <div><span class="text-[#8c9097] dark:text-white/50 me-2">Status:</span><span class="badge bg-success/10 text-success">Shipped</span></div>
                        <div class="sm:mt-0 mt-2">
                            <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
