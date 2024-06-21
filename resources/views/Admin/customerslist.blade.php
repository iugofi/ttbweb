@extends('Admin.Layouts.layout')

@section('title', 'Customers List')
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
                        Customers List
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
                                Customers List
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
                                        <th class="px-4 py-2">firstname</th>
                                        <th class="px-4 py-2">lastname</th>
                                        <th class="px-4 py-2">email</th>
                                        <th class="px-4 py-2">phone</th>
                                        <th class="px-4 py-2">address</th>
                                        <th class="px-4 py-2">password</th>
                                        <th class="px-4 py-2">activation_key</th>
                                        <th class="px-4 py-2">reset_tokens</th>
                                        <th class="px-4 py-2">otp</th>
                                        <th class="px-4 py-2">status</th>
                                        <th class="px-4 py-2">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customerslist as $key => $item)
                                        <tr>
                                            @php
                                                $id = 1;
                                            @endphp
                                            <td class="border px-4 py-2">{{ $key + 1 }}</td>  
                                            <td class="border px-4 py-2">{{ $item->firstname }}</td>  
                                            <td class="border px-4 py-2">{{ $item->lastname }}</td>                               
                                            <td class="border px-4 py-2">{{ $item->email }}</td>                               
                                            <td class="border px-4 py-2">{{ $item->phone }}</td>                               
                                            <td class="border px-4 py-2">{{ $item->address }}</td>                               

                                            <td class="border px-4 py-2">
                                                <?php
                                                    try {
                                                        $passworddyc=\Crypt::decrypt($item->password);
                                                        ?>
                                                        <div class="flex">
                                                        <input type="password" class="form-control block w-full text-[0.875rem] !rounded-md"
                                                        id="password_{{$item->id}}" name="password" value="{{$passworddyc}}" disabled>
                                                        <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-light !rounded-s-none !mb-0"
                                                        onclick="togglePasswordVisibility('password_{{$item->id}}')"><i
                                                            class="ri-eye-off-line align-middle"></i></button>
                                                            <br><br>
                                                        </div>
                                                        <?php
                                                    } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
                                                        echo "Decryption failed: " . $e->getMessage();
                                                    }
                                                ?>
                                            </td>                              
                                            <td class="border px-4 py-2">{{ $item->activation_key }}</td>   
                                            <td class="border px-4 py-2">{!! nl2br(e(Str::limit(strip_tags($item->reset_tokens), 10))) !!}</td>                               
                                            <td class="border px-4 py-2">{!! nl2br(e(Str::limit(strip_tags($item->otp), 10))) !!}</td>
                                            <td class="border px-4 py-2">{{ $item->status }}</td>                                                                       
                                           
                                            <td class="border px-4 py-2">
                                                <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                    
                                                    <a aria-label="anchor" href="{{ route('customers.edit', \Crypt::encrypt($item->id)) }}"
                                                        class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-customers"
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
            $('.delete-customers').click(function() {
                var itemId = $(this).data('item-id');
                var url = "{{ route('delete.customerdelete', ':id') }}";
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
