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
                                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                                                <div class="invalid-feedback" id="email-error"></div>
                                            </div>
                                            <div class="md:col-span-6 col-span-12 mb-4">
                                                <label class="form-label">First Name</label>
                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name" aria-label="First name">
                                                <div class="invalid-feedback" id="first-name-error"></div>
                                            </div>
                                            <div class="md:col-span-6 col-span-12 mb-4">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" aria-label="Last name">
                                            </div>
                                            <div class="md:col-span-12 col-span-12 md:flex md:justify-end check-btn"> 
                                                <input type="submit" value="Submit" id="checkotp" class="ti-btn ti-btn-primary-full !mb-0">
                                                
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-x-6">
                            
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
                                                <button type="submit" class="ti-btn ti-btn-primary-full !mb-0">Pay With Stripe</button>
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
                            <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 md:border-e md:border-b-0 border-b border-dashed dark:border-defaultborder/10 pe-0">
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
                                                <div class="text-[1.5625rem] font-bold mb-1">${{ $plan->price }}<sub class="text-[#8C9097] dark:text-white/50 font-semibold text-[.6875rem] ms-1">/
                                                        Per Month</sub></div>
                                                <div class="mb-1 text-[#8C9097] dark:text-white/50">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                <div class="text-[0.75rem] mb-4"><u>Billed Monthly</u></div>
                                                <ul class="list-none mb-0">
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">5 Free</strong>Websites
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">5 GB</strong>Hard disk storage
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">2 Years</strong>Email support
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            <strong class="me-1">5</strong>Licenses
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
                                                        </span>
                                                        <span>
                                                            Custom SEO optimizataion
                                                        </span>
                                                    </li>
                                                    <li class="flex items-center mb-4">
                                                        <span class="me-2">
                                                            <i class="ri-checkbox-circle-line text-[.9375rem] text-success"></i>
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

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
aria-hidden="true">
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
                        $('#successModal').modal('hide');
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
