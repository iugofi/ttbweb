@extends('Admin.Layouts.layout')

@section('title', 'Payment Settings')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')

<style>
    body {
        background-color: rgb(var(--body-bg));
    }
</style>

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

            <p class="text-[0.875rem] font-semibold mb-3">Payment Getwatys :</p>
            <div class="grid grid-cols-12 gap-4">
                <div class="xl:col-span-6 col-span-12">
                    <div class="box-body">
                    <div class="flex items-center justify-between sm:mt-0 mt-4">
                        <div class="mail-notification-settings">
                        @foreach ($pay_getways as $item)
                        @if ($item->PICK_TEXT == 'Stripe')
                        <div class="flex items-center justify-between mt-4">
                            <div class="mail-notification-settings">
                                <p class="text-[0.875rem] mb-1 font-semibold">{{$item->PICK_TEXT}}</p>

                            </div>
                            <div>
                                <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                    <input id="early-access" name="toggleswitchsize12" type="checkbox" value="{{$item->PICK_TEXT_EXTEND}}" @if($item->PICK_TEXT_EXTEND == 1) checked @endif>
                                    <label for="early-access" class="label-success mb-1"></label>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if ($item->PICK_TEXT == 'Paypal')
                        <div class="flex items-center justify-between mt-4">
                            <div class="mail-notification-settings">
                                <p class="text-[0.875rem] mb-1 font-semibold">{{$item->PICK_TEXT}}</p>

                            </div>
                            <div>
                                <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                    <input id="email-shortcut" name="toggleswitchsize13" type="checkbox" value="{{$item->PICK_TEXT_EXTEND}}" @if($item->PICK_TEXT_EXTEND == 1) checked @endif>
                                    <label for="email-shortcut" class="label-success mb-1"></label>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
            </div>



        </div>
    </div>



@endsection
