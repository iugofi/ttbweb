@extends('Admin.Layouts.layout')

@section('title', 'News Edit')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')






    <div class="content">
        <div class="main-content">


            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Blog Create </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            News
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        News Create
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-9 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">News Create</div>
                        </div>
                        <form method="post" id="edit_news_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-title" class="form-label">News Title</label>
                                        <input type="text" name="main_id" value="{{ isset($editnews->id) ? $editnews->id : '' }}" hidden>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="news_title" name="news_title" value="{{ isset($editnews->title) ? $editnews->title : '' }}" placeholder="News Title">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="News Slug" class="form-label">News Slug</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="news_slug" name="news_slug" value="{{ isset($editnews->slug) ? $editnews->slug : '' }}" placeholder="News Title">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="Meta Title" class="form-label">Meta Title</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="meta_title" name="meta_title" value="{{ isset($editnews->meta_title) ? $editnews->meta_title : '' }}" placeholder="Meta Title">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">Canonical_url</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="canonical_url" name="canonical_url" value="{{ isset($editnews->canonical_url) ? $editnews->canonical_url : '' }}" placeholder="Enter Canonical Url">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="Meta Keyword" class="form-label">Meta Keyword</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="meta_keyword" name="meta_keyword" value="{{ isset($editnews->meta_keyword) ? $editnews->meta_keyword : '' }}" placeholder="Enter Canonical Url">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="Meta Desc" class="form-label">Meta Desc</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="meta_desc" name="meta_desc" value="{{ isset($editnews->meta_desc) ? $editnews->meta_desc : '' }}" placeholder="Enter Canonical Url">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    {{-- <div class="xl:col-span-6 col-span-12">
                                    <label for="publish-date" class="form-label">Publish Date</label>
                                    <input type="date" class="form-control block w-full text-[0.875rem] !rounded-md" id="publish-date" placeholder="Choose date">
                                </div> --}}


                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">News Discription</label>
                                        <textarea  id="editoronebest" name="news_description"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                                            rows="6">{{ isset($editnews->description) ? $editnews->description : '' }}</textarea>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-Language" class="form-label">Status</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="news_status" id="news_status">
                                            <option value="">Select</option>
                                            @php
                                                $status = DB::table('storepick')
                                                    ->where('STORE_ID', 'Status')
                                                    ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                    ->get();
                                            @endphp
                                            @foreach ($status as $statuss)
                                                <option value="{{ $statuss->PICK_ID }}" {{ $statuss->PICK_ID == $editnews->status ? 'selected' : '' }}>{{ $statuss->PICK_TEXT }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback"></div>

                                    </div>

                                    <div class="xl:col-span-12 col-span-12 blog-images-container">
                                        <label for="blog-author-email" class="form-label">News Images</label>
                                        <div class="text-center">
                                            <img src="{{ asset('assets/images/dailynews/' . (!empty($editnews->image) ? $editnews->image : 'No Image ')) }}" class="img-fluid !rounded-md !inline-flex" alt="..." style="width:100px">
                                        </div>
                                        <input type="file" class="news_images" id="news_images" name="news_images"
                                            multiple data-allow-reorder="true" data-max-file-size="3MB"
                                            data-max-files="6">
                                        <input type="text" name="image_new" value="{{ $editnews->image }}" hidden>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Edit News" id="news_edit_btn"
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
                                Recent News
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
                    url: "{{ route('fatch.news') }}",
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

                                var imageUrl = "{{asset('assets/images/dailynews/')}}"+ '/' + post.image;

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

            $('#edit_news_form').submit(function(e) {
                e.preventDefault();
                $('#news_edit_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);
                
                $.ajax({
                    url:  "{{ route('edit.news') }}",
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('news_title', response.messages.news_title);
                            showError('news_slug', response.messages.news_slug);
                            showError('meta_title', response.messages.meta_title);
                            showError('canonical_url', response.messages.canonical_url);
                            showError('meta_keyword', response.messages.meta_keyword);
                            showError('meta_desc', response.messages.meta_desc);
                            showError('editoronebest', response.messages.news_description);
                            showError('news_status', response.messages.news_status);

                            $('#news_edit_btn').val('Edit News');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            // $("#show_success_alert").html(showMessage('success', response
                            //     .messages));
                            $('#edit_news_form')[0].reset();
                            removeValidationClass("#edit_news_form");
                            $('#news_edit_btn').val('Edit News');
                            alert(response.messages);
                            window.location.href = "{{ route('admin.newslist') }}";
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
