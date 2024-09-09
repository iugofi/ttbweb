@extends('Admin.Layouts.layout')

@section('title', 'Manual Key List')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


<link rel="stylesheet" href="{{ asset('assets/libs/gridjs/theme/mermaid.min.css') }}">

<style>
    div#showdata_length {
        display: none;
    }

    body {
        background-color: rgb(var(--body-bg));
    }
</style>

<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                {{-- <h3
                    class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                    News</h3> --}}
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                        href="javascript:void(0);">
                        Tables
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Event List
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->



        <!-- Start:: row-4 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box custom-box">
                    <div class="box-header">
                        <div class="box-title">
                            Event List
                        </div>
                    </div>


                    <div class="box-body">
                        <div class="box text-center">
                            <div class="" id="show_success_alert"></div>
                        </div>
                    <div class="table-responsive">
                        <table id="showdata" class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Id</th>
                                    <th class="px-4 py-2">user_id</th>
                                    <th class="px-4 py-2">order_id</th>
                                    <th class="px-4 py-2">description</th>
                                    <th class="px-4 py-2">Action</th>

                                    {{-- <th class="px-4 py-2">price</th>
                                    <th class="px-4 py-2">discount</th>
                                    <th class="px-4 py-2">coupons</th>
                                    <th class="px-4 py-2">product_id</th>
                                    <th class="px-4 py-2">email</th>
                                    <th class="px-4 py-2">firstname</th>
                                    <th class="px-4 py-2">lastname</th>
                                    <th class="px-4 py-2">phoneno</th>
                                    <th class="px-4 py-2">pincode</th>
                                    <th class="px-4 py-2">city</th>
                                    <th class="px-4 py-2">discount</th>
                                    <th class="px-4 py-2">state</th>
                                    <th class="px-4 py-2">address</th>
                                    <th class="px-4 py-2">same_as_shipping</th>
                                    <th class="px-4 py-2">payment_status</th>
                                    <th class="px-4 py-2">payment_method</th>
                                    <th class="px-4 py-2">transaction_id</th>
                                    <th class="px-4 py-2">payment_time</th> --}}


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paymentdetails as $key => $item)
                                    <tr>
                                        @php
                                            $id = 1;
                                        @endphp
                                        <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                        <td class="border px-4 py-2">{{ $item->user_id }}</td>
                                        <td class="border px-4 py-2">{{ $item->order_id }}</td>
                                        <td class="border px-4 py-2">{{ $item->description }}</td>


                                        <td class="border px-4 py-2">
                                            <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">

                                                <a aria-label="anchor" href="{{ route('edit.planedit', \Crypt::encrypt($item->id)) }}"
                                                    class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <button aria-label="button" type="button"
                                                    class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-plan"
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
</div>


<script src="{{ asset('assets/libs/gridjs/gridjs.umd.js') }}"></script>

<!-- Internal Grid JS -->
<script src="{{ asset('assets/js/grid.js') }}"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#showdata').DataTable({

        });
    });
</script>


@endsection
