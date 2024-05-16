@extends('User.Layouts.layout')

@section('title', 'My Profile')



@section('content')


    <style>
        body {
            background-color: rgb(var(--body-bg));
        }
    </style>





    <div class="content profile-contect">
        <div class="main-content">


            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Profile</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Pages
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Profile
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="box-body !p-0">
                            <div class="sm:flex items-start p-6      main-profile-cover">
                                <div>
                                    <span class="avatar avatar-xxl avatar-rounded online me-4">
                                        <img src="assets/images/faces/9.jpg" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow main-profile-info">
                                    <div class="flex items-center !justify-between">
                                        <p class="text-[0.75rem] text-white  opacity-[3.5]">
                                            Hello, </p>
                                        {{-- <button type="button" class="ti-btn ti-btn-light !font-medium !gap-0"><i
                                            class="ri-add-line me-1 align-middle inline-block"></i>Follow</button> --}}
                                    </div>
                                    <h6 class="font-semibold mb-1 text-white text-[1rem]">
                                        @if (isset($user_data) && !empty($user_data->firstname) && !empty($user_data->lastname))
                                            {{ $user_data->firstname . ' ' . $user_data->lastname }}
                                        @else
                                            ! username
                                        @endif
                                    </h6>
                                    <p class="text-[0.75rem] text-white mb-6 opacity-[0.5]">
                                        <span class="me-4 inline-flex"><i
                                                class="ri-building-line me-1 align-middle"></i>Georgia</span>
                                        <span class="inline-flex"><i
                                                class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
                                    </p>
                                    <div class="flex mb-0">
                                        <div class="me-6">
                                            <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">11</p>
                                            <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Antivirus</p>
                                        </div>
                                        <div class="me-6">
                                            <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12
                                            </p>
                                            <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Total Security</p>
                                        </div>
                                        <div class="me-6">
                                            <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12</p>
                                            <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Vpn Shield</p>
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
                                        @if (isset($user_data) && !empty($user_data->email))
                                            {{ $user_data->email }}
                                        @else
                                            ! Email
                                        @endif
                                    </p>
                                    <p class="mb-2">
                                        <span
                                            class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                            <i
                                                class="ri-phone-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                                        </span>
                                        @if (isset($user_data) && !empty($user_data->phone))
                                            {{ $user_data->phone }}
                                        @else
                                        @endif
                                    </p>
                                    <p class="mb-0">
                                        <span
                                            class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                            <i
                                                class="ri-map-pin-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                                        </span>
                                        @if (isset($user_data) && !empty($user_data->address))
                                            {{ $user_data->address }}
                                        @else
                                        @endif
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body !p-0">
                                    <div
                                        class="!p-4 border-b dark:border-defaultborder/10 border-dashed md:flex items-center justify-between">
                                        <nav class="-mb-0.5 sm:flex md:space-x-6 rtl:space-x-reverse pb-2">
                                            <a class="w-full sm:w-auto flex active hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-md py-2 px-4 text-primary text-sm"
                                                href="javascript:void(0);" id="activity-tab"
                                                data-hs-tab="#activity-tab-pane" aria-controls="activity-tab-pane">
                                                <i class="ri-shield-user-line  align-middle inline-block me-1"></i>Profile
                                                Information
                                            </a>
                                            <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-md  py-2 px-4 text-primary text-sm"
                                                href="javascript:void(0);" id="posts-tab" data-hs-tab="#posts-tab-pane"
                                                aria-controls="posts-tab-pane">
                                                <i class="ri-bill-line me-1 align-middle inline-block"></i>My Subscriptions
                                            </a>
                                            <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-md  py-2 px-4 text-primary text-sm"
                                                href="javascript:void(0);" id="followers-tab"
                                                data-hs-tab="#followers-tab-pane" aria-controls="followers-tab-pane">
                                                <i class="ri-bill-line me-1 align-middle inline-block"></i>Billing
                                                Information
                                            </a>
                                            <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-md  py-2 px-4 text-primary text-sm"
                                                href="javascript:void(0);" id="gallery-tab" data-hs-tab="#gallery-tab-pane"
                                                aria-controls="gallery-tab-pane">
                                                <i class="ri-list-ordered me-1 align-middle inline-block"></i>Order History
                                            </a>
                                        </nav>
                                        <div>
                                            <p class="font-semibold mb-2">Profile 60% completed - <a
                                                    href="javascript:void(0);" class="text-primary text-[0.75rem]">Finish
                                                    now</a></p>
                                            <div class="progress progress-xs progress-animate">
                                                <div class="progress-bar bg-primary w-[60%]"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="!p-4">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane show active fade !p-0 !border-0" id="activity-tab-pane"
                                                role="tabpanel" aria-labelledby="activity-tab" tabindex="0">




                                                <style>
                                                    .max-h-full.overflow-hidden.ti-modal-content {
                                                        width: 100%;
                                                    }

                                                    @media only screen and (max-width: 768px) {
                                                        .max-h-full.overflow-hidden.ti-modal-content {
                                                            margin: auto;
                                                        }

                                                        .open.ti-modal .ti-modal-box {
                                                            display: contents;
                                                        }
                                                    }
                                                </style>

                                                <div class="mt-3">
                                                    <div id="horizontal-alignment-1" role="tabpanel"
                                                        aria-labelledby="horizontal-alignment-item-1">
                                                        <button type="button"
                                                            class="hs-dropdown-toggle ti-btn ti-btn-primary-full m-1"
                                                            data-hs-overlay="#hs-vertically-centered-scrollable-modal"
                                                            style="float: right">
                                                            Edit Profile
                                                        </button>
                                                        <div id="hs-vertically-centered-scrollable-modal"
                                                            class="hs-overlay hidden ti-modal">
                                                            <div
                                                                class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                                                                <div class="max-h-full overflow-hidden ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h6 class="modal-title" id="staticBackdropLabel3">
                                                                            Edit Profile
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8"
                                                                                height="8" viewBox="0 0 8 8"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <div class="ti-modal-body">
                                                                        <form>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">First Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ isset($user_data->firstname) ? $user_data->firstname : '' }}"
                                                                                    id="name">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">Last Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ isset($user_data->lastname) ? $user_data->lastname : '' }}"
                                                                                    id="name">
                                                                            </div>


                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1"
                                                                                    class="form-label">Email
                                                                                </label>
                                                                                <input type="email" class="form-control"
                                                                                    value="{{ isset($user_data->email) ? $user_data->email : '' }}"
                                                                                    id="exampleInputEmail1"
                                                                                    aria-describedby="emailHelp">

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">Phone</label>
                                                                                <input type="text" class="form-control"
                                                                                    value="{{ isset($user_data->phone) ? $user_data->phone : '' }}"
                                                                                    id="phone">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">Address</label>
                                                                                <textarea type="text" class="form-control" id="address">{{ isset($user_data->address) ? $user_data->address : '' }}
                                                                        </textarea>
                                                                            </div>


                                                                        </form>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-btn-secondary-full"
                                                                            data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                                            Close
                                                                        </button>
                                                                        <a class="ti-btn ti-btn-primary-full"
                                                                            href="javascript:void(0);">
                                                                            profile change
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="button"
                                                            class="hs-dropdown-toggle ti-btn ti-btn-primary-full m-1"
                                                            data-hs-overlay="#hs-vertically-centered-scrollable-modal-password"
                                                            style="float: right">
                                                            Change Password
                                                        </button>
                                                        <div id="hs-vertically-centered-scrollable-modal-password"
                                                            class="hs-overlay hidden ti-modal">
                                                            <div
                                                                class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                                                                <div class="max-h-full overflow-hidden ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h6 class="modal-title" id="staticBackdropLabel3">
                                                                            Change Password
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#hs-vertically-centered-scrollable-modal-password">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8"
                                                                                height="8" viewBox="0 0 8 8"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form method="post" id="passwordchangeprofile">
                                                                        @csrf
                                                                        <div class="ti-modal-body">
                                                                            <div class="grid grid-cols-12 gap-y-4">
                                                                                <div class="xl:col-span-12 col-span-12">
                                                                                    <label for="reset-password"
                                                                                        class="form-label text-default">Current
                                                                                        Password</label>
                                                                                    <div class="input-group">
                                                                                        <input type="password"
                                                                                            class="form-control form-control-lg !rounded-e-none"
                                                                                            value="{{ isset($user_data->password) ? \Crypt::decrypt($user_data->password) : '' }}"
                                                                                            id="reset-password"
                                                                                            name="cuurent_password"
                                                                                            placeholder="current password"
                                                                                            disabled>
                                                                                        <button aria-label="button"
                                                                                            class="ti-btn ti-btn-light !mb-0 !rounded-s-none"
                                                                                            type="button"
                                                                                            onclick="createpassword('reset-password',this)"
                                                                                            id="button-addon2"><i
                                                                                                class="ri-eye-off-line align-middle"></i></button>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="xl:col-span-12 col-span-12">
                                                                                    <label for="reset-newpassword"
                                                                                        class="form-label text-default">New
                                                                                        Password</label>
                                                                                    <div class="input-group">
                                                                                        <input type="password"
                                                                                            class="form-control form-control-lg !rounded-e-none"
                                                                                            id="new_password"
                                                                                            name="new_password"
                                                                                            placeholder="new password">
                                                                                        <button aria-label="button"
                                                                                            class="ti-btn ti-btn-light !mb-0 !rounded-s-none"
                                                                                            type="button"
                                                                                            onclick="createpassword('reset-newpassword',this)"
                                                                                            id="button-addon21"><i
                                                                                                class="ri-eye-off-line align-middle"></i></button>
                                                                                    </div>
                                                                                    <div class="invalid-feedback"></div>

                                                                                </div>
                                                                                <div
                                                                                    class="xl:col-span-12 col-span-12 mb-2">
                                                                                    <label for="reset-confirmpassword"
                                                                                        class="form-label text-default ">Confirm
                                                                                        Password</label>
                                                                                    <div class="input-group">
                                                                                        <input type="password"
                                                                                            class="form-control form-control-lg !rounded-e-none"
                                                                                            id="confirm_password"
                                                                                            name="confirm_password"
                                                                                            placeholder="confirm password">
                                                                                        <button aria-label="button"
                                                                                            class="ti-btn ti-btn-light !mb-0 !rounded-s-none"
                                                                                            type="button"
                                                                                            onclick="createpassword('reset-confirmpassword',this)"
                                                                                            id="button-addon22"><i
                                                                                                class="ri-eye-off-line align-middle"></i></button>
                                                                                    </div>
                                                                                    <div class="invalid-feedback"></div>


                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-btn-secondary-full"
                                                                                data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                                                Close
                                                                            </button>
                                                                            <input type="submit"
                                                                                id="passprofilechangebtn"
                                                                                class="ti-btn ti-btn-primary-full"
                                                                                value="Change Password">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <p
                                                            class="text-gray-500 dark:text-[#8c9097] dark:text-white/50 p-5 border rounded-sm dark:border-white/10 border-gray-200">
                                                        <div class="box-body">
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <div class="flex flex-wrap items-center">
                                                                        <div class="me-2 font-semibold">
                                                                            Name:
                                                                        </div>
                                                                        <span
                                                                            class="text-[0.75rem] text-[#8c9097] dark:text-white/50"
                                                                            id="name">
                                                                            @if (isset($user_data) && !empty($user_data->firstname))
                                                                                {{ $user_data->firstname . ' ' . $user_data->lastname }}
                                                                            @else
                                                                                ?
                                                                            @endif
                                                                        </span>
                                                                    </div>
                                                                </li>

                                                                <li class="list-group-item">
                                                                    <div class="flex flex-wrap items-center">
                                                                        <div class="me-2 font-semibold">
                                                                            Email :
                                                                        </div>
                                                                        <span
                                                                            class="text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                                            @if (isset($user_data) && !empty($user_data->email))
                                                                                {{ $user_data->email }}
                                                                            @else
                                                                                ! Email
                                                                            @endif
                                                                        </span>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="flex flex-wrap items-center">
                                                                        <div class="me-2 font-semibold">
                                                                            Phone :
                                                                        </div>
                                                                        <span
                                                                            class="text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                                            @if (isset($user_data) && !empty($user_data->phone))
                                                                                {{ $user_data->phone }}
                                                                            @else
                                                                                ! Email
                                                                            @endif
                                                                        </span>


                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="flex flex-wrap items-center">
                                                                        <div class="me-2 font-semibold">
                                                                            Address :
                                                                        </div>
                                                                        <span
                                                                            class="text-[0.75rem] text-[#8c9097] dark:text-white/50">
                                                                            @if (isset($user_data) && !empty($user_data->address))
                                                                                {{ $user_data->address }}
                                                                            @else
                                                                                ! Email
                                                                            @endif
                                                                        </span>


                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <div id="horizontal-alignment-2" class="hidden" role="tabpanel"
                                                        aria-labelledby="horizontal-alignment-item-2">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label">First Name</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ isset($user_data->firstname) ? $user_data->firstname : '' }}"
                                                                    id="name">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1" class="form-label">Last
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ isset($user_data->lastname) ? $user_data->lastname : '' }}"
                                                                    id="lastname">
                                                            </div>


                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Email
                                                                </label>
                                                                <input type="email" class="form-control"
                                                                    value="{{ isset($user_data->email) ? $user_data->email : '' }}"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp">

                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ isset($user_data->phone) ? $user_data->phone : '' }}"
                                                                    id="phone">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1"
                                                                    class="form-label">Address</label>
                                                                <textarea type="text" class="form-control" id="address">{{ isset($user_data->address) ? $user_data->address : '' }}
                                                            </textarea>
                                                            </div>

                                                            <button type="submit"
                                                                class="ti-btn ti-btn-primary-full">Submit</button>
                                                        </form>
                                                    </div>

                                                </div>




                                            </div>
                                            <div class="tab-pane fade !p-0 !border-0 hidden !rounded-md"
                                                id="posts-tab-pane" role="tabpanel" aria-labelledby="posts-tab"
                                                tabindex="0">
                                                <ul class="list-group !rounded-md">
                                                    <li class="list-group-item">
                                                        <div class="sm:flex items-center leading-none">
                                                            <div class="me-4">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="assets/images/faces/9.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <div class="flex">
                                                                    <input type="text"
                                                                        class="form-control !rounded-e-none !w-full"
                                                                        placeholder="Recipient's username"
                                                                        aria-label="Recipient's username with two button addons">
                                                                    <button aria-label="button"
                                                                        class="ti-btn ti-btn-light !rounded-none !mb-0"
                                                                        type="button"><i
                                                                            class="bi bi-emoji-smile"></i></button>
                                                                    <button aria-label="button"
                                                                        class="ti-btn ti-btn-light !rounded-none !mb-0"
                                                                        type="button"><i
                                                                            class="bi bi-paperclip"></i></button>
                                                                    <button aria-label="button"
                                                                        class="ti-btn ti-btn-light !rounded-none !mb-0"
                                                                        type="button"><i
                                                                            class="bi bi-camera"></i></button>
                                                                    <button
                                                                        class="ti-btn bg-primary !mb-0 !rounded-s-none text-white"
                                                                        type="button">Post</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>



                                            <div class="tab-pane fade !p-0 !border-0 hidden" id="followers-tab-pane"
                                                role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                                                <div class="grid grid-cols-6 gap-x-6">
                                                    <div class="xl:col-span-9 col-span-12">
                                                        <div class="box">
                                                            {{-- <div class="box-header justify-between">
                                                            <div class="box-title">
                                                                Manage Invoices
                                                            </div>
                                                            <div class="flex">
                                                                <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !text-white !font-medium bg-primary"><i class="ri-add-line font-semibold align-middle me-1"></i> Create Invoice</button>
                                                                <div class="hs-dropdown ti-dropdown ms-2">
                                                                    <button aria-label="button" type="button" class="ti-btn ti-btn-secondary ti-btn-sm" aria-expanded="false">
                                                                        <i class="ti ti-dots-vertical"></i>
                                                                    </button>
                                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">All Invoices</a></li>
                                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Paid Invoices</a></li>
                                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Pending Invoices</a></li>
                                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Overdue Invoices</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                            <div class="box-body">
                                                                <div class="table-responsive">
                                                                    <table
                                                                        class="table whitespace-nowrap table-bordered min-w-full">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" class="text-start">
                                                                                    Product</th>
                                                                                <th scope="col" class="text-start">
                                                                                    Invoice ID</th>
                                                                                <th scope="col" class="text-start">
                                                                                    Issued Date</th>
                                                                                <th scope="col" class="text-start">
                                                                                    Amount</th>
                                                                                <th scope="col" class="text-start">
                                                                                    Status</th>
                                                                                <th scope="col" class="text-start">Due
                                                                                    Date</th>
                                                                                <th scope="col" class="text-start">
                                                                                    Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr
                                                                                class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                                                <td>
                                                                                    <div class="flex items-center">
                                                                                        <div class="me-2 leading-none">
                                                                                            <span
                                                                                                class="avatar avatar-sm avatar-rounded">
                                                                                                <img src="assets/images/faces/11.jpg"
                                                                                                    alt="">
                                                                                            </span>
                                                                                        </div>
                                                                                        <div>
                                                                                            <p class="mb-0 font-semibold">
                                                                                                Json Taylor</p>
                                                                                            <p
                                                                                                class="mb-0 text-[.6875rem] text-[#8c9097] dark:text-white/50">
                                                                                                jsontaylor2416@gmail.com</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="font-semibold text-primary">
                                                                                        #SPK12032901
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    25,Nov 2022
                                                                                </td>
                                                                                <td>
                                                                                    $212.45
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-success/10 text-success">Paid</span>
                                                                                </td>
                                                                                <td>
                                                                                    25,Dec 2022
                                                                                </td>
                                                                                <td>
                                                                                    <button aria-label="button"
                                                                                        type="button"
                                                                                        class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i
                                                                                            class="ri-printer-line"></i></button>
                                                                                    <button aria-label="button"
                                                                                        type="button"
                                                                                        class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i
                                                                                            class="ri-delete-bin-5-line"></i></button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr
                                                                                class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                                                <td>
                                                                                    <div class="flex items-center">
                                                                                        <div class="me-2 leading-none">
                                                                                            <span
                                                                                                class="avatar avatar-sm avatar-rounded">
                                                                                                <img src="assets/images/faces/7.jpg"
                                                                                                    alt="">
                                                                                            </span>
                                                                                        </div>
                                                                                        <div>
                                                                                            <p class="mb-0 font-semibold">
                                                                                                Suzika Stallone</p>
                                                                                            <p
                                                                                                class="mb-0 text-[.6875rem] text-[#8c9097] dark:text-white/50">
                                                                                                suzikastallone3214@gmail.com
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="font-semibold text-primary">
                                                                                        #SPK12032912
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    13,Nov 2022
                                                                                </td>
                                                                                <td>
                                                                                    $512.99
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-warning/10 text-warning">Pending</span>
                                                                                </td>
                                                                                <td>
                                                                                    13,Dec 2022
                                                                                </td>
                                                                                <td>
                                                                                    <button aria-label="button"
                                                                                        type="button"
                                                                                        class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i
                                                                                            class="ri-printer-line"></i></button>
                                                                                    <button aria-label="button"
                                                                                        type="button"
                                                                                        class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i
                                                                                            class="ri-delete-bin-5-line"></i></button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr
                                                                                class="invoice-list border border-defaultborder dark:border-defaultborder/10">
                                                                                <td>
                                                                                    <div class="flex items-center">
                                                                                        <div class="me-2 leading-none">
                                                                                            <span
                                                                                                class="avatar avatar-sm avatar-rounded">
                                                                                                <img src="assets/images/faces/15.jpg"
                                                                                                    alt="">
                                                                                            </span>
                                                                                        </div>
                                                                                        <div>
                                                                                            <p class="mb-0 font-semibold">
                                                                                                Roman Killon</p>
                                                                                            <p
                                                                                                class="mb-0 text-[.6875rem] text-[#8c9097] dark:text-white/50">
                                                                                                romankillon143@gmail.com</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="font-semibold text-primary">
                                                                                        #SPK12032945
                                                                                    </a>
                                                                                </td>
                                                                                <td>
                                                                                    30,Nov 2022
                                                                                </td>
                                                                                <td>
                                                                                    $2199.49
                                                                                </td>
                                                                                <td>
                                                                                    <span
                                                                                        class="badge bg-danger/10 text-danger">Overdue</span>
                                                                                </td>
                                                                                <td>
                                                                                    30,Dec 2022
                                                                                </td>
                                                                                <td>
                                                                                    <button aria-label="button"
                                                                                        type="button"
                                                                                        class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i
                                                                                            class="ri-printer-line"></i></button>
                                                                                    <button aria-label="button"
                                                                                        type="button"
                                                                                        class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn"><i
                                                                                            class="ri-delete-bin-5-line"></i></button>
                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="box-footer">
                                                                <nav aria-label="Page navigation">
                                                                    <ul
                                                                        class="ti-pagination ltr:float-right rtl:float-left mb-0">
                                                                        <li class="page-item disabled"><a
                                                                                class="page-link px-3 py-[0.375rem]"
                                                                                href="javascript:void(0);">Previous</a>
                                                                        </li>
                                                                        <li class="page-item"><a
                                                                                class="page-link active px-3 py-[0.375rem]"
                                                                                href="javascript:void(0);">1</a></li>
                                                                        <li class="page-item"><a
                                                                                class="page-link px-3 py-[0.375rem]"
                                                                                href="javascript:void(0);">2</a></li>
                                                                        <li class="page-item hidden sm:block"><a
                                                                                class="page-link px-3 py-[0.375rem]"
                                                                                href="javascript:void(0);">3</a></li>
                                                                        <li class="page-item"><a
                                                                                class="page-link px-3 py-[0.375rem]"
                                                                                href="javascript:void(0);">Next</a></li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            <div class="tab-pane fade !p-0 !border-0 hidden" id="gallery-tab-pane"
                                                role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                        <div class="box !shadow-none border dark:border-defaultborder/10">
                                                            <div class="box-body p-6">
                                                                <div class="text-center">
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="assets/images/ecommerce/png/ttb-box.png"
                                                                            alt="">
                                                                    </span>
                                                                    <div class="mt-2">
                                                                        <p class="mb-0 font-semibold">TTB Total Security
                                                                        </p>
                                                                        <p
                                                                            class="text-[0.75rem] opacity-[0.7] mb-1 text-[#8c9097] dark:text-white/50">
                                                                            samanthamay2912@gmail.com</p>
                                                                        <span
                                                                            class="badge bg-info/10 rounded-full text-info">Team
                                                                            Member</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                        <div class="box !shadow-none border dark:border-defaultborder/10">
                                                            <div class="box-body p-6">
                                                                <div class="text-center">
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="assets/images/ecommerce/png/ttb-box.png"
                                                                            alt="">
                                                                    </span>
                                                                    <div class="mt-2">
                                                                        <p class="mb-0 font-semibold">TTB VPN Shield</p>
                                                                        <p
                                                                            class="text-[0.75rem] opacity-[0.7] mb-1 text-[#8c9097] dark:text-white/50">
                                                                            andrewgarfield98@gmail.com</p>
                                                                        <span
                                                                            class="badge bg-success/10 text-success rounded-full">Team
                                                                            Lead</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div
                                                        class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                        <div class="box !shadow-none border dark:border-defaultborder/10">
                                                            <div class="box-body p-6">
                                                                <div class="text-center">
                                                                    <span class="avatar avatar-xl avatar-rounded">
                                                                        <img src="assets/images/ecommerce/png/ttb-box.png"
                                                                            alt="">
                                                                    </span>
                                                                    <div class="mt-2">
                                                                        <p class="mb-0 font-semibold">TTB Antivirus</p>
                                                                        <p
                                                                            class="text-[0.75rem] opacity-[0.7] mb-1 text-[#8c9097] dark:text-white/50">
                                                                            andrewgarfield98@gmail.com</p>
                                                                        <span
                                                                            class="badge bg-success/10 text-success rounded-full">Team
                                                                            Lead</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-span-12">
                                                        <div class="text-center !mt-4">
                                                            <button type="button"
                                                                class="ti-btn ti-btn-primary !font-medium btn-wave">Show
                                                                All</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="xl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    Personal Info
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Name :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">Sonya
                                                Taylor</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Email :
                                            </div>
                                            <span
                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50">sonyataylor231@gmail.com</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Phone :
                                            </div>
                                            <span
                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50">+(555)
                                                555-1234</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Designation :
                                            </div>
                                            <span
                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50">C.E.O</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Age :
                                            </div>
                                            <span
                                                class="text-[0.75rem] text-[#8c9097] dark:text-white/50">28</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Experience :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">10
                                                Years</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Recent Posts
                                </div>
                                <div>
                                    <span class="badge bg-primary/10 text-primary">Today</span>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="javascript:void(0);">
                                            <div class="flex flex-wrap items-center">
                                                <span class="avatar avatar-md me-4 !mb-0">
                                                    <img src="assets/images/media/media-39.jpg"
                                                        class="img-fluid !rounded-md" alt="...">
                                                </span>
                                                <div class="flex-grow">
                                                    <p class="font-semibold mb-0">Animals</p>
                                                    <p
                                                        class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                        There are many variations of passages of Lorem Ipsum
                                                        available
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javascript:void(0);">
                                            <div class="flex flex-wrap items-center">
                                                <span class="avatar avatar-md me-4 !mb-0">
                                                    <img src="assets/images/media/media-56.jpg"
                                                        class="img-fluid !rounded-md" alt="...">
                                                </span>
                                                <div class="flex-grow">
                                                    <p class="font-semibold mb-0">Travel</p>
                                                    <p
                                                        class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                        Latin words, combined with a handful of model sentence
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javascript:void(0);">
                                            <div class="flex flex-wrap items-center">
                                                <span class="avatar avatar-md me-4 !mb-0">
                                                    <img src="assets/images/media/media-54.jpg"
                                                        class="img-fluid !rounded-md" alt="...">
                                                </span>
                                                <div class="flex-grow">
                                                    <p class="font-semibold mb-0">Interior</p>
                                                    <p
                                                        class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                        Contrary to popular belief, Lorem Ipsum is not simply
                                                        random
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javascript:void(0);">
                                            <div class="flex flex-wrap items-center">
                                                <span class="avatar avatar-md me-4 !mb-0">
                                                    <img src="assets/images/media/media-64.jpg"
                                                        class="img-fluid !rounded-md" alt="...">
                                                </span>
                                                <div class="flex-grow">
                                                    <p class="font-semibold mb-0">Nature</p>
                                                    <p
                                                        class="mb-0 text-[0.75rem] profile-recent-posts text-truncate text-[#8c9097] dark:text-white/50">
                                                        It is a long established fact that a reader will be
                                                        distracted by the readable content
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-4 col-span-12">
                        <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">
                                    Suggestions
                                </div>
                                <div>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-success">View
                                        All</button>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="flex items-center justify-between">
                                            <div class="font-semibold flex items-center">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/faces/15.jpg" alt="">
                                                </span>Alister
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex items-center justify-between">
                                            <div class="font-semibold flex items-center">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/faces/4.jpg" alt="">
                                                </span>Samantha Sams
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex items-center justify-between">
                                            <div class="font-semibold flex items-center">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/faces/11.jpg" alt="">
                                                </span>Jason Mama
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex items-center justify-between">
                                            <div class="font-semibold flex items-center">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/faces/5.jpg" alt="">
                                                </span>Alicia Sierra
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex items-center justify-between">
                                            <div class="font-semibold flex items-center">
                                                <span class="avatar avatar-xs me-2">
                                                    <img src="assets/images/faces/7.jpg" alt="">
                                                </span>Kiara Advain
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-primary !mb-0">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
            <!--End::row-1 -->


        </div>
    </div>





    <script>
        $(document).ready(function() {
            $('#passwordchangeprofile').submit(function(e) {
                e.preventDefault();
                $('#passprofilechangebtn').val('please wait..');
                $.ajax({
                    url: '{{ route('user.saveregister') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status == 400) {
                            showError('signup_firstname', response.messages.signup_firstname);
                            showError('signup_lastname', response.messages.signup_lastname);
                            $('#passprofilechangebtn').val('Change Password');
                        } else if (response.status == 200) {
                            $("#show_success_alert").html(showMessage('success', response
                                .messages));
                            $('#passwordchangeprofile')[0].reset();
                            $('.invalid-feedback').empty();
                            removeValidationClass("#passwordchangeprofile");
                            $('#passprofilechangebtn').val('Change Password');
                        }
                    }
                });
            });
        });
    </script>






@endsection
