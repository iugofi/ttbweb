@extends('Admin.Layouts.layout')

@section('title', 'TTB Blog List')
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
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        News</h3>
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
                            <div id="newsTableContainer">
                                
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
    $(document).ready(function(){
        function loadNewsData() {
            $.ajax({
                url: "{{ route('admin.getNewsData') }}", 
                type: 'GET',
                success: function(data) {
              
                    $('#newsTableContainer').html(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                
                }
            });
        }


        loadNewsData();

    });
</script>

<script>
    $(document).ready(function() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $('.delete-news').click(function() {
            var itemId = $(this).data('item-id');
            var url = "{{ route('delete.newsdelete', ':id') }}";
            url = url.replace(':id', itemId);
    
            $.ajax({
                url: url,
                type: 'DELETE',
                headers: {
                'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                },
                success: function(response) {
                    console.log(response.message);
                    $("#show_success_alert").html(showMessage('success', response
                                .message));
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
    </script>

@endsection
