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
                            @if(request('reset_success'))
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
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-facebook-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-google-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                                <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-light">
                                    <i class="ri-twitter-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
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
