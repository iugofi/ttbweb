@extends('Admin.Layouts.layout')

@section('title', 'News Create')
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
                            Admin
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        User Create
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-9 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">User Create</div>
                        </div>
                        <form method="post" id="admin_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    @php
                                    if (session('admintype')== 'superadmin') {
                                     @endphp  
                                     <div class="xl:col-span-6 col-span-12">
                                            <label for="admin_type" class="form-label">Admin Type</label>
                                            <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                                name="admin_type" id="admin_type">
                                                <option value="">Select</option>
                                                @php
                                                    $Admintype = DB::table('storepick')
                                                        ->where('STORE_ID', 'Admintype')
                                                        ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                        ->get();
                                                @endphp
                                                @foreach ($Admintype as $Admintypes)
                                                    <option value="{{ $Admintypes->PICK_TEXT }}">{{ $Admintypes->PICK_TEXT }}</option>
                                                @endforeach
    
                                            </select>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        @php
                                        }
                                        @endphp
                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Email</label>
                                        <input type="email" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="email" name="email" placeholder="Enter Your Email">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Name</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="name" name="name" placeholder="Enter Your Name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Username</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="username" name="username" placeholder="Enter Your Username">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Password</label>
                                        <div class="flex">
                                        <input type="password" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="password" name="password" placeholder="Enter Your Username">
                                            <button aria-label="button" type="button"
                                            class="ti-btn ti-btn-light !rounded-s-none !mb-0"
                                            onclick="togglePasswordVisibility('password')"><i
                                                class="ri-eye-off-line align-middle"></i></button>
                                                <br><br>
                                            </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
    

                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-Language" class="form-label">Status</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="admin_status" id="admin_status">
                                            <option value="">Select</option>
                                            @php
                                                $status = DB::table('storepick')
                                                    ->where('STORE_ID', 'Status')
                                                    ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                    ->get();
                                            @endphp
                                            @foreach ($status as $statuss)
                                                <option value="{{ $statuss->PICK_ID }}">{{ $statuss->PICK_TEXT }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-12 col-span-12 blog-images-container">
                                        <label for="blog-author-email" class="form-label">Admin Images</label>
                                        <br>
                                        <input type="file" class="admin_images" id="admin_images" name="admin_images"
                                            multiple data-allow-reorder="true" data-max-file-size="3MB"
                                            data-max-files="6">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Save Admin" id="admin_save_btn"
                                        class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">
                                Recent Admin
                            </div>
                        </div>
                        <div class="box-body" id="recentpost">
                            <ul class="list-group">
                                <!-- Recent posts will be dynamically added here -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->


        </div>
    </div>

  
    



    <script>
        $(document).ready(function() {
            function fetchNews() {
                $.ajax({
                    url: "{{ route('fatch.facthadmin') }}",
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.length > 0) {
                            var recentPostHtml = '';
                            $.each(response, function(index, post) {
                                var truncatedname = post.name.split(' ').slice(0,
                                    2).join(' ');
                                var truncatedUsername = post.username.split(' ').slice(0, 2).join(
                                ' ');

                                var imageUrl =
                                    "{{ asset('assets/images/Adminimages') }}/" + post.image;

                                recentPostHtml += '<li class="list-group-item">';
                                recentPostHtml +=
                                    '<div class="flex gap-2 flex-wrap items-center">';
                                recentPostHtml += '<span class="avatar avatar-xl me-1">';
                                recentPostHtml += '<img src="' + imageUrl +
                                    '" class="img-fluid !rounded-md" alt="...">';
                                recentPostHtml += '</span>';
                                recentPostHtml += '<div class="flex-grow">';
                                recentPostHtml +=
                                    '<a href="" class="text-[0.875rem] font-semibold mb-0">' +
                                        truncatedUsername + '</a>';
                                recentPostHtml +=
                                    '<p class="mb-1 popular-blog-content text-truncate">' +
                                        truncatedname + '</p>';
                                recentPostHtml +=
                                    '<span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">' +
                                    post.created_at + '</span>';
                                recentPostHtml += '</div>';
                                recentPostHtml += '<div>';
                                recentPostHtml +=
                                    '<button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>';
                                recentPostHtml += '</div>';
                                recentPostHtml += '</div>';
                                recentPostHtml += '</li>';
                            });
                            $('#recentpost .list-group').html(recentPostHtml);
                        } else {
                            // Handle case where no posts are returned
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                    }
                });
            }

            $('#admin_form').submit(function(e) {
                e.preventDefault();
                $('#admin_save_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route('save.saveuseradmin') }}',
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('email', response.messages.email);
                            showError('name', response.messages.name);
                            showError('username', response.messages.username);
                            showError('password', response.messages.password);
                            showError('admin_status', response.messages.admin_status);
                            $('#admin_save_btn').val('Save Admin');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            $("#show_success_alert").html(showMessage('success', response
                                .messages));
                            $('#admin_form')[0].reset();
                            removeValidationClass("#admin_form");
                            $('#admin_save_btn').val('Save Admin');
                            fetchNews();
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
            fetchNews();
        });
    </script>



@endsection
