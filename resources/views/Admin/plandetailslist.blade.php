@extends('Admin.Layouts.layout')

@section('title', 'Plan Details List')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')



    <!-- Gridjs CSS -->
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
                        Plan Details List
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
                                Plan Details List
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
                                        <th class="px-4 py-2">key_type</th>
                                        <th class="px-4 py-2">plan_id</th>
                                        <th class="px-4 py-2">price</th>
                                        <th class="px-4 py-2">image</th>
                                        <th class="px-4 py-2">discount</th>
                                        <th class="px-4 py-2">coupons</th>
                                        <th class="px-4 py-2">is_coupons</th>
                                        <th class="px-4 py-2">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plandetails as $key => $item)
                                        <tr>
                                            @php
                                                $id = 1;
                                            @endphp
                                            <td class="border px-4 py-2">{{ $key + 1 }}</td>  
                                            <td class="border px-4 py-2">
                                                @php
                                                $storeId = 'key_type';
                                                $pickId = $item->key_type;
                                                $items = DB::select('SELECT * FROM storepick WHERE STORE_ID = ? AND PICK_ID = ?', [$storeId, $pickId]);
                                                if (!empty($items)) {
                                                echo $items[0]->PICK_TEXT;
                                            } else {
                                                echo 'No Key'; 
                                            }
                                            @endphp
                                            
                                        </td>                                                             
                                            <td class="border px-4 py-2">@php
                                              ;
                                                $pickId = $item->plan_id;
                                                $items = DB::select('SELECT * FROM planname  WHERE plan_id = ?', [$pickId]);
                                                if (!empty($items)) {
                                                echo $items[0]->name;
                                            } else {
                                                echo 'No Plan'; 
                                            }
                                            @endphp</td>  
                                            <td class="border px-4 py-2">{{ $item->price }}</td>                               
                                            <td class="border px-4 py-2">{{ $item->image }}</td> 
                                            <td class="border px-4 py-2">{{ $item->discount }}</td>                               
                                            <td class="border px-4 py-2">{{ $item->coupons }}</td>                               
                                            <td class="border px-4 py-2">{{ $item->is_coupons }}</td>                               
                                                                         

                                            <td class="border px-4 py-2">
                                                <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                    
                                                    <a aria-label="anchor" href="{{ route('edit.adminuseredit', \Crypt::encrypt($item->id)) }}"
                                                        class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                                                        <i class="ri-edit-line"></i>
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
    </div>





    <!-- Grid JS -->
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


<script>
    $(document).ready(function() {
        $('#STORE_ID').on('change', function() {
            var storeId = $(this).val();
            console.log(storeId);
            if (storeId) {
                $.ajax({
                    url: '{{ route('fetch.fatchadmindataajax') }}',
                    type: 'GET',
                    data: {
                        storeId: storeId
                    },
                    dataType: 'json',
                    success: function(response) {
                        var tbody = $('#showdata tbody');
                        tbody.empty();
                        $.each(response.admindata, function(key, item) {
                            var row = '<tr>' +
                                '<td class="border px-4 py-2">' + (key + 1) +
                                '</td>' +
                                '<td class="border px-4 py-2">' + item.admintype +
                                '</td>' +
                                '<td class="border px-4 py-2">' + item.email +
                                '</td>' +
                                '<td class="border px-4 py-2">' + item.name +
                                '</td>' +
                                '<td class="border px-4 py-2">' + item.username +
                                '</td>' +
                                '<td class="border px-4 py-2">' + item.password +
                                '</td>' +
                                '<td class="border">' + item.image +
                                '</td>' +
                                
                                '<td class="border px-4 py-2">' +
                                '<div class="flex flex-row items-center !gap-2 text-[0.9375rem]">' +
                                '<a aria-label="anchor" href="{{ route('edit.adminuseredit', ':encrypted_id')}}" class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">' +
                                '<i class="ri-edit-line"></i>' +
                                '</a>' +
                                '<button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-storepick" data-item-id="' +
                                item.id + '">' +
                                '<i class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete' +
                                '</button>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                                row = row.replace(':encrypted_id', item.encrypted_id);
                            tbody.append(row);
                        });
                    }
                });
            } else {
                $('#showdata tbody').empty();
            }
        });
    });
</script>

    <script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $('.delete-blogs').click(function() {
                var itemId = $(this).data('item-id');
                var url = "{{ route('delete.blogsdelete', ':id') }}";
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
