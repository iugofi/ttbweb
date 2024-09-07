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

                                        @if (Session::has('firststap'))
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                                href="{{ route('user.fpay', ['id' => encrypt($id_on)]) }}" id="order-tab"
                                                style="pointer-events: none" data-hs-tab="#order-tab-pane"
                                                aria-controls="order-tab-pane">
                                                <i
                                                    class="bi bi-patch-check me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Verification
                                            </a>
                                        @else
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                                href="{{ route('user.fpay', ['id' => encrypt($id_on)]) }}" id="order-tab"
                                                data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                                <i
                                                    class="bi bi-patch-check me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Verification
                                            </a>
                                        @endif



                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{ route('user.fpay1', ['id' => encrypt($id_on)]) }}" id="order-tab"
                                            data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="bi bi-file-person me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Personal
                                            Details
                                        </a>
                                        <a class="w-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary"
                                            href="{{ route('user.fpay2', ['id' => encrypt($id_on)]) }}"
                                            style="pointer-events: none" aria-controls="shipped-tab-pane">
                                            <i
                                                class="ri-bank-card-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Payment
                                        </a>
                                        <a class="w-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary"
                                            href="{{ route('user.fpay3', ['id' => encrypt($id_on)]) }}"
                                            style="pointer-events: none" aria-controls="delivery-tab-pane">
                                            <i
                                                class="ri-checkbox-circle-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Confirmation
                                        </a>
                                    </nav>

                                    <div class="tab-content">
                                        <!-- Default tab content: Verification -->
                                        <div class="tab-pane text-defaulttextcolor dark:!text-defaulttextcolor/70 !border-0 !p-0"
                                            id="order-tab-pane" aria-labelledby="order-tab">
                                            <div class="p-4">
                                                <p
                                                    class="mb-1 font-semibold text-[#8c9097] dark:text-white/50 opacity-[0.5] text-[1.25rem]">
                                                    02</p>
                                                <div
                                                    class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                    <div>Personal Details :</div>
                                                </div>
                                                <div class="grid grid-cols-12 gap-4">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="firstname-personal" class="form-label">First
                                                            Name</label>
                                                        <input type="text" class="form-control w-full !rounded-md"
                                                            id="firstname-personal" placeholder="First Name" value="{{ session('user_data.firstname', '') }}">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="lastname-personal" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control w-full !rounded-md"
                                                            id="lastname-personal" placeholder="Last Name" value="{{ session('user_data.lastname', '') }}">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="email-personal" class="form-label">Email</label>
                                                        <input type="email" class="form-control w-full !rounded-md"
                                                            id="email-personal" value="{{ session('user_data.email', '') }}" disabled>
                                                            <input type="text" class="form-control w-full !rounded-md"
                                                            id="product-id" value="{{ encrypt($id_on) }}" hidden>

                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="phoneno-personal" class="form-label">Phone no</label>
                                                        <input type="text" class="form-control w-full !rounded-md"
                                                            id="phoneno-personal" placeholder="(555)-555-1234"
                                                            value="{{ session('user_data.phoneno', '') }}">
                                                    </div>
                                                    <div class="xxl:col-span-6 col-span-12">
                                                        <label for="pincode-personal" class="form-label">Pincode</label>
                                                        <input type="text" class="form-control w-full !rounded-md"
                                                            id="pincode-personal" placeholder="200017" value="{{ session('user_data.pincode', '') }}">
                                                    </div>

                                                    <div class="xxl:col-span-6 col-span-12">
                                                        <label for="country-personal" class="form-label">Country</label>
                                                        <select id="country-personal" name="country" class="form-control w-full !rounded-md" data-trigger></select>
                                                    </div>
                                                    <div class="xxl:col-span-6 col-span-12">
                                                        <label for="choices-single-default1"
                                                            class="form-label">State</label>
                                                        <select name="state" id="choices-single-default1" class="form-control w-full !rounded-md"></select>
                                                    </div>
                                                    <div class="xxl:col-span-6 col-span-12">
                                                        <label for="choices-single-default" class="form-label">City</label>
                                                        <input type="text" class="form-control w-full !rounded-md"
                                                        id="choices-single-default" placeholder="city" value="{{ session('user_data.city', '') }}">
                                                    </div>

                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="text-area" class="form-label">Address</label>
                                                        <textarea class="form-control w-full !rounded-md" id="text-area" rows="4">{{ session('user_data.address', '') }}</textarea>
                                                        <div class="form-check !flex items-center gap-2 !ps-0">
                                                            <input
                                                                class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success"
                                                                type="checkbox" value="" id="invalidCheck1"
                                                                required checked>
                                                            <label class="form-check-label text-success"
                                                                for="invalidCheck">
                                                                Same as Shipping Address ?
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-4 py-3 border-top border-block-start-dashed sm:flex justify-between">
                                                <a href="{{ route('user.fpay', ['id' => encrypt($id_on)]) }}"
                                                    type="button" class="ti-btn ti-btn-danger m-1"
                                                    id="back-shipping-trigger"><i
                                                        class="bi bi-patch-check me-2 align-middle inline-block"></i>Back To
                                                    Re-Varification</a>
                                                <button type="button" class="ti-btn ti-btn-success m-1"
                                                    id="payment-trigger">Continue To Payment<i
                                                        class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
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

<script>
  $(document).ready(function() {
    $('#payment-trigger').on('click', function() {
        var prod_id = $('#product-id').val();
        var formData = {
            firstname: $('#firstname-personal').val(),
            lastname: $('#lastname-personal').val(),
            email: $('#email-personal').val(),
            phoneno: $('#phoneno-personal').val(),
            pincode: $('#pincode-personal').val(),
            city: $('#choices-single-default').val(),
            state: $('#choices-single-default1').val(),
            country: $('#country-personal').val(),
            address: $('#text-area').val(),
            same_as_shipping: $('#invalidCheck1').is(':checked') ? 1 : 0,
        };

        $.ajax({
            url: '{{ route("save.personal.details") }}',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                window.location.href = '{{ route("user.fpay2", ":prod_id") }}'.replace(':prod_id', prod_id);
            },
            error: function(xhr) {
                alert(xhr.responseJSON.message);  // Handle errors
            }
        });
    });
});

</script>

<script src="{{asset('assets/js/countrystate.js')}}"></script>







@endsection
