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
    <title> Forget Password </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{asset('assets/images/brand-logos/favicon.png')}}"
    type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- MAIN JS -->
    <script src="{{asset('assets/js/authentication-main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/message.js') }}"></script>



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
                        <p class="h5 font-semibold mb-2 text-center mt-4">Forget Password</p>
                        
                        <div class="box-body !p-[3rem]">
                            <div class="" id="login_save_alert"></div>
                            <form method="post" id="forget_password">
                                @csrf
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="email" class="form-label text-default">Enter Your Email address and we will send you a link to reset your password</label>
                                    <input type="text" class="form-control form-control-lg w-full !rounded-md"
                                        id="email" name="email" placeholder="E-mail">
                                        <div class="invalid-feedback" style="width:100%"></div>
                                </div>
                               
                                <div class="xl:col-span-12 col-span-12 grid mt-2">                          
                                        <input type="submit" id="login_btn"
                                                class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10" value="Reset Password">
                                </div>
                            </div>
                            </form>
                           
                            
                            
                            <div class="text-center">
                                <p class="text-[0.75rem] text-[#8c9097] dark:text-blue/50 mt-4" >
                                    <a href="{{route('user.signin')}}" class="text-primary" style="
                                    color: blue;font-family: auto;text-decoration:underline;
                                ">Go to Sign in Page</a></p>
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
          
            $('#forget_password').submit(function(e) {
                // alert("ok");
                // var email=$('#signin-username').val();
                
                e.preventDefault();
                $('#login_btn').val('please wait..');
                $.ajax({
                    url: '{{ route('user.forgetpass') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status === 400) {
                            showError('email', response.messages.email);                          
                            $('#login_btn').val('Reset Password');
                        } else if (response.status === 401) {
                            $("#login_save_alert").html(showMessage('danger', response
                                .messages));
                            $('#login_btn').val('Reset Password');
                        } else if(response.status == 200) {
                            $("#login_save_alert").html(showMessage('success',response.messages));
                            $('#forget_password')[0].reset();
                            removeValidationClass("#forget_password");
                            $('#login_btn').val('Reset Password');
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
    <script src="{{asset('assets/js/show-password.js')}}"></script>


    <!-- END SCRIPTS -->

</body>

</html>