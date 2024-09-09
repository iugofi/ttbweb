@extends('Admin.Layouts.layout')

@section('title', 'Manual Key Assign')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


<div class="content">
    <div class="main-content">


        <!-- Page Header -->
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
                        Manual Key Assign Create
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Manual Key Assign Create
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Manual Key Assign Create</div>
                    </div>
                    <form method="post" id="mail_create_form" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>
                            <div class="grid grid-cols-12 gap-4">

                                <div class="xl:col-span-12 col-span-12">
                                    <label for="blog-Language" class="form-label">Payment Id</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" name="payment_id" id="payment_id" onchange="fetchTTBKeys(this.value)">
                                        <option value="">Select</option>
                                        @foreach ($paymentdetails as $payment_ids)
                                            <option value="{{ $payment_ids->id }}">{{ $payment_ids->firstname }} {{ $payment_ids->lastname }},{{ $payment_ids->order_id }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="xl:col-span-12 col-span-12">
                                    <label for="blog-Language" class="form-label">TTB Key</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" name="ttb_key" id="ttb_key">
                                        <option value="">Select</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>


                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-end">
                                {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                <input type="submit" value="Send Manual Message" id="mail_create_form_btn"
                                    class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>



    </div>
</div>

<script>
    function fetchTTBKeys(paymentId) {
    if (paymentId !== "") {
        $.ajax({
            url: '{{route('keyget.assign')}}',
            type: 'GET',
            data: {
                payment_id: paymentId
            },
            success: function (response) {
                var ttbKeyDropdown = $('#ttb_key');
                ttbKeyDropdown.empty();
                ttbKeyDropdown.append('<option value="">Select</option>'); // Default option
                $.each(response.ttb_keys, function (index, key) {
                    ttbKeyDropdown.append('<option value="' + key.id + '">' + key.main_key + '</option>');
                });
            },
            error: function (xhr) {
                console.log('Error:', xhr);
            }
        });
    } else {
        $('#ttb_key').empty().append('<option value="">Select</option>');
    }
}

</script>


@endsection
