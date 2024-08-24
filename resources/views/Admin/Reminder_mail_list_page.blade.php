@extends('Admin.Layouts.layout')

@section('title', 'Reminder Mail List')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')

<style>
    div#example_length {
        display: none;
    }

    body {
        background-color: rgb(var(--body-bg));
    }
</style>
<link rel="stylesheet" href="{{ asset('assets/libs/gridjs/theme/mermaid.min.css') }}">
<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                {{-- <h3
                    class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                    News List</h3> --}}
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
                    News
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
                            News List
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box text-center">
                            <div class="" id="show_success_alert"></div>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Id</th>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Product</th>
                                        <th class="px-4 py-2">Email</th>
                                        <th class="px-4 py-2">Status</th>
                                        <th class="px-4 py-2">Error Message</th>
                                        <th class="px-4 py-2">Sent At</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Reminder_logs as $key => $item)
                                        <tr>
                                            @php
                                                $id = 1;
                                            @endphp
                                            <td class="border px-4 py-2">{{ $key + 1 }}</td>

                                            <td class="border px-4 py-2">{{$item->firstname}} {{$item->lastname}}</td>
                                            <td class="border px-4 py-2">{{$item->Key_type}}/{{$item->Planname}}</td>
                                            <td class="border px-4 py-2">{{$item->email}}</td>
                                            <td class="border px-4 py-2">{{$item->status}}</td>
                                            <td class="border px-4 py-2">{{$item->error_message}}</td>
                                            <td class="border px-4 py-2">{{$item->sent_at}}</td>


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

@endsection
