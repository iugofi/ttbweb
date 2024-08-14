@extends('Admin.Layouts.layout')

@section('title', 'Mail Edit')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')



    <div class="content">
        <div class="main-content">
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
                            Mail Edit
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Mail Edit
                    </li>
                </ol>
            </div>
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div
                        class="sm:grid space-y-6 sm:space-y-0 grid-rows-3 grid-flow-col gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                        <div
                            class="p-4 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-span-3">
                            01</div>
                        <div
                            class="p-4 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-span-3">
                            02</div>
                        <div
                            class="p-4 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-span-3">
                            03</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
