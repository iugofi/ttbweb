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

            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box custom-box">
                        <div class="box-header">
                            <div class="box-title">
                                Visitor List
                            </div>
                        </div>


                        <div class="box-body">
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>

                            @foreach ($pay_getways as $item)
                            <div class="flex items-center justify-between mt-4">
                                <div class="mail-notification-settings">
                                    <p class="text-[0.875rem] mb-1 font-semibold">{{ $item->PICK_TEXT }}</p>
                                </div>
                                <div>
                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                        <input
                                            id="{{ strtolower($item->PICK_TEXT) }}-toggle"
                                            name="toggleswitch"
                                            type="checkbox"
                                            value="{{ $item->PICK_TEXT }}"
                                            @if($item->PICK_TEXT_EXTEND == 1) checked @endif
                                            data-id="{{ $item->id }}"
                                        >
                                        <label for="{{ strtolower($item->PICK_TEXT) }}-toggle" class="label-success mb-1"></label>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[name="toggleswitch"]').change(function() {
            const isChecked = $(this).is(':checked');
            const paymentMethod = $(this).val();
            const id = $(this).data('id');

            $.ajax({
                url: '{{ route("updatePaymentGateway") }}',
                type: 'POST',
                data: {
                    id: id,
                    checked: isChecked ? 1 : 0,
                    _token: '{{ csrf_token() }}' 
                },
                success: function(response) {
                    // Handle success (optional)
                    console.log('Updated successfully');
                },
                error: function(xhr) {
                    // Handle error (optional)
                    console.error('Update failed', xhr);
                }
            });
        });
    });
</script>



@endsection
