@extends('User.Layouts.layout')

@section('title', 'threat-protection')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')


    {{-- <div class="content">
    <div class="main-content"> --}}



    <section class="threat-banner-top">
        <div class="container main-banner-container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                    <h2>Successful <span>Business </span>Make Profitable.</h2>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br>
                        Aenean commodo ligula eget dolor.</p>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12">
                </div>
            </div>
        </div>
    </section>


    <section class="threat-section-two">
        <div class="container main-banner-container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12 ">
                    <img src="{{ asset('assets/img/threat-image1.png') }}" alt="" class="img-fluid" width="90%">
                </div>
                <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12 pt-5">
                    <div class="flex">
                        <h5>About Us!</h5>
                        <hr>
                    </div>
                    <h2 class="mt-3">We Provide <span> The Solution.</span></h2>
                    <h3>Grow Your Business From Good to Great</h3>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores quaerat,
                        quia saepe
                        consequuntur, laudantium, cum at expedita eligendi perferendis amet fugiat? Assumenda numquam nisi
                        at, laborum eligendi necessitatibus est?</p>
                    <p class="mt-3 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores quaerat,
                        quia saepe
                        consequuntur laudantium, cum at expedita eligendi perferendis amet fugiat.</p>
                    <div class="btn-box">
                        <a class="btn-cnt" href="#">Contact Us<i class="fas fa-angle-double-right"></i></a>
                        <a class="btn-srv mx-3" href="#">Our Services <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="threat-section-three !bg-[#f9fafb] dark:!bg-black/10">
        <div class="container">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 text-center">
                    <h2>Stay protected from threats- known and unknown!</h2>
                    <p class="mt-3 mb-5">Most malware attacks can be recognized based on their past-behaviour, however,<br>
                        those with modified
                        codes
                        and language are difficult to track.</p>
                </div>

                <div class="xxl:col-span-4 xl:col-span-4  md:col-span-4 sm:col-span-12 col-span-12 d!bg-[#f9fafb] dark:!bg-black/10 border dark:border-defaultborder/10 img-boxthree">
                    <img src="{{ asset('assets/img/sec3-img1.png') }}" alt="" class="img-fluid" width="100%">
                    <div class="inner-box ">
                        <div class="flex">
                            <div class="icon-img-box">
                                <i class="fa-solid fa-signal"></i>
                            </div>
                            <h3 class="ms-3">Improved <br>Defenses<span>.</span></h3>
                        </div>
                        <div class="progress progress-xs mb-5 mt-5 progress-animate">
                            <div class="progress-bar !rounded-e-full bg-primary w-10">
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Been the industry's standard dummy</p>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4  md:col-span-4 sm:col-span-12 col-span-12 d!bg-[#f9fafb] dark:!bg-black/10 border dark:border-defaultborder/10 img-boxthree">
                    <img src="{{ asset('assets/img/sec3-img2.png') }}" alt="" class="img-fluid" width="100%">
                    <div class="inner-box ">
                        <div class="flex">
                            <div class="icon-img-box">
                                <i class="fa-solid fa-signal"></i>
                            </div>
                            <h3 class="ms-3">Improved <br>Defenses<span>.</span></h3>
                        </div>
                        <div class="progress progress-xs mb-5 mt-5 progress-animate ">
                            <div class="progress-bar !rounded-e-full bg-primary w-10">
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Been the industry's standard dummy</p>

                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4  md:col-span-4 sm:col-span-12 col-span-12 d!bg-[#f9fafb] dark:!bg-black/10 border dark:border-defaultborder/10 img-boxthree">
                    <img src="{{ asset('assets/img/sec3-img3.png') }}" alt="" class="img-fluid" width="100%">
                    <div class="inner-box ">
                        <div class="flex">
                            <div class="icon-img-box">
                                <i class="fa-solid fa-signal"></i>
                            </div>
                            <h3 class="ms-3">Improved <br>Defenses<span>.</span></h3>
                        </div>
                        <div class="progress progress-xs mb-5 mt-5 progress-animate ">
                            <div class="progress-bar !rounded-e-full bg-primary w-10">
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Been the industry's standard dummy</p>
                    </div>
                </div>

            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">

                <div class="xxl:col-span-4 xl:col-span-4  md:col-span-4 sm:col-span-12 col-span-12 d!bg-[#f9fafb] dark:!bg-black/10 border dark:border-defaultborder/10 img-boxthree">
                    <img src="{{ asset('assets/img/sec3-img1.png') }}" alt="" class="img-fluid" width="100%">
                    <div class="inner-box ">
                        <div class="flex">
                            <div class="icon-img-box">
                                <i class="fa-solid fa-signal"></i>
                            </div>
                            <h3 class="ms-3">Improved <br>Defenses<span>.</span></h3>
                        </div>
                        <div class="progress progress-xs mb-5 mt-5 progress-animate ">
                            <div class="progress-bar !rounded-e-full bg-primary w-10">
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Been the industry's standard dummy</p>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4  md:col-span-4 sm:col-span-12 col-span-12 d!bg-[#f9fafb] dark:!bg-black/10 border dark:border-defaultborder/10 img-boxthree">
                    <img src="{{ asset('assets/img/sec3-img2.png') }}" alt="" class="img-fluid" width="100%">
                    <div class="inner-box ">
                        <div class="flex">
                            <div class="icon-img-box">
                                <i class="fa-solid fa-signal"></i>
                            </div>
                            <h3 class="ms-3">Improved <br>Defenses<span>.</span></h3>
                        </div>
                        <div class="progress progress-xs mb-5 mt-5 progress-animate ">
                            <div class="progress-bar !rounded-e-full bg-primary w-10">
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Been the industry's standard dummy</p>

                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4  md:col-span-4 sm:col-span-12 col-span-12 d!bg-[#f9fafb] dark:!bg-black/10 border dark:border-defaultborder/10 img-boxthree">
                    <img src="{{ asset('assets/img/sec3-img3.png') }}" alt="" class="img-fluid" width="100%">
                    <div class="inner-box ">
                        <div class="flex">
                            <div class="icon-img-box">
                                <i class="fa-solid fa-signal"></i>
                            </div>
                            <h3 class="ms-3">Improved <br>Defenses<span>.</span></h3>
                        </div>
                        <div class="progress progress-xs mb-5 mt-5 progress-animate ">
                            <div class="progress-bar !rounded-e-full bg-primary w-10">
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Been the industry's standard dummy</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="threat-section-four">
        <div class="container main-banner-container">
            <div class="grid grid-cols-12 gap-6">
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 ">
                    <h2 class="mt-3">25 Years OF EXPERIENCE</h2>
                    <h3 class="mt-3 text-black">Experst Are Here To Sove Your Finance Problems.</h3>
                    <p class="mt-3 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores quaerat,
                        quia saepe
                        consequuntur, laudantium, cum at expedita eligendi perferendis amet fugiat? Assumenda numquam nisi
                        at, laborum eligendi necessitatibus est?</p>
                    <p class="mt-3 mb-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa asperiores quaerat,
                        quia saepe
                        consequuntur laudantium, cum at expedita eligendi perferendis amet fugiat.</p>
                </div>
                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 col-span-12 pt-5">
                    <img src="{{asset('assets/img/thread-section-four.png') }}" alt="" class="img-fluid" width="90%">
                </div>
            </div>
        </div>
    </section>


    {{-- </div>
</div> --}}





@endsection
