<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light"
    data-header-styles="light" data-menu-styles="light" data-toggled="close">


<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="">
    <meta name="Description" content="Password reset">
    <meta name="keywords"
        content="password resret">

    <!-- TITLE -->
    <title> Reset Password </title>

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
                            <p class="h5 font-semibold mb-2 text-center">Reset your profile password</p>
                            <br>
                            {{-- <p class="mb-4 text-[#8c9097] dark:text-white/50 opacity-[0.7] font-normal text-center">
                                Welcome back Jhon !</p> --}}
                            <div class="" id="login_save_alert"></div>
                            <form method="post" id="resetpassform">
                                @csrf
                                <div class="grid grid-cols-12 gap-y-4">
                                    
                                    <div class="xl:col-span-12 col-span-12 mb-2">
                                        <label for="signin-password" class="form-label text-default block">Create Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg !rounded-s-md"
                                                id="create_password" name="create_password" placeholder="password">
                                            <button aria-label="button"
                                                class="ti-btn ti-btn-light !rounded-s-none !mb-0" type="button"
                                                onclick="createpassword('create_password',this)" id="button-addon2"><i
                                                    class="ri-eye-off-line align-middle"></i></button>
                                            <div class="invalid-feedback" style="width:100%"></div>

                                        </div>
                                        
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mb-2">
                                        <label for="signin-password" class="form-label text-default block">Re-type Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg !rounded-s-md"
                                                id="re_password" name="re_password" placeholder="password">
                                            <button aria-label="button"
                                                class="ti-btn ti-btn-light !rounded-s-none !mb-0" type="button"
                                                onclick="createpassword('re_password',this)" id="button-addon2"><i
                                                    class="ri-eye-off-line align-middle"></i></button>
                                            <div class="invalid-feedback" style="width:100%"></div>

                                            <input type="password" class="form-control form-control-lg !rounded-s-md"
                                                id="own_password" name="own_password" value="{{ $reset_id }}" hidden>

                                        </div>
                                        
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 grid mt-2">

                                        <input type="submit" value="Reset" id="reset_btn"
                                            class="ti-btn ti-btn-primary !bg-primary !text-white !font-medium">
                                    </div>
                                </div>
                            </form>
                            <div id="timer" class="text-center mb-4 text-[#8c9097] dark:text-white/50 opacity-[0.7] font-normal">
                                Time remaining: <span id="countdown">180</span> seconds
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
            </div>
        </div>
    </div>

   <!-- TIMER -->


<script>
    // Countdown function
    function countdown() {
        var seconds = 180; // Set the initial time
        var timer = setInterval(function() {
            seconds--;
            document.getElementById('countdown').textContent = seconds; 
            if (seconds <= 0) {
                clearInterval(timer);
                
                window.location.href = '/'; 
            }
        }, 1000); 
    }

    window.onload = function() {
        countdown();
    };
</script>




    <!-- SCRIPTS -->
    <script>
        $(document).ready(function() {
            $('#resetpassform').submit(function(e) {
                e.preventDefault();
                $('#reset_btn').val('please wait..');
                $.ajax({
                    url: '{{ route('user.resetpassform') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status === 400) {
                            showError('create_password', response.messages.create_password);
                            showError('re_password', response.messages.re_password);
                            $('#reset_btn').val('Reset');
                        } else if (response.status === 401) {
                            $("#login_save_alert").html(showMessage('danger', response
                                .messages));
                            $('#reset_btn').val('Reset');
                        } else if(response.status == 200) {
                            window.location = '{{ route('user.signin') }}?reset_success=1';
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
