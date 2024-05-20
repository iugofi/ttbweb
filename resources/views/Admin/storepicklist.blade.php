@extends('Admin.Layouts.layout')

@section('title', 'Storepick List')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
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
    </style>

    <div class="content">
        <div class="main-content">


            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    {{-- <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Storepick</h3> --}}
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Storepick Tables
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Storepick
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
                                Storepick List
                            </div>
                        </div>


                        <div class="box-body">
                            <div class="grid md:grid-cols-4 sm:grid-cols-2">
                                <div class="xl:col-span-1 md:col-span-1 sm:col-span-1 col-span-2">
                                <select id="STORE_ID" class="form-control">
                                    <option value=" ">-Select Store Id-</option>
                                    @foreach ($data as $storeId)
                                        <option value="{{ $storeId }}">{{ $storeId }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                       
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>
                            <div class="table-responsive">
                            <table id="example" class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Id</th>
                                        <th class="px-4 py-2">STORE_ID</th>
                                        <th class="px-4 py-2">STORE TYPE</th>
                                        <th class="px-4 py-2">PICK TEXT</th>
                                        <th class="px-4 py-2">PICK ID</th>
                                        <th class="px-4 py-2">STORE INDEX SEQUENCE</th>
                                        <th class="px-4 py-2">EXTEND TEXT</th>
                                        <th class="px-4 py-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($storepick as $key => $item)
                                        <tr>
                                            @php
                                                $id = 1;
                                            @endphp
                                            <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                            <td class="border px-4 py-2">{{ $item->STORE_ID }}</td>
                                            <td class="border px-4 py-2">{{ $item->STORE_TYPE }}</td>
                                            <td class="border px-4 py-2">{{ $item->PICK_TEXT }}</td>
                                            <td class="border px-4 py-2">{{ $item->PICK_ID }}</td>
                                            <td class="border">{{ $item->STORE_INDEX_SEQUENCE }}</td>
                                            <td class="border">{{ $item->PICK_TEXT_EXTEND }}</td>
                                            <td class="border px-4 py-2">
                                                <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                    <a aria-label="anchor" href="{{ route('edit.newsedit', $item->id) }}"
                                                        class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-storepick"
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
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $('.delete-storepick').click(function() {
                alert("hdf");
                var itemId = $(this).data('item-id');
                var url = "{{ route('delete.storepickdelete', ':id') }}";
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


    <script>
        $(document).ready(function() {
            $('#STORE_ID').on('change', function() {
                var storeId = $(this).val();
                console.log(storeId);
                if (storeId) {
                    $.ajax({
                        url: '{{ route('fetch.storepick') }}',
                        type: 'GET',
                        data: {
                            storeId: storeId
                        },
                        dataType: 'json',
                        success: function(response) {
                            var tbody = $('#example tbody');
                            tbody.empty();
                            $.each(response.storepick, function(key, item) {
                                console.log(item.encrypted_id);
                                var row = '<tr>' +
                                    '<td class="border px-4 py-2">' + (key + 1) +
                                    '</td>' +
                                    '<td class="border px-4 py-2">' + item.STORE_ID +
                                    '</td>' +
                                    '<td class="border px-4 py-2">' + item.STORE_TYPE +
                                    '</td>' +
                                    '<td class="border px-4 py-2">' + item.PICK_TEXT +
                                    '</td>' +
                                    '<td class="border px-4 py-2">' + item.PICK_ID +
                                    '</td>' +
                                    '<td class="border">' + item.STORE_INDEX_SEQUENCE +
                                    '</td>' +
                                    '<td class="border">' + item.PICK_TEXT_EXTEND +
                                    '</td>' +
                                    '<td class="border px-4 py-2">' +
                                    '<div class="flex flex-row items-center !gap-2 text-[0.9375rem]">' +
                                    '<a aria-label="anchor" href="{{ route('edit.newsedit', ['id' => ' + item.encrypted_id + ']) }}" class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">' +
                                    '<i class="ri-edit-line"></i>' +
                                    '</a>' +
                                    '<button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-storepick" data-item-id="' +
                                    item.id + '">' +
                                    '<i class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete' +
                                    '</button>' +
                                    '</div>' +
                                    '</td>' +
                                    '</tr>';
                                tbody.append(row);
                            });
                        }
                    });
                } else {
                    $('#example tbody').empty();
                }
            });
        });
    </script>



@endsection
