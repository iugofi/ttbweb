@extends('Admin.Layouts.layout')

@section('title', 'StorePick Add')
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
                        Blog Create </h3> --}}
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Storepick
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Storepick Create
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-9 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Storepick Create</div>
                        </div>
                        <form method="post" id="blog_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-title" class="form-label">STORE NAME</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="blog_title" name="blog_title" placeholder="STORE NAME">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="STORE-TYPE" class="form-label">STORE_TYPE</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="STORE_TYPE" name="STORE_TYPE" placeholder="STORE TYPE">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="PICK TEXT" class="form-label">PICK TEXT</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="PICK_TEXT" name="PICK_TEXT" placeholder="PICK TEXT">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">PICK_ID</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="PICK_ID" name="PICK_ID" placeholder="PICK ID">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="Meta Keyword" class="form-label">STORE INDEX SEQUENCE</label>
                                        <input type="number" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="STORE_INDEX_SEQUENCE" name="STORE_INDEX_SEQUENCE" placeholder="STORE INDEX SEQUENCE">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="Meta Desc" class="form-label">PICK TEXT EXTEND</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="PICK_TEXT_EXTEND" name="PICK_TEXT_EXTEND" placeholder="PICK TEXT EXTEND">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Post blog" id="storepick_save_btn"
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
                                Recent Storepick
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
            function fetchblog() {
                $.ajax({
                    url: "{{ route('fatch.blog') }}",
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.length > 0) {
                            var recentPostHtml = '';
                            $.each(response, function(index, post) {
                                var truncatedDescription = post.description.split(' ').slice(0,
                                    2).join(' ');
                                var truncatedTitle = post.title.split(' ').slice(0, 2).join(
                                ' ');

                                var imageUrl =
                                    "assets/images/dailyblogs/" +
                                    post.image;

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
                                    truncatedTitle + '</a>';
                                recentPostHtml +=
                                    '<p class="mb-1 popular-blog-content text-truncate">' +
                                    truncatedDescription + '</p>';
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

            $('#blog_form').submit(function(e) {
                e.preventDefault();
                $('#blog_save_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route('save.blog') }}',
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('blog_title', response.messages.blog_title);
                            showError('blog_slug', response.messages.blog_slug);
                            showError('meta_title', response.messages.meta_title);
                            showError('canonical_url', response.messages.canonical_url);
                            showError('meta_keyword', response.messages.meta_keyword);
                            showError('meta_desc', response.messages.meta_desc);
                            showError('editoronebest', response.messages.blog_description);
                            showError('blog_images', response.messages.blog_images);
                            showError('blog_status', response.messages.blog_status);

                            $('#blog_save_btn').val('Post blog');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            $("#show_success_alert").html(showMessage('success', response
                                .messages));
                            $('#blog_form')[0].reset();
                            removeValidationClass("#blog_form");
                            $('#blog_save_btn').val('Post blog');
                            fetchblog();
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
            fetchblog();
        });
    </script>



@endsection
