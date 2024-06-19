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
                    <div class="xl:col-span-8 col-span-12">
                        <div class="team-members" id="team-members">
                            <div class="grid grid-cols-12 gap-x-6">

                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Email Verification
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <form method="post" id="otpcheck">
                                                @csrf
                                                <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                    <div class="md:col-span-12 col-span-12 mb-4">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" name="email" id="email"
                                                            class="form-control" placeholder="Enter Your Email">
                                                        <div class="invalid-feedback" id="email-error"></div>
                                                    </div>
                                                    <div class="md:col-span-6 col-span-12 mb-4">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" name="first_name" id="first_name"
                                                            class="form-control" placeholder="First name"
                                                            aria-label="First name">
                                                        <div class="invalid-feedback" id="first-name-error"></div>
                                                    </div>
                                                    <div class="md:col-span-6 col-span-12 mb-4">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" name="last_name" id="last_name"
                                                            class="form-control" placeholder="Last name"
                                                            aria-label="Last name">
                                                        <div class="invalid-feedback" id="last-name-error"></div>

                                                    </div>
                                                    <div
                                                        class="md:col-span-12 col-span-12 md:flex md:justify-end check-btn">
                                                        <input type="submit" value="Submit" id="checkotp"
                                                            class="ti-btn ti-btn-primary-full !mb-0">

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-6" id="payment" style="display: none;">

                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Payment
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">

                                                <div class="md:col-span-12 col-span-12 text-center">
                                                    <form id='checkout-form' method='post' action="{{ route('user.stripeCheckoutfpay') }}">
                                                        @csrf
                                                        <input type="text" id="emailDisplaypay" name="emailpay" hidden>
                                                        <input type='hidden' name='vpnid' value="{{ $plan->id }}" id='vpnid'>
                                                        <button  class="ti-btn ti-btn-primary-full !mb-0">Pay With Stripe</button>
                                                    <form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xl:col-span-4 col-span-12 order-mobile2">
                        <div class="team-groups">
                            <div class="box">
                                <div
                                    class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0">
                                    <div class="box">
                                        <div class="box-body">
                                            {{-- <img src="assets/img/ttb antivirus box design.jpg" class="card-img mb-4 !rounded-md" alt="...">
                                        <h6 class="box-title font-semibold">TTB VPN SHIELD</h6>
                                        <p class="card-text mb-4">One Device/One Month</p>
                                        <hr>
                                            <h6 class="box-title font-semibold !text-[1rem] mt-2">Card title</h6>
                                            <p class="card-text text-[#8c9097] dark:text-white/50 mb-4">when an unknown printer took a galley of type
                                                and scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining essentially
                                                unchanged.</p>
                                            <hr> --}}
                                            <div class="!p-6">
                                                <div class="flex justify-between items-center mb-4">
                                                    <div class="text-[1.125rem] font-semibold">{{ $plan->name }}</div>
                                                    <div>
                                                        {{-- <span class="badge bg-success/10 text-success">
                                                            For Small Teams
                                                        </span> --}}
                                                    </div>
                                                </div>
                                                <div class="text-[1.5625rem] font-bold mb-1">${{ $plan->price }}<sub
                                                        class="text-[#8C9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                                        Per Month</sub></div>
                                                <div class="mb-1 text-[#8C9097] dark:text-white/50">Lorem ipsum dolor sit
                                                    amet
                                                    consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                                <ul class="list-none mb-0">
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i
                                                                class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">5 Free</strong>Websites
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i
                                                                class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">5 GB</strong>Hard disk storage
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i
                                                                class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">2 Years</strong>Email support
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i
                                                                class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">5</strong>Licenses
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i
                                                                class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            Custom SEO optimizataion
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i
                                                                class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            Chat Support
                                                        </span>
                                                    </li>
                                                </ul>
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

    {{-- <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your form has been submitted successfully. An OTP has been sent to:</p>
                    <p id="emailDisplay"></p>
                    <div class="" id="otp_check_alert"></div>

                    <!-- Form for OTP verification -->
                    <form method="post" id="otpVerificationForm">
                        @csrf
                        <div class="mb-3">
                            <label for="otpInput" class="form-label">Enter OTP:</label>
                            <input type="text" id="emailDisplayVal" name="emailinput" hidden>
                            <div class="input">
                                <input type="text" class="form-control" name="otpinput" id="otpinput">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <input type="submit" value="Verify OTP" id="checkotpinput" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}


   
            
                <div id="hs-vertically-centered-modal" class="hs-overlay hidden ti-modal">
                    <div
                        class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="ti-modal-content">
                            <div class="ti-modal-header">
                                <h6 class="modal-title" id="staticBackdropLabel2">Verification
                                </h6>
                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                    data-hs-overlay="#hs-vertically-centered-modal">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                            <div class="ti-modal-body">
                                <p>Your form has been submitted successfully. An OTP has been sent to:</p>
                                <p id="emailDisplay"></p>
                                <div class="" id="otp_check_alert"></div>
                                <form method="post" id="otpVerificationForm">
                                    @csrf
                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                        <div class="md:col-span-12 col-span-12 mb-4">
                                            <label class="form-label">Enter OTP:</label>
                                            <input type="text" id="emailDisplayVal" name="emailinput" hidden>
                                            <input type="text" name="otpinput" id="otpinput"
                                                class="form-control">
                                                <div class="invalid-feedback"></div>
                                        </div>
                                     
                                        <div
                                            class="md:col-span-12 col-span-12 md:flex md:justify-end check-btn">
                                            <input type="submit" value="Verify OTP" id="checkotpinput"
                                                class="ti-btn ti-btn-primary-full !mb-0">

                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="ti-modal-footer">
                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full"
                                    data-hs-overlay="#hs-vertically-centered-modal">
                                    Close
                                </button>
                                <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                    Save changes
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
      

    <script>
        $(document).ready(function() {
            $('#otpcheck').submit(function(e) {
                e.preventDefault();
                $('#checkotp').val('please wait..');
                var formData = $(this).serialize(); // Serialize form data
                $.ajax({
                    url: '{{ route('user.otpcheckfpay') }}',
                    method: 'post',
                    data: formData,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('email', response.messages.email, true);
                            showError('first_name', response.messages.first_name, true);
                            showError('last_name', response.messages.last_name, true);

                            $('#checkotp').val('submit');
                        } else if (response.status == 200) {
                            // $('#otpcheck')[0].reset();
                            removeValidationClass("#register_form");
                            $('#checkotp').val('submit');
                            $('#email').prop('disabled', true);
                            $('#first_name').prop('disabled', true);
                            $('#last_name').prop('disabled', true);


                            $('#checkotp').hide();
                            $('#hs-vertically-centered-modal').removeClass('hidden');
                            $('#hs-vertically-centered-modal').addClass('open');
                            $('#hs-vertically-centered-modal').css('background','#1f1f1f47');

                            $('#successModal').modal('show');
                            var email = getEmailFromFormData(formData);
                            $('#emailDisplay').text(email);
                            $('#emailDisplayVal').val(email);
                            $('#emailDisplaypay').val(email);
                            $('#emailDisplayCard').val(email);

                        }
                    }
                });
            });

            $('#otpVerificationForm').submit(function(e) {
                e.preventDefault();
                $('#checkotpinput').val('please wait..');
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('user.otpverifyfpay') }}',
                    method: 'post',
                    data: formData,
                    success: function(response) {
                        // console.log(response);
                        if (response.status === 400) {
                            $('#checkotpinput').val('Verify OTP');
                            // Handle validation errors
                            $.each(response.errors, function(key, value) {
                                showError(key, value[0], true);
                            });
                        } else if (response.status === 401) {
                            $('#checkotpinput').val('Verify OTP');
                            $("#otp_check_alert").html('<div class="alert alert-danger">' +
                                response.message + '</div>');
                        } else if (response.status === 200) {
                            // Handle success
                            removeValidationClass("#otpVerificationForm");
                            $('#checkotpinput').val('Verify OTP');
                            $('#hs-vertically-centered-modal').removeClass('open');
                            $('#hs-vertically-centered-modal').addClass('hidden');                  
                            $('#payment').show();
                        }
                    }
                });
            });


            function getEmailFromFormData(formData) {
                var email = decodeURIComponent(formData).split('&').find(function(element) {
                    return element.includes('email=');
                }).split('=')[1];
                return email;
            }

        });
    </script>




@endsection
