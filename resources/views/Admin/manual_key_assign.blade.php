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

            <div class="xl:col-span-12 col-span-12">
                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="box-body">
                            <div class="flex items-top justify-between">
                                <div>
                                    <span
                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-primary">
                                        <i class="ti ti-users text-[1rem] text-white"></i>
                                    </span>
                                </div>
                                <div class="flex-grow ms-4">
                                    <div class="flex items-center justify-between flex-wrap">
                                        <div>
                                            @foreach ($Product_Total as $item)
                                            {{-- <p class="text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-0">
                                                 {{ $item->PICK_TEXT }} {{ $item->plan_name }}- {{ $item->pro_count }}</p> --}}

                                            <h4 class="font-semibold  text-[1.5rem] !mb-2 "> {{ $item->PICK_TEXT }} {{ $item->plan_name }}- {{ $item->pro_count }}

                                            </h4>
                                            @endforeach
                                        </div>
                                        <div id="crm-total-customers"></div>
                                    </div>
                                    <div class="flex items-center justify-between !mt-1">
                                        <div>
                                            {{-- <a class="text-primary text-[0.813rem]"
                                            href="javascript:void(0);">View All<i
                                                class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a> --}}
                                        </div>
                                        {{-- <div class="text-end">
                                            <p class="mb-0 text-success text-[0.813rem] font-semibold">

                                            </p>
                                            <p class="text-[#8c9097] dark:text-white/50 opacity-[0.7] text-[0.6875rem]">
                                                this month</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Manual Key Assign Create</div>
                    </div>
                    <form method="post" id="key_create_form" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>
                            <div class="grid grid-cols-12 gap-4">

                                <div class="xl:col-span-12 col-span-12">
                                    <label for="blog-Language" class="form-label">Payment Id</label>
                                    <div class="table-responsive">
                                        <table class="table whitespace-nowrap table-sm min-w-full">
                                            <thead>
                                                <tr class="border-b border-defaultborder">
                                                    <th scope="col" class="text-start">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkeboxall">
                                                    </th>
                                                    <th scope="col" class="text-start">First Name</th>
                                                    <th scope="col" class="text-start">Order Id</th>
                                                    <th scope="col" class="text-start">Created Date</th>
                                                    <th scope="col" class="text-start">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($paymentdetails as $payment)
                                                <tr class="border-b border-defaultborder">

                                                    <td><div class="form-check"><input class="form-check-input checkbox-item" type="checkbox" name="checkbox[]" value="{{ $payment->id }}" id="checkebox-sm-{{ $payment->id }}"></div></td>
                                                    <th scope="row" class="text-start">


                                                            <label class="form-check-label" for="checkebox-sm-{{ $payment->id }}">
                                                                {{ $payment->firstname }} {{ $payment->lastname }}
                                                            </label>

                                                    </th>
                                                    <td>{{ $payment->order_id }}</td>
                                                    <td>{{ $payment->payment_time }}</td>
                                                    <td>{{ $payment->payment_status }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>



                                    </div>
                                </div>

                                {{-- <div class="xl:col-span-12 col-span-12">
                                    <label for="blog-Language" class="form-label">TTB Key</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" name="ttb_key" id="ttb_key">
                                        <option value="">Select</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div> --}}


                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-end">
                                {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                <input type="submit" value="Send Manual Message" id="key_create_form_btn"
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

$(document).ready(function() {
        $('#key_create_form').submit(function(e) {
            e.preventDefault();
            $('#key_create_form_btn').val('please wait..');
            var token = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData($(this)[0]);

            $.ajax({
                url: '{{ route('save.ttbkey') }}',
                method: 'post',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 400) {
                        showError('checkbox', response.messages.checkbox);
                        $('#key_create_form_btn').val('Send Manual Message');
                    } else if (response.status == 200) {
                        $('.invalid-feedback').empty();
                        $("#show_success_alert").html(showMessage('success', response
                            .messages));
                        $('#key_create_form')[0].reset();
                        removeValidationClass("#key_create_form");
                        $('#key_create_form_btn').val('Send Manual Message');

                    }
                },
                error: function(xhr, status, error) {}
            });
        });

       });

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

<script>

    const checkAll = document.getElementById('checkeboxall');
    checkAll.addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.checkbox-item');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = checkAll.checked;
        });
    });
</script>


@endsection
