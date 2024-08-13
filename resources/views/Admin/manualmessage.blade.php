@extends('Admin.Layouts.layout')

@section('title', 'Manual Message')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                {{-- <h3
                    class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                    Admin Create </h3> --}}
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                        href="javascript:void(0);">
                        Manual Message
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Add Manual User
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Add Manual User</div>
                    </div>
                    <form method="post" id="key_add_form" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>
                            <div class="grid grid-cols-12 gap-4">

                                <div class="xl:col-span-6 col-span-12">
                                    <label for="canonical-url" class="form-label">Email Subject</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="main_key" name="main_key" placeholder="Enter Key" maxlength="29" onkeydown="addHyphen(this)">
                                    <div class="invalid-feedback"></div>
                                </div>


                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label">Email Content</label>
                                    <textarea name="blog_description" id="editoronebest" height="210"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label">Email Id</label>
                                    <textarea class="form-control block w-full" height="210"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-end">
                                {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                <input type="submit" value="Save Key" id="key_save_btn"
                                    class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            Recent Plan
                        </div>
                    </div>
                    <div class="box-body" id="recentpost">
                        <ul class="list-group">
                            <!-- Recent posts will be dynamically added here -->
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        <!--End::row-1 -->


    </div>
</div>



@endsection
