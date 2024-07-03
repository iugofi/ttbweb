@extends('User.Layouts.layout')

@section('title', 'My Profile')



@section('content')


    <style>
        body {
            background-color: rgb(var(--body-bg));
        }
        div#example_length {
            display: none;
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
                                        {{-- <span class="me-4 inline-flex"><i
                                                class="ri-building-line me-1 align-middle"></i>Georgia</span> --}}
                                        <span class="inline-flex">
                                            <i class="ri-map-pin-line me-1 align-middle"></i>{{ isset($user_data->address) ? $user_data->address : 'N/A' }}</span>
                                    </p>
                                    <div class="flex mb-0">
                                        <div class="me-6">
                                            <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">{{ isset($keydetails->count) ? $keydetails->count : 'N/A' }}
                                            </p>
                                            <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Antivirus</p>
                                        </div>
                                        {{-- <div class="me-6">
                                            <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12
                                            </p>
                                            <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Total Security</p>
                                        </div> --}}
                                        <div class="me-6">
                                            <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">{{ isset($keydetails->count) ? $keydetails->count : 'N/A' }}
                                            </p>
                                            <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Vpn Shield</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                                <div class="mb-6">
                                    <p class="text-[.9375rem] mb-2 font-semibold">Professional Bio :</p>
                                    <p class="text-[0.75rem] text-[#8c9097] dark:text-white/50 opacity-[0.7] mb-0">
                                        I am <b class="text-defaulttextcolor"> @if (isset($user_data) && !empty($user_data->firstname) && !empty($user_data->lastname))
                                            {{ $user_data->firstname . ' ' . $user_data->lastname }}
                                        @else
                                            ! 
                                        @endif,</b> here by conclude
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
                                                                            id="modalCloseButtonotprofile"
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
                                                                        <form method="post" id="myprofilechangeother">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">First Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="first_name"
                                                                                    value="{{ isset($user_data->firstname) ? $user_data->firstname : '' }}"
                                                                                    id="first_name">
                                                                                <div class="invalid-feedback"></div>
                                                                                <input type="text" name="id_user"
                                                                                    value="{{ isset($user_data->id) ? \Crypt::encrypt($user_data->id) : '' }}"
                                                                                    hidden>

                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">Last Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="last_name"
                                                                                    value="{{ isset($user_data->lastname) ? $user_data->lastname : '' }}"
                                                                                    id="last_name">
                                                                                <div class="invalid-feedback"></div>

                                                                            </div>


                                                                            <div class="mb-3">
                                                                                <label for="exampleInputEmail1"
                                                                                    class="form-label">Email
                                                                                </label>
                                                                                <input type="email" class="form-control"
                                                                                    name="user_email"
                                                                                    value="{{ isset($user_data->email) ? $user_data->email : '' }}"
                                                                                    id="user_email" name=""
                                                                                    aria-describedby="emailHelp">
                                                                                <div class="invalid-feedback"></div>


                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">Phone</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="user_phone"
                                                                                    value="{{ isset($user_data->phone) ? $user_data->phone : '' }}"
                                                                                    id="user_phone">
                                                                                <div class="invalid-feedback"></div>

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputPassword1"
                                                                                    class="form-label">Address</label>
                                                                                <textarea type="text" class="form-control" name="user_address" id="user_address">{{ isset($user_data->address) ? $user_data->address : '' }}
                                                                                </textarea>
                                                                                <div class="invalid-feedback"></div>

                                                                            </div>



                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-btn-secondary-full"
                                                                            data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                                            Close
                                                                        </button>
                                                                        <input type="submit" id="profilechangeotherbtn"
                                                                            class="ti-btn ti-btn-primary-full"
                                                                            value="profile change">

                                                                    </div>
                                                                    </form>
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
                                                                            id="modalCloseButton"
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
                                                                            <div class="" id="show_success_alert">
                                                                            </div>

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
                                                                                        <input type="text"
                                                                                            name="id_user"
                                                                                            value="{{ isset($user_data->id) ? \Crypt::encrypt($user_data->id) : '' }}"
                                                                                            hidden>
                                                                                        <button aria-label="button"
                                                                                            class="ti-btn ti-btn-light !mb-0 !rounded-s-none"
                                                                                            type="button"
                                                                                            onclick="createpassword('reset-password',this)"
                                                                                            id="button-addon2"><i
                                                                                                class="ri-eye-off-line align-middle"></i></button>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="xl:col-span-12 col-span-12">
                                                                                    <label for="new_password"
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
                                                                                            onclick="createpassword('new_password',this)"
                                                                                            id="button-addon21"><i
                                                                                                class="ri-eye-off-line align-middle"></i></button>
                                                                                        <br>
                                                                                        <p class="invalid-feedback"
                                                                                            style="width:100%"></p>
                                                                                    </div>
                                                                                </div>


                                                                                <div
                                                                                    class="xl:col-span-12 col-span-12 mb-2">
                                                                                    <label for="confirm_password"
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
                                                                                            onclick="createpassword('confirm_password',this)"
                                                                                            id="button-addon22"><i
                                                                                                class="ri-eye-off-line align-middle"></i></button>
                                                                                        <br>
                                                                                        <p class="invalid-feedback"
                                                                                            style="width:100%"></p>
                                                                                    </div>
                                                                                </div>


                                                                            </div>

                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-btn-secondary-full"
                                                                                data-hs-overlay="#hs-vertically-centered-scrollable-modal-password">
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

                                                            <div class="box-body">
                                                                <div class="box text-center">
                                                                    <div class="" id="show_success_alert"></div>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table id="example" class="table-auto w-full">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="px-4 py-2">Product Id</th>
                                                                                <th class="px-4 py-2">Product Name</th>
                                                                                {{-- <th class="px-4 py-2">Product</th> --}}
                                                                                <th class="px-4 py-2">Invoice ID</th>
                                                                                <th class="px-4 py-2">Issued Date</th>
                                                                                <th class="px-4 py-2">Amount</th>
                                                                                <th class="px-4 py-2">Status</th>
                                                                                <th class="px-4 py-2">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($productdetails as $key => $item)
                                                                                <tr>
                                                                                    @php
                                                                                        $id = 1;
                                                                                    @endphp
                                                                                    <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                                                                    <td class="border px-4 py-2">@php
                                                                                        $product_name = DB::table('storepick')
                                                                                            ->select('*')
                                                                                            ->where(
                                                                                                'PICK_ID',
                                                                                                $item->key_type,
                                                                                            )
                                                                                            ->where('STORE_ID', 'key_type')
                                                                                            ->first();
                                                                                    @endphp
                                                                                        @if ($product_name)
                                                                                            {{ $product_name->PICK_TEXT }}
                                                                                        @else
                                                                                            No product found.
                                                                                        @endif
        </td>
                                                                                    {{-- <td class="border px-4 py-2">
                                                                                        <div class="flex items-center font-semibold">
                                                                                            <span class="!me-2 inline-flex justify-center items-center">
                                                                                                <img src="{{ asset('assets/images/ecommerce/png/ttb-box.png') }}"
                                                                                                    alt="img"
                                                                                                    class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                                                                            </span>
                                                                                        </div>
                                                                                    </td> --}}
                                                                                    <td class="border px-4 py-2">{{$item->pay_id}}</td>
                                                                                    <td class="border px-4 py-2">{{$item->pay_id}}</td>
                                                                                    <td class="border px-4 py-2">{{$item->amount_total}}</td>

                                                                                    <td class="border">
                                                                                       
                                                                                        @if ($item->payment_status=='paid')
                                                                                            
                                                                                            <span
                                                                                                class="inline-flex text-primary !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-primary/10">{{ $item->payment_status }}</span>
                                                                                        @else
                                                                                            <span
                                                                                                class="inline-flex text-danger !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-danger/10">Unpaid</span>
                                                                                        @endif
                                                                                    </td>
                                                                                    <td class="border px-4 py-2">
                                                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                                                            <a aria-label="anchor"
                                                                                                href="{{ route('user.invoice', \Crypt::encrypt($item->pay_id)) }}"
                                                                                                class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                                                                                                <i class="ri-printer-line"></i>
                                                                                            </a>
                                                                                            <button aria-label="button" type="button"
                                                                                                class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-blogs"
                                                                                                data-item-id="{{ $item->id }}">
                                                                                                <i
                                                                                                    class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete
                                                                                            </button>
                                    
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                    
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            <div class="tab-pane fade !p-0 !border-0 hidden" id="gallery-tab-pane"
                                                role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">

                                                <div class="grid grid-cols-12 sm:gap-x-6">
                                                    @foreach ($productdetails as $productdetails_list)
                                                        <div
                                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                                            <div
                                                                class="box !shadow-none border dark:border-defaultborder/10">
                                                                <div class="box-body p-6">
                                                                    <div class="text-center">
                                                                        <span class="avatar avatar-xl avatar-rounded">
                                                                            <img src="assets/images/ecommerce/png/ttb-box.png"
                                                                                alt="">
                                                                        </span>
                                                                        <div class="mt-2">
                                                                            <p class="mb-0 font-semibold">@php
                                                                                $product_name = DB::table('storepick')
                                                                                    ->select('*')
                                                                                    ->where(
                                                                                        'PICK_ID',
                                                                                        $productdetails_list->key_type,
                                                                                    )
                                                                                    ->where('STORE_ID', 'key_type')
                                                                                    ->first();
                                                                            @endphp
                                                                                @if ($product_name)
                                                                                    {{ $product_name->PICK_TEXT }}
                                                                                @else
                                                                                    No product found.
                                                                                @endif

                                                                            </p>
                                                                            <p
                                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-[#8c9097] dark:text-white/50">
                                                                                @php
                                                                                    $plan_name = DB::table('planname')
                                                                                        ->select('*')
                                                                                        ->where(
                                                                                            'plan_id',
                                                                                            $productdetails_list->plan_id,
                                                                                        )
                                                                                        ->first();
                                                                                @endphp
                                                                                @if ($plan_name)
                                                                                    {{ $plan_name->name }}
                                                                                @else
                                                                                    No product found.
                                                                                @endif
                                                                            </p>
                                                                            <span
                                                                                class="badge bg-info/10 rounded-full text-info">{{ $productdetails_list->product_key }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach


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

                    </div>
                </div>
            </div>
            <!--End::row-1 -->


        </div>
    </div>

  <!-- Grid JS -->
  <script src="{{ asset('assets/libs/gridjs/gridjs.umd.js') }}"></script>

  <!-- Internal Grid JS -->
  <script src="{{ asset('assets/js/grid.js') }}"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({

            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#passwordchangeprofile').submit(function(e) {
                e.preventDefault();
                $('#passprofilechangebtn').val('please wait..');
                $.ajax({
                    url: '{{ route('user.passchangeprifile') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status == 400) {
                            showError('confirm_password', response.messages.confirm_password);
                            showError('new_password', response.messages.new_password);
                            $('#passprofilechangebtn').val('Change Password');
                        } else if (response.status == 200) {
                            $("#show_success_alert").html(showMessage('success', response
                                .messages));
                            $('#passwordchangeprofile')[0].reset();
                            $('.invalid-feedback').empty();
                            removeValidationClass("#passwordchangeprofile");
                            $('#passprofilechangebtn').val('Change Password');
                            $('#modalCloseButton').click();
                        }
                    }
                });
            });
            $('#myprofilechangeother').submit(function(e) {
                e.preventDefault();
                $('#profilechangeotherbtn').val('please wait..');
                $.ajax({
                    url: '{{ route('user.myprofileother') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status == 400) {
                            showError('first_name', response.messages.first_name);
                            showError('last_name', response.messages.last_name);
                            showError('user_phone', response.messages.user_phone);
                            showError('user_address', response.messages.user_address);
                            showError('user_email', response.messages.user_email);

                            $('#profilechangeotherbtn').val('Change Password');
                        } else if (response.status == 200) {
                            $("#show_success_alert").html(showMessage('success', response
                                .messages));
                            $('#myprofilechangeother')[0].reset();
                            $('.invalid-feedback').empty();
                            removeValidationClass("#myprofilechangeother");
                            $('#profilechangeotherbtn').val('Change Password');
                            $('#modalCloseButtonotprofile').click();
                        }
                    }
                });
            });
        });
    </script>







@endsection
