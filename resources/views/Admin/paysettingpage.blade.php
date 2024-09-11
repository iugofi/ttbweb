@extends('Admin.Layouts.layout')

@section('title', 'Payment Settings')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


    <div class="content">
        <div class="main-content">


            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Payment Settings </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Payment
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Payment Settings
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <div class="grid grid-cols-12 gap-4">
                <div class="xl:col-span-3 col-span-12">
                    <div class="box !shadow-none border dark:border-defaultborder/10">
                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                            <div class="">
                                <span class="font-semibold">All Mails</span>
                            </div>
                            <div>
                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="label-allmails" id="all-mails-enable" checked>
                                    <label class="ti-btn !text-[0.75rem] !font-medium bg-primary text-white !rounded-e-none !border-e-0" for="all-mails-enable">Enable</label>
                                    <input type="radio" class="btn-check" name="label-allmails" id="all-mails-disable">
                                    <label class="ti-btn !text-[0.75rem] !font-medium btn-sm ti-btn-outline-primary !rounded-s-none" for="all-mails-disable">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-3 col-span-12">
                    <div class="box !shadow-none border dark:border-defaultborder/10">
                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                            <div class="">
                                <span class="font-semibold">Inbox</span>
                            </div>
                            <div>
                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="label-inbox" id="inbox-enable" checked>
                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="inbox-enable">Enable</label>
                                    <input type="radio" class="btn-check" name="label-inbox" id="inbox-disable">
                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="inbox-disable">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>



        </div>
    </div>



@endsection
