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

            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Payment Setting</div>
                        </div>

                        <div class="box">
                            <p class="text-[0.875rem] font-semibold mb-3">Settings :</p>
                            <div class="grid grid-cols-12 gap-2">
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box !shadow-none border dark:border-defaultborder/10">
                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                            <div class="">
                                                <span class="font-semibold">Settings</span>
                                            </div>
                                            <div>
                                                <div class="inline-flex" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="label-settings"
                                                        id="settings-enable" checked>
                                                    <label
                                                        class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0"
                                                        for="settings-enable">Enable</label>
                                                    <input type="radio" class="btn-check" name="label-settings"
                                                        id="settings-disable">
                                                    <label
                                                        class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none"
                                                        for="settings-disable">Disable</label>
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



            </div>
        </div>



    @endsection
