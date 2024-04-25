

@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')
@section('content')


<style>
    body{
        background-color: rgb(var(--body-bg));
    }
</style>

<div class="content">
    <div class="main-content">

         
        <div class="grid grid-cols-12 gap-6 mt-6">
            <div class="xl:col-span-8 col-span-12">
                <div class="team-members" id="team-members">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="team-header">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <div class="h5 font-semibold mb-0">Team Ui</div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Overview
                                    </div>
                                    
                                </div>
                                <div class="box-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll
                                                never share your email
                                                with
                                                anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check !ps-0">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label ps-2" for="exampleCheck1">Check
                                                me out</label>
                                        </div>
                                        <button type="submit" class="ti-btn ti-btn-primary-full">Submit</button>
                                    </form>
                                </div>
                                <div class="box-footer hidden !border-t-0">

                                </div>
                            </div>
                        </div>

                       
                    </div>
                    
                </div>
            </div>
            <div class="xl:col-span-4 col-span-12">
                <div class="team-groups">
                    <div class="box">
                        <div class="box-header  !justify-between">
                            <h6 class="font-semibold mb-0">All Teams</h6>
                            
                        </div>
                        <div class="box-body !p-0">
                            <div class="box team-member-card">
                                <div class="teammember-cover-image">
                                    <img src="assets/images/media/team-covers/1.jpg" class="card-img-top" alt="...">
                                    <span class="avatar avatar-xl avatar-rounded">
                                        <img src="assets/images/faces/11.jpg" alt="">
                                    </span>
                                    <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-warning">
                                        <i class="ri-star-fill text-[1rem]"></i>
                                    </a>
                                </div>
                                <div class="box-body !p-0">
                                    <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed dark:border-defaultborder/10 p-4">
                                        <div class="team-member-details flex-grow">
                                            <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                <a href="javascript:void(0);">Alexander Smith</a>
                                            </p>
                                            <p class="mb-0 text-[0.75rem] text-[#8c9097] dark:text-white/50 text-truncate">alexandersmith2135@gmail.com</p>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member-stats sm:flex items-center justify-evenly">
                                        <div class="text-center p-4 w-full">
                                            <p class="font-semibold mb-0">Member Since</p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">16 Months</span>
                                        </div>
                                        <div class="text-center p-4 w-full">
                                            <p class="font-semibold mb-0">Projects</p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">45</span>
                                        </div>
                                        <div class="text-center p-4 w-full">
                                            <p class="font-semibold mb-0">Position</p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">Member</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer border-block-start-dashed dark:border-defaultborder/10 text-center">
                                    <div class="btn-list">
                                        <div class="btn-list">
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                <i class="ri-facebook-line font-bold"></i>
                                            </button>
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                <i class="ri-twitter-line font-bold"></i>
                                            </button>
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                <i class="ri-instagram-line font-bold"></i>
                                            </button>
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                <i class="ri-github-line font-bold"></i>
                                            </button>
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                <i class="ri-youtube-line font-bold"></i>
                                            </button>
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

         



@endsection