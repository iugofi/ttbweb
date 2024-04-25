

@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

<div class="content">
    <div class="main-content">

         
        <div class="grid grid-cols-12 gap-6 mt-6">
            <div class="xl:col-span-9 col-span-12">
                <div class="team-members" id="team-members">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="team-header">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <div class="h5 font-semibold mb-0">Team Ui</div>
                                            <div class="flex items-center">
                                                <div class="input-group">
                                                    <input type="text" class="form-control w-full !bg-light border-0 !rounded-s-md" placeholder="Search Person Name" aria-describedby="search-team-member">
                                                    <button class="ti-btn ti-btn-light !mb-0" type="button" aria-label="button" id="search-team-member"><i class="ri-search-line text-[#8c9097] dark:text-white/50"></i></button>
                                                </div>
                                                <div class="hs-dropdown ti-dropdown ms-2">
                                                    <button class="ti-btn ti-btn-icon ti-btn-light !py-3 !mb-0" type="button" aria-label="button" aria-expanded="false">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Delete Team</a></li>
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Add Member</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
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
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box team-member-card">
                                <div class="teammember-cover-image">
                                    <img src="assets/images/media/team-covers/2.jpg" class="card-img-top" alt="...">
                                    <span class="avatar avatar-xl avatar-rounded">
                                        <img src="assets/images/faces/2.jpg" alt="">
                                    </span>
                                    <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                        <i class="ri-star-fill text-[1rem]"></i>
                                    </a>
                                </div>
                                <div class="box-body !p-0">
                                    <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed dark:border-defaultborder/10 p-4">
                                        <div class="team-member-details flex-grow">
                                            <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                <a href="javsscript:void(0);">Alicia Sierra</a>
                                            </p>
                                            <p class="mb-0 text-[0.75rem] text-[#8c9097] dark:text-white/50 text-truncate">aliciasierra1645@gmail.com</p>
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
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">2 Years</span>
                                        </div>
                                        <div class="text-center p-4 w-full">
                                            <p class="font-semibold mb-0">Projects</p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">78</span>
                                        </div>
                                        <div class="text-center p-4 w-full">
                                            <p class="font-semibold mb-0">Position</p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">Associate</span>
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
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box team-member-card">
                                <div class="teammember-cover-image">
                                    <img src="assets/images/media/team-covers/3.jpg" class="card-img-top" alt="...">
                                    <span class="avatar avatar-xl avatar-rounded">
                                        <img src="assets/images/faces/4.jpg" alt="">
                                    </span>
                                    <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                        <i class="ri-star-fill text-[1rem]"></i>
                                    </a>
                                </div>
                                <div class="box-body !p-0">
                                    <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed dark:border-defaultborder/10 p-4">
                                        <div class="team-member-details flex-grow">
                                            <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                <a href="javascript:void(0);">Angelica Hose</a>
                                            </p>
                                            <p class="mb-0 text-[0.75rem] text-[#8c9097] dark:text-white/50 text-truncate">angelica143@gmail.com</p>
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
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">12 Months</span>
                                        </div>
                                        <div class="text-center p-4 w-full">
                                            <p class="font-semibold mb-0">Projects</p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">35</span>
                                        </div>
                                        <div class="text-center p-4 w-full">
                                            <p class="font-semibold mb-0">Position</p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.75rem]">Member</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer border-dashed dark:border-defaultborder/10 text-center">
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
            <div class="xl:col-span-3 col-span-12">
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