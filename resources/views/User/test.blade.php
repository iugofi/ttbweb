

@extends('User.Layouts.layout')

@section('title', 'Test')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


<div class="content">
    <div class="main-content">


        <div class="container mx-auto mt-10">
            <div class="owl-carousel owl-theme">
                <div class="item bg-white p-5 rounded-lg shadow-md">
                    <img class="h-16 w-16 rounded-full shadow-2xl"
                        src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img" style="width: 65px !important;">
                    <p class="text-teal-400 font-bold text-xl mb-3">Sup3r-Us3r</p>
                    <p class="mt-3 text-gray-600 text-center">"Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Quod, quibusdam!"</p>
                </div>
                <div class="item bg-white p-5 rounded-lg shadow-md">
                    <img class="h-16 w-16 rounded-full shadow-2xl"
                        src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img" style="width: 65px !important;">
                    <p class="text-teal-400 font-bold text-xl mb-3">Sup3r-Us3r</p>
                    <p class="mt-3 text-gray-600 text-center">"Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Quod, quibusdam!"</p>
                </div>
                <div class="item bg-white p-5 rounded-lg shadow-md">
                    <img class="h-16 w-16 rounded-full shadow-2xl"
                        src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img" style="width: 65px !important;">
                    <p class="text-teal-400 font-bold text-xl mb-3">Sup3r-Us3r</p>
                    <p class="mt-3 text-gray-600 text-center">"Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Quod, quibusdam!"</p>
                </div>
                <div class="item bg-white p-5 rounded-lg shadow-md">
                    <img class="h-16 w-16 rounded-full shadow-2xl"
                        src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img" style="width: 65px !important;">
                    <p class="text-teal-400 font-bold text-xl mb-3">Sup3r-Us3r</p>
                    <p class="mt-3 text-gray-600 text-center">"Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Quod, quibusdam!"</p>
                </div>
                <div class="item bg-white p-5 rounded-lg shadow-md">
                    <img class="h-16 w-16 rounded-full shadow-2xl"
                        src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img" style="width: 65px !important;">
                    <p class="text-teal-400 font-bold text-xl mb-3">Sup3r-Us3r</p>
                    <p class="mt-3 text-gray-600 text-center">"Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Quod, quibusdam!"</p>
                </div>
                <div class="item bg-white p-5 rounded-lg shadow-md">
                    <img class="h-16 w-16 rounded-full shadow-2xl"
                        src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg"  alt="Img" style="width: 65px !important;">
                    <p class="text-teal-400 font-bold text-xl mb-3">Sup3r-Us3r</p>
                    <p class="mt-3 text-gray-600 text-center">"Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Quod, quibusdam!"</p>
                </div>
                <div class="item bg-white p-5 rounded-lg shadow-md">
                    <img class="h-16 w-16 rounded-full shadow-2xl"
                    src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img" style="width: 65px !important;">
                <p class="text-teal-400 font-bold text-xl mb-3">Sup3r-Us3r</p>
                <p class="mt-3 text-gray-600 text-center">"Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Quod, quibusdam!"</p>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- Initialize Owl Carousel -->
        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 3
                        },
                        1024: {
                            items: 4
                        }
                    }
                });
            });
        </script>




    </div>
</div>





@endsection
