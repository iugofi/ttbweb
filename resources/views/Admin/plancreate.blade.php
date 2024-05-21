@extends('Admin.Layouts.layout')

@section('title', 'Plan Create')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


    <style>
        .itsmyown {
            color: #12d2b3;
            background-color: #12d2b312;
        }
    </style>



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
                            Plan
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Plan Create
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-9 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Plan Create</div>
                        </div>
                        <form method="post" id="plan_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">


                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Plan Id</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="plan_id" name="plan_id" placeholder="Enter Your Name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Plan Name</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="planname" name="planname" placeholder="Enter Plan Name">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Save Plan" id="plan_save_btn"
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
                                Recent Plan
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
            function fetchPlan() {
                $.ajax({
                    url: "{{ route('fatch.facthplan') }}",
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.length > 0) {
                            var recentPostHtml = '';
                            $.each(response, function(index, post) {


                                recentPostHtml += '<li class="list-group-item">';
                                recentPostHtml +=
                                    '<div class="flex gap-2 flex-wrap items-center">';
                                recentPostHtml +=
                                    '<span class="avatar avatar-xl itsmyown me-1">';
                                recentPostHtml +=
                                    '<a href="" class="text-[0.875rem] font-semibold mb-0">' +
                                    post.plan_id + '</a>';
                                recentPostHtml += '</span>';
                                recentPostHtml += '<div class="flex-grow">';

                                recentPostHtml +=
                                    '<p class="mb-1 popular-blog-content text-truncate">' +
                                    post.name + '</p>';
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

            $('#plan_form').submit(function(e) {
                e.preventDefault();
                $('#plan_save_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route('save.saveplan') }}',
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('planname', response.messages.planname);
                            showError('plan_id', response.messages.plan_id);
                        
                            $('#plan_save_btn').val('Save Plan');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            $("#show_success_alert").html(showMessage('success', response
                                .messages));
                            $('#plan_form')[0].reset();
                            removeValidationClass("#plan_form");
                            $('#plan_save_btn').val('Save Plan');
                            fetchPlan();
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
            fetchPlan();
        });
    </script>



@endsection
