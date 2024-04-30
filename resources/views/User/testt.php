
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>Particles JS</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css" />  -->
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</head>
<body>
	<!--Container for Particles --> 
	<div id="particles-js"></div>  
	<!-- Section --> 
	<section></section>
	<!--Particles CDN Down Below: --> 
	<!-- <script src="https://cdn.jsdeliver.net/particles.js/2.0.0/particles.min.js"></script> -->
	<script>
		particlesJS.load('particles-js', 'particles.json', function(){
			console.log('particles.json loaded');
		});
	</script>

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

<style>

body {
	height: 100vh;
	margin: 0;
	padding: 0;
  overflow-y:hidden;
}

section {
	background: beige;
	height: 300px;
	margin: 0 auto;
	z-index: 1;
	position: relative;
	top: 50%;
}
   
#particles-js {
		/* background-image: url(https://i.pinimg.com/originals/70/7c/3a/707c3a6a176d6d7c32de951467ae946b.jpg);  */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover; 
		height: 100%;
		margin: 0 auto;
		border-bottom: 2px solid grey;
		box-shadow: 0 12px 6px -6px grey;
		padding-bottom: 200px; 
        background-color: #000;
}
</style>


<script>

particlesJS("particles-js", {
  	"particles":{
		"number": {
			"value": 100
		}, 
		"color": {
			"value": "#fff"
		}, 
		"shape": {
			"type": "circle"
		}, 
		"opacity": {
			"value": 0.9, 
			"random": true, 
			"anim": {
				"enable": true, 
				"speed": 9
			}
		}, 
			"size": {
				"value": 1
		}, 
			"move": {
			"enable": true,
			"speed": 2, 
			"direction": "none" 
		} 
	}, 

	"interactivity": {
		"events": {
			"onhover": {
				"enable": true, 
				"mode": "repulse"
			},
			"onclick": {
				"enable": true, 
				"mode": "push"
			}
		},
		"modes": {
			"repulse": {
				"distance": 150, 
				"duration": 0.5
			}
		}
	}
});

</script>






</body>
</html>

<script></script>


