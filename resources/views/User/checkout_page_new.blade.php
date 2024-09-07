@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')
@section('content')

    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}

    <style>
        body {
            background-color: rgb(var(--body-bg));
        }

        [data-hs-tab].active.hs-tab-active\:text-primary {
            color: rgb(0 0 0);
        }

        .spinner-custom {
            border: 3px solid rgba(0, 0, 0, 0.1);
            border-left: 3px solid #000;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
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
                    @if (session('error'))
                        <div class="alert alert-danger" id="session-alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <script>
                        setTimeout(function() {
                            var alert = document.getElementById('session-alert');
                            if (alert) {
                                alert.style.display = 'none';
                            }
                        }, 5000);
                    </script>

                    <div class="alert alert-solid-primary alert-dismissible fade show flex" role="alert" id="dismiss-alert18" style="display:none;">
                        <div class="sm:flex-shrink-0">

                        </div>
                        <div class="ms-auto">
                            <div class="mx-1 my-1">
                                <button type="button"
                                    class="inline-flex bg-teal-50 rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-teal-50 focus:ring-teal-600"
                                    data-hs-remove-element="#dismiss-alert18">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>


                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0  product-checkout">
                                    <nav class="md:flex justify-evenly !border-b !border-dashed border-defaultborder dark:border-defaultborder/10"
                                        aria-label="Tabs">
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{ route('user.fpay', ['id' => encrypt($id_on)]) }}" id="order-tab"
                                            data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="bi bi-patch-check me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Verification
                                        </a>
                                        <a class="w-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary"
                                            href="{{ route('user.fpay1', ['id' => encrypt($id_on)]) }}"
                                            style="pointer-events: none" aria-controls="confirm-tab-pane">
                                            <i
                                                class="bi bi-file-person me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Personal
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
                                            <div class="p-6 flex flex-col justify-center items-center text-center">
                                                <p
                                                    class="mb-1 font-semibold text-[#8c9097] dark:text-white/50 opacity-[0.5] text-[1.25rem]">
                                                    01</p>
                                                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 items-center">
                                                    <div class="text-[0.9375rem] font-semibold">
                                                        <div>Email</div>
                                                        <div class="flex items-center justify-center">
                                                            <input type="email"
                                                                class="form-control !rounded-md w-full sm:w-auto"
                                                                id="user_email" placeholder="name@gmail.com"
                                                                name="user_email">

                                                            <button type="button"
                                                                class="ml-2 ti-btn ti-btn-primary-full p-2" id="send-otp">
                                                                Send OTP
                                                                <span id="otp-spinner" class="spinner-custom" role="status"
                                                                    aria-hidden="true" style="display:none;"></span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-1 mt-4" id="otp-section" style="display:none;">
                                                    <div class="text-[0.9375rem] font-semibold">
                                                        <div>OTP</div>
                                                        <div>
                                                            <input type="text"
                                                                class="form-control !rounded-md w-full sm:w-auto"
                                                                id="otp" placeholder="Enter OTP">
                                                            <input type="text"
                                                                class="form-control !rounded-md w-full sm:w-auto"
                                                                value="{{ encrypt($id_on) }}" id="id-prod" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-1 mt-4" id="verify-section"
                                                    style="display:none;">
                                                    <div class="text-center">
                                                        <button type="button"
                                                            class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2"
                                                            id="verify-mail">Verify</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-6 py-4 border-t border-dashed dark:border-defaultborder/10 sm:flex justify-end">
                                                <button type="button" class="ti-btn ti-btn-success"
                                                    id="personal-details-trigger">Personal Details<i
                                                        class="ri-user-3-line ms-2 align-middle inline-block"></i></button>
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
    $('#send-otp').on('click', function() {
        var email = $('#user_email').val();
        $('#otp-spinner').show();
        $.ajax({
            url: '{{ route('send.otp') }}',
            type: 'POST',
            data: {
                email: email,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#otp-spinner').hide();
                $('#dismiss-alert18').text(response.message).show();
                setTimeout(function() {
                    $('#dismiss-alert18').fadeOut();
                }, 20000);
                $('#otp-section').show();
                $('#verify-section').show();
            },
            error: function(xhr) {
                $('#otp-spinner').hide();
                $('#dismiss-alert18').text(xhr.responseJSON.message).show();
                setTimeout(function() {
                    $('#dismiss-alert18').fadeOut();
                }, 5000);
            }
        });
    });

    $('#verify-mail').on('click', function() {
        var id_prod = $('#id-prod').val();
        var otp = $('#otp').val();
        var email = $('#user_email').val();

        $.ajax({
            url: '{{ route('verify.otp') }}',
            type: 'POST',
            data: {
                email: email,
                otp: otp,
                id_prod: id_prod,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    window.location.href = '{{ route('user.fpay1', ':id_prod') }}'
                        .replace(':id_prod', id_prod);
                } else {
                    $('#dismiss-alert18').text(response.message).show();
                    setTimeout(function() {
                        $('#dismiss-alert18').fadeOut();
                    }, 5000);
                }
            },
            error: function(xhr) {
                $('#dismiss-alert18').text(xhr.responseJSON.message || 'An error occurred').show();
                setTimeout(function() {
                    $('#dismiss-alert18').fadeOut();
                }, 5000);
            }
        });
    });
});

    </script>







@endsection
