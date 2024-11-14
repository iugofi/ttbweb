<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Sign Up">
    <meta name="keywords"
        content="admin template, admin dashboard, php admin panel, admin, tailwind css dashboard, php admin dashboard, tailwind admin template, tailwind template, php dashboard, dashboard, tailwind, tailwind dashboard, tailwind css, tailwind css template">

    <!-- TITLE -->
    <title> Sign Up </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{asset('assets/images/brand-logos/favicon.png')}}"
        type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- MAIN JS -->
    <script src="{{ asset('assets/js/authentication-main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/message.js') }}"></script>


    <style>
         body {
        background-color: rgb(var(--body-bg));
    }
    </style>



</head>

<body>



    <div class="container">
        <div
            class="flex justify-center authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
            <div class="grid grid-cols-12">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
                    <div class="my-[2.5rem] flex justify-center">
                        <a href="index.html">
                            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="desktop-logo">
                            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo" class="desktop-dark">
                        </a>
                    </div>
                    <div class="box">
                        <div class="box-body !p-[3rem]">
                            <p class="h5 font-semibold mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-[#8c9097] dark:text-white/50 opacity-[0.7] font-normal text-center">
                                Welcome &amp; Join us by
                                creating a free account !</p>
                                <div class="" id="show_success_alert"></div>
                                <form id="register_form" method="post">
                                    @csrf
                                    <div class="grid grid-cols-12 gap-y-4">
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="signup-firstname" class="form-label text-default">First Name</label>
                                            <input type="text" class="form-control form-control-lg w-full !rounded-md"
                                                id="signup_firstname" name="signup_firstname" placeholder="first name">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="signup-lastname" class="form-label text-default">Last Name</label>
                                            <input type="text" class="form-control form-control-lg w-full !rounded-md"
                                                id="signup_lastname" name="signup_lastname" placeholder="last name">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="signup-email" class="form-label text-default">Email</label>
                                            <input type="email" class="form-control form-control-lg w-full !rounded-md"
                                                id="email" name="email" placeholder="E-mail">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="signup-password" class="form-label text-default">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-lg !rounded-e-none"
                                                    id="signup_password" name="signup_password" placeholder="password">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-light !rounded-s-none !mb-0"
                                                    onclick="togglePasswordVisibility('signup_password')"><i
                                                        class="ri-eye-off-line align-middle"></i></button>
                                                        <br><br>
                                                <p class="invalid-feedback" style="width:100%"></p>
                                            </div>

                                        </div>
                                        <div class="xl:col-span-12 col-span-12 mb-2">
                                            <label for="signup-confirmpassword" class="form-label text-default">Confirm
                                                Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-lg !rounded-e-none"
                                                    id="signup_confirmpassword" name="signup_confirmpassword" placeholder="confirm password">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-light !rounded-s-none !mb-0"
                                                    onclick="togglePasswordVisibility('signup_confirmpassword')"><i
                                                        class="ri-eye-off-line align-middle"></i></button>
                                                        <br>
                                                        <p class="invalid-feedback" style="width:100%"></p>


                                            </div>

                                        </div>
                                        <div class="xl:col-span-12 col-span-12 mt-4">
                                            <div class="form-check !flex !ps-0">
                                                <input class="form-check-input me-1" name="signup_check" id="signup_check" type="checkbox" value="1"
                                                    id="defaultCheck1">
                                                <label
                                                    class="ps-2 form-check-label text-[#8c9097] dark:text-white/50 font-normal block"
                                                    for="defaultCheck1">
                                                    By creating an account you agree to our <a href="terms.html"
                                                        class="text-success"><u>Terms &amp; Conditions</u></a> and <a
                                                        class="text-success"><u>Privacy Policy</u></a>
                                                </label>
                                                <div class="invalid-feedback"></div>

                                            </div>



                                        </div>
                                        <div class="xl:col-span-12 col-span-12 grid mt-2">
                                            <input type="submit" id="register_btn"
                                                class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10" value="Create Account">
                                        </div>
                                    </div>
                                </form>
                            <div class="text-center">
                                <p class="text-[0.75rem] text-[#8c9097] dark:text-white/50 mt-4">Already have an
                                    account? <a href="{{ route('user.signin') }}" class="text-primary">Sign In</a></p>
                            </div>
                            <div class="text-center my-4 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                {{-- <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-facebook-line font-bold text-dark opacity-[0.7]"></i>
                                </button> --}}
                                <button aria-label="button" type="button" class="ti-btn ti-btn-lg ti-btn-light !font-medium me-[0.365rem] dark:border-defaultborder/10">
                                    <a href="https://nighthawk-routerlogin.com/auth/google/redirect">
                                    <svg class="google-svg svg-inline" xmlns="http://www.w3.org/2000/svg" width="2443" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg>
                                Sign In with google   </a></button>
                                {{-- <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-light">
                                    <i class="ri-twitter-line font-bold text-dark opacity-[0.7]"></i>
                                </button> --}}
                            </div>
                            <div class="text-center">
                                <p class="text-[0.75rem] text-[#8c9097] dark:text-blue/50 mt-4">
                                    <a href="{{ route('user.index') }}" class="text-primary"
                                        style="
                                    color: blue;font-family: auto;text-decoration:underline;
                                ">Go
                                        to Home Page</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#register_form').submit(function(e){
                e.preventDefault();
                $('#register_btn').val('please wait..');
                $.ajax({
                    url: '{{ route('user.ttbsaveregister')}}',
                    method: 'post',
                    data: $(this).serialize(),
                    success:function(response) {
                        if(response.status == 400) {
                            showError('signup_firstname',response.messages.signup_firstname);
                            showError('signup_lastname',response.messages.signup_lastname);
                            showError('email',response.messages.email);
                            showError('signup_confirmpassword',response.messages.signup_confirmpassword);
                            showError('signup_password',response.messages.signup_password);
                            showError('signup_check',response.messages.signup_check);
                            $('#register_btn').val('Create Account');
                        }
                        else if(response.status == 200) {
                            $("#show_success_alert").html(showMessage('success',response.messages));
                            $('#register_form')[0].reset();
                            $('.invalid-feedback').empty();
                            removeValidationClass("#register_form");
                            $('#register_btn').val('Create Account');
                        }
                    }
                });
            });
        });


    </script>



    <!-- SCRIPTS -->


    <!-- Show Password JS -->
    <script src="{{ asset('assets/js/show-password.js') }}"></script>



    <!-- END SCRIPTS -->

</body>

</html>
