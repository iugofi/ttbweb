@extends('Admin.Layouts.layout')

@section('title', 'Vpn Payment how')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')
@section('content')



    <!-- Gridjs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/gridjs/theme/mermaid.min.css') }}">

    <style>
        div#example_length {
            display: none;
        }

        body {
            background-color: rgb(var(--body-bg));
        }

        .buttons-copy,
        .buttons-excel,
        .buttons-csv,
        .buttons-pdf {
            background-color: #12D5AD !important;
            color: #fff !important;
        }
    </style>

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
                        {{ $title }} Payment
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->



            <!-- Start:: row-4 -->
            <div class="grid grid-cols-12 gap-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-body">
                                <div class="flex items-top justify-between">
                                    <div>
                                        <span
                                            class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-primary">
                                            <i class="ti ti-users text-[1rem] text-white"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow ms-4">
                                        <div class="flex items-center justify-between flex-wrap">
                                            <div>
                                                <p class="text-[#8c9097] dark:text-white/50 text-[0.813rem] mb-0">
                                                    Total Amount {{ $title }}</p>
                                                <h4 class="font-semibold  text-[1.5rem] !mb-2 "> ${{ $total }}
                                                </h4>
                                            </div>
                                            <div id="crm-total-customers"></div>
                                        </div>
                                        <div class="flex items-center justify-between !mt-1">
                                            <div>
                                                {{-- <a class="text-primary text-[0.813rem]"
                                                href="javascript:void(0);">View All<i
                                                    class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a> --}}
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 text-success text-[0.813rem] font-semibold">
                                                    +<?php
                                                    $totalNews = DB::select('SELECT SUM(payments.amount_total) as total FROM payments JOIN product_details ON product_details.id = payments.product_id WHERE product_details.key_type=501 AND payments.deleted_at IS NULL');
                                                    
                                                    if ($totalNews && isset($totalNews[0]->total)) {
                                                        $totalAmount = $totalNews[0]->total;
                                                    
                                                        echo number_format($totalAmount, 2);
                                                    } else {
                                                        echo '0.00';
                                                    }
                                                    ?>%
                                                </p>
                                                <p class="text-[#8c9097] dark:text-white/50 opacity-[0.7] text-[0.6875rem]">
                                                    this month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="xl:col-span-12 col-span-12">
                    <div class="box custom-box">
                        <div class="box-header">
                            <div class="box-title">
                                {{ $title }} Payment List
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
                                            <th class="px-4 py-2">user_id</th>
                                            <th class="px-4 py-2">key_type</th>
                                            <th class="px-4 py-2">plan_id</th>
                                            <th class="px-4 py-2">pay_id</th>
                                            <th class="px-4 py-2">product_key</th>
                                            <th class="px-4 py-2">amount_total</th>
                                            <th class="px-4 py-2">payment_status</th>
                                            <th class="px-4 py-2">customer_name</th>
                                            <th class="px-4 py-2">country</th>
                                            <th class="px-4 py-2">postal_code</th>
                                            <th class="px-4 py-2">Date</th>
                                            <th class="px-4 py-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vpnpaydata as $key => $item)
                                            <tr>
                                                @php
                                                    $id = 1;
                                                @endphp
                                                <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                                <td class="border px-4 py-2"> @php
                                                    $results = App\Models\Users::where('id', $item->user_id)->first();
                                                @endphp
                                                    {{ $results ? $results->firstname . ' ' . $results->lastname : 'Default Value' }}
                                                </td>
                                                <td class="border px-4 py-2">
                                                    @php
                                                        $results = DB::table('storepick')
                                                            ->where('STORE_ID', 'key_type')
                                                            ->where('PICK_ID', $item->key_type)
                                                            ->first();
                                                    @endphp
                                                    {{ $results->PICK_TEXT ?? 'Default Value' }}
                                                </td>

                                                <td class="border px-4 py-2">{{ $item->plan_id }}</td>
                                                <td class="border px-4 py-2">{{ $item->pay_id }}</td>
                                                <td class="border px-4 py-2">{{ $item->product_key }}</td>
                                                <td class="border px-4 py-2">{{ $item->amount_total }}</td>
                                                <td class="border px-4 py-2">{{ $item->payment_status }}</td>
                                                <td class="border px-4 py-2">{{ $item->customer_name }}</td>
                                                <td class="border px-4 py-2">{{ $item->country }}</td>
                                                <td class="border px-4 py-2">{{ $item->postal_code }}</td>
                                                <td class="border px-4 py-2">{{ $item->created_at->format('Y-m-d h:i A') }}
                                                </td>


                                                <td class="border px-4 py-2">
                                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                        <a aria-label="anchor"
                                                            href="{{ route('edit.payedit', \Crypt::encrypt($item->id)) }}"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <button aria-label="button" type="button"
                                                            class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-vpnpay"
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





    <!-- Grid JS -->
    <script src="{{ asset('assets/libs/gridjs/gridjs.umd.js') }}"></script>

    <!-- Internal Grid JS -->
    <script src="{{ asset('assets/js/grid.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $('.delete-vpnpay').click(function() {
                var itemId = $(this).data('item-id');
                var url = "{{ route('delete.vpnpaydelete', ':id') }}";
                url = url.replace(':id', itemId);

                // Show confirmation dialog before deleting
                if (confirm("Are you sure you want to delete this item?")) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                        },
                        success: function(response) {
                            console.log(response.message);
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    </script>


@endsection
