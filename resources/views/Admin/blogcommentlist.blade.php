@extends('Admin.Layouts.layout')

@section('title', 'Blog Comment List')
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
                        Blog Comment
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
                                Blog Comment List
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
                                            <th class="px-4 py-2">Blog id</th>
                                            <th class="px-4 py-2">first_name</th>
                                            <th class="px-4 py-2">last_name</th>
                                            <th class="px-4 py-2">email</th>
                                            <th class="px-4 py-2">comment</th>
                                            <th class="px-4 py-2">Status</th>
                                            <th class="px-4 py-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blog as $key => $item)
                                            <tr>
                                                @php
                                                    $id = 1;
                                                @endphp
                                                <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                                <td class="border px-4 py-2">{{$item->blog_id}}</td>
                                                <td class="border px-4 py-2">{{$item->first_name}}</td>
                                                <td class="border px-4 py-2">{{$item->last_name}}</td>
                                                <td class="border px-4 py-2">{{$item->email}}</td>
                                                <td class="border px-4 py-2">{!! nl2br(e(Str::limit(strip_tags($item->comment), 20))) !!}</td>

                                                <td class="border">
                                                    @php
                                                        $storepick = DB::table('storepick')
                                                            ->where('STORE_ID', '=', 'Status')
                                                            ->where('PICK_ID', '=', $item->status)
                                                            ->first();
                                                    @endphp
                                                    @if ($storepick)
                                                        @php
                                                            $statusText = '';
                                                            $statusColor = '';

                                                            switch ($item->status) {
                                                                case 101:
                                                                    $statusText = $storepick->PICK_TEXT;
                                                                    $statusColor = 'primary';
                                                                    break;
                                                                case 102:
                                                                    $statusText = $storepick->PICK_TEXT;
                                                                    $statusColor = 'info';
                                                                    break;
                                                                case 103:
                                                                    $statusText = $storepick->PICK_TEXT;
                                                                    $statusColor = 'danger';
                                                                    break;
                                                                default:
                                                                    // Default case if none of the above conditions are met
                                                                    $statusText = $storepick->PICK_TEXT;
                                                                    $statusColor = 'info'; // You can set a default color here if needed
                                                                    break;
                                                            }
                                                        @endphp
                                                        <span
                                                            class="inline-flex text-{{ $statusColor }} !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-{{ $statusColor }}/10">{{ $statusText }}</span>
                                                    @else
                                                        <span
                                                            class="inline-flex text-danger !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-danger/10">No
                                                            Value</span>
                                                    @endif
                                                </td>
                                                <td class="border px-4 py-2">
                                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                        <a aria-label="anchor"
                                                            href="{{ route('edit.blogcommentedit',  \Crypt::encrypt($item->id)) }}"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                                                            <i class="ri-edit-line"></i>
                                                        </a>
                                                        <button aria-label="button" type="button"
                                                            class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-blog-comment"
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
                $('.delete-blog-comment').click(function() {
                    var itemId = $(this).data('item-id');
                    var url = "{{ route('delete.blogcommentdelete', ':id') }}";
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
