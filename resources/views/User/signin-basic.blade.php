<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Sign in">
    <meta name="keywords"
        content="admin template, admin dashboard, php admin panel, admin, tailwind css dashboard, php admin dashboard, tailwind admin template, tailwind template, php dashboard, dashboard, tailwind, tailwind dashboard, tailwind css, tailwind css template">

    <!-- TITLE -->
    <title> Sign In </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.png') }}" type="image/x-icon">
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
                            <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                class="desktop-logo">
                            <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                class="desktop-dark">
                        </a>
                    </div>
                    <div class="box">
                        <div class="box-body !p-[3rem]">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <p class="h5 font-semibold mb-2 text-center">Sign In</p>
                            <p class="mb-4 text-[#8c9097] dark:text-white/50 opacity-[0.7] font-normal text-center">
                                Welcome back Jhon !</p>
                            <div class="" id="login_save_alert"></div>
                            @if (request('reset_success'))
                                <div class="alert alert-success">
                                    Password reset successfully!
                                </div>
                            @endif
                            <form method="post" id="login_form">
                                @csrf
                                <div class="grid grid-cols-12 gap-y-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="email" class="form-label text-default">Email</label>
                                        <input type="email" class="form-control form-control-lg w-full !rounded-md"
                                            id="signin_email" name="signin_email" placeholder="E-mail">
                                        <div class="invalid-feedback"></div>

                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mb-2">
                                        <label for="signin-password" class="form-label text-default block">Password<a
                                                href="{{ route('user.passreset') }}"
                                                class="ltr:float-right rtl:float-left text-danger">Forget password
                                                ?</a></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg !rounded-s-md"
                                                id="signin_password" name="signin_password" placeholder="password">
                                            <button aria-label="button"
                                                class="ti-btn ti-btn-light !rounded-s-none !mb-0" type="button"
                                                onclick="createpassword('signin_password',this)" id="button-addon2"><i
                                                    class="ri-eye-off-line align-middle"></i></button>
                                            <div class="invalid-feedback" style="width:100%"></div>

                                        </div>
                                        <div class="mt-2">
                                            <div class="form-check !ps-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="defaultCheck1">
                                                <label
                                                    class="form-check-label text-[#8c9097] dark:text-white/50 font-normal"
                                                    for="defaultCheck1">
                                                    Remember password ?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 grid mt-2">

                                        <input type="submit" value="Sign In" id="login_btn"
                                            class="ti-btn ti-btn-primary !bg-primary !text-white !font-medium">
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="text-[0.75rem] text-[#8c9097] dark:text-white/50 mt-4">Dont have an
                                    account?
                                    <a href="{{ route('user.signup') }}" class="text-primary">Sign Up</a>
                                </p>
                            </div>
                            <div class="text-center my-4 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                <button aria-label="button" type="button" class="ti-btn ti-btn-lg ti-btn-light !font-medium me-[0.365rem] dark:border-defaultborder/10"><a href="https://nighthawk-routerlogin.com/auth/google/redirect"><svg class="google-svg" xmlns="http://www.w3.org/2000/svg" width="2443" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg></a>Sign In with google</button>

                                {{-- <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <a href="https://nighthawk-routerlogin.com/auth/facebook/redirect">
                                        <i class="ri-facebook-line font-bold text-dark opacity-[0.7]"></i>
                                    </a>
                                </button>
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <a href="https://nighthawk-routerlogin.com/auth/google/redirect">
                                        <i class="ri-google-line font-bold text-dark opacity-[0.7]"></i>
                                    </a>
                                </button>
                                <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-light">
                                    <a href="https://nighthawk-routerlogin.com/auth/twitter/redirect">
                                        <i class="ri-twitter-line font-bold text-dark opacity-[0.7]"></i>
                                    </a>
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




    <!-- SCRIPTS -->
    <script>
        $(document).ready(function() {
            $('#login_form').submit(function(e) {
                e.preventDefault();
                $('#login_btn').val('please wait..');
                $.ajax({
                    url: '{{ route('user.signdata') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status === 400) {
                            showError('signin_email', response.messages.signin_email);
                            showError('signin_password', response.messages.signin_password);
                            $('#login_btn').val('Sign In');
                        } else if (response.status === 401) {
                            $("#login_save_alert").html(showMessage('danger', response
                                .messages));
                            $('.invalid-feedback').empty();
                            $('#login_btn').val('Sign In');
                        } else {
                            if (response.status === 200 && response.messages === 'success') {
                                window.location = '{{ route('user.index') }}';
                            } else {
                                // Handle other response statuses or messages
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors here
                    }
                });
            });
        });
    </script>



    <!-- Show Password JS -->
    <script src="{{ asset('assets/js/show-password.js') }}"></script>


    <!-- END SCRIPTS -->

</body>

</html>
