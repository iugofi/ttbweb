@extends('Admin.Layouts.layout')

@section('title', 'TTB Admin Profile')
@section('Description',
    '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')

<div class="content">
    <div class="main-content">


        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                <div class="box overflow-hidden">
                    <div class="box-body !p-0">
                        <div class="sm:flex items-start p-6      main-profile-cover">
                            <div>
                                <span class="avatar avatar-xxl avatar-rounded online me-4">
                                    <img src="{{asset('assets/images/faces/9.jpg')}}" alt="">
                                </span>
                            </div>
                            <div class="flex-grow main-profile-info">
                                <div class="flex items-center !justify-between">
                                    <h6 class="font-semibold mb-1 text-white text-[1rem]">{{isset($admindata->name) ?$admindata->name : '' }}</h6>
                                    <button type="button" class="ti-btn ti-btn-light !font-medium !gap-0"><i
                                            class="ri-add-line me-1 align-middle inline-block"></i>Follow</button>
                                </div>
                                <p class="mb-1 !text-white  opacity-[0.7]">Chief Executive Officer (C.E.O)</p>
                                <p class="text-[0.75rem] text-white mb-6 opacity-[0.5]">
                                    <span class="me-4 inline-flex"><i
                                            class="ri-building-line me-1 align-middle"></i>Georgia</span>
                                    <span class="inline-flex"><i
                                            class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
                                </p>
                                <div class="flex mb-0">
                                    <div class="me-6">
                                        <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">113</p>
                                        <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Projects</p>
                                    </div>
                                    <div class="me-6">
                                        <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12.2k
                                        </p>
                                        <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Followers</p>
                                    </div>
                                    <div class="me-6">
                                        <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">128</p>
                                        <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Following</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                            <div class="mb-6">
                                <p class="text-[.9375rem] mb-2 font-semibold">Professional Bio :</p>
                                <p class="text-[0.75rem] text-[#8c9097] dark:text-white/50 opacity-[0.7] mb-0">
                                    I am <b class="text-defaulttextcolor">Sonya Taylor,</b> here by conclude
                                    that,i am the founder and managing director of the prestigeous company name
                                    laugh at all and acts as the cheif executieve officer of the company.
                                </p>
                            </div>
                            <div class="mb-0">
                                <p class="text-[.9375rem] mb-2 font-semibold">Links :</p>
                                <div class="mb-0">
                                    <p class="mb-1">
                                        <a href="javascript:void(0)"
                                            class="text-primary"><u>https://www.spruko.com/</u></a>
                                    </p>
                                    <p class="mb-0">
                                        <a href="javascript:void(0)"
                                            class="text-primary"><u>https://themeforest.net/user/
                                                spruko/portfolio</u></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                            <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                            <div class="text-[#8c9097] dark:text-white/50">
                                <p class="mb-2">
                                    <span
                                        class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                        <i
                                            class="ri-mail-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                                    </span>
                                    sonyataylor2531@gmail.com
                                </p>
                                <p class="mb-2">
                                    <span
                                        class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                        <i
                                            class="ri-phone-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                                    </span>
                                    +(555) 555-1234
                                </p>
                                <p class="mb-0">
                                    <span
                                        class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                        <i
                                            class="ri-map-pin-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                                    </span>
                                    MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                                </p>
                            </div>
                        </div>
                        <div
                            class="p-6 border-b dark:border-defaultborder/10 border-dashed sm:flex items-center">
                            <p class="text-[.9375rem] mb-2 me-6 font-semibold">Social Networks :</p>
                            <div class="btn-list mb-0">
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-primary text-primary me-[.375rem] mb-1">
                                    <i class="ri-facebook-line font-semibold"></i>
                                </button>
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-secondary me-[.375rem] mb-1">
                                    <i class="ri-twitter-line font-semibold"></i>
                                </button>
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-warning me-[.375rem] mb-1">
                                    <i class="ri-instagram-line font-semibold"></i>
                                </button>
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-success me-[.375rem] mb-1">
                                    <i class="ri-github-line font-semibold"></i>
                                </button>
                                <button aria-label="button" type="button"
                                    class="ti-btn ti-btn-sm ti-btn-danger me-[.375rem] mb-1">
                                    <i class="ri-youtube-line font-semibold"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6 border-b dark:border-defaultborder/10 border-dashed">
                            <p class="text-[.9375rem] mb-2 me-6 font-semibold">Skills :</p>
                            <div>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Cloud
                                        computing</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Data
                                        analysis</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">DevOps</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Machine
                                        learning</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Programming</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Security</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Python</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">JavaScript</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Ruby</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">PowerShell</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Statistics</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span
                                        class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">SQL</span>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-[.9375rem] mb-2 me-6 font-semibold">Followers :</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="sm:flex items-start">
                                        <span class="avatar avatar-sm">
                                            <img src="{{asset('assets/images/faces/1.jpg')}}" alt="img" class="rounded-md">
                                        </span>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                            <p class="mb-0 leading-none">Alicia Sierra</p>
                                            <span
                                                class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">aliciasierra389@gmail.com</span>
                                        </div>
                                        <button type="button"
                                            class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="sm:flex items-start">
                                        <span class="avatar avatar-sm">
                                            <img src="{{asset('assets/images/faces/3.jpg')}}" alt="img" class="rounded-md">
                                        </span>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                            <p class="mb-0 leading-none">Samantha Mery</p>
                                            <span
                                                class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">samanthamery@gmail.com</span>
                                        </div>
                                        <button type="button"
                                            class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="sm:flex items-start">
                                        <span class="avatar avatar-sm">
                                            <img src="{{asset('assets/images/faces/6.jpg')}}" alt="img" class="rounded-md">
                                        </span>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                            <p class="mb-0 leading-none">Juliana Pena</p>
                                            <span
                                                class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">juliapena555@gmail.com</span>
                                        </div>
                                        <button type="button"
                                            class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="sm:flex items-start">
                                        <span class="avatar avatar-sm">
                                            <img src="{{asset('assets/images/faces/15.jpg')}}" alt="img" class="rounded-md">
                                        </span>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                            <p class="mb-0 leading-none">Adam Smith</p>
                                            <span
                                                class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">adamsmith99@gmail.com</span>
                                        </div>
                                        <button type="button"
                                            class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="sm:flex items-start">
                                        <span class="avatar avatar-sm">
                                            <img src="{{asset('assets/images/faces/13.jpg')}}" alt="img" class="rounded-md">
                                        </span>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-1 font-semibold flex-grow">
                                            <p class="mb-0 leading-none">Farhaan Amhed</p>
                                            <span
                                                class="text-[.6875rem] text-[#8c9097] dark:text-white/50 opacity-[0.7]">farhaanahmed989@gmail.com</span>
                                        </div>
                                        <button type="button"
                                            class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">Follow</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>


    </div>
</div>



@endsection

