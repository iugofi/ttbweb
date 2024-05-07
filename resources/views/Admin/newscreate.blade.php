@extends('Admin.Layouts.layout')

@section('title', 'TTB News Create')
@section('Description','')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')






<div class="content">
    <div class="main-content">

        
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Blog Create </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                      <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                      News
                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                      </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
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
                    <form id="news_form" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="grid grid-cols-12 gap-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="blog-title" class="form-label">News Title</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md" id="news_title" name="news_title" placeholder="News Title">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="News Slug" class="form-label">News Slug</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md" id="news_slug" name="news_slug" placeholder="News Title">
                                    <div class="invalid-feedback"></div>
                                </div>
                               
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="Meta Title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md" id="meta_title" name="meta_title" placeholder="Meta Title">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="canonical-url" class="form-label">Canonical_url</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md" id="canonical_url" name="canonical_url" placeholder="Enter Canonical Url">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="Meta Keyword" class="form-label">Meta Keyword</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md" id="meta_keyword" name="meta_keyword" placeholder="Enter Canonical Url">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="Meta Desc" class="form-label">Meta Desc</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md" id="meta_desc" name="meta_desc" placeholder="Enter Canonical Url">
                                    <div class="invalid-feedback"></div>
                                </div>
                                {{-- <div class="xl:col-span-6 col-span-12">
                                    <label for="publish-date" class="form-label">Publish Date</label>
                                    <input type="date" class="form-control block w-full text-[0.875rem] !rounded-md" id="publish-date" placeholder="Choose date">
                                </div> --}}
                                
                              
                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label">News Discription</label>
                                    <textarea id="content" name="news_description" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" rows="6" required></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                               
                                <div class="xl:col-span-12 col-span-12 blog-images-container">
                                    <label for="blog-author-email" class="form-label">News Images</label>
                                    <input type="file" class="news_images"  name="news_images" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                    <div class="invalid-feedback"></div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-end">
                                {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                <input type="submit" value="Post News" id="news_save_btn"
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
                        <div class="box-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="flex gap-2 flex-wrap items-center">
                                        <span class="avatar avatar-xl me-1">
                                            <img src="assets/images/media/media-39.jpg" class="img-fluid !rounded-md" alt="...">
                                        </span>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Animals</a>
                                            <p class="mb-1 popular-blog-content text-truncate">
                                                There are many variations of passages of Lorem Ipsum available
                                            </p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">24,Nov 2022 - 18:27</span>
                                        </div>
                                        <div>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex gap-2 flex-wrap  items-center">
                                        <span class="avatar avatar-xl me-1">
                                            <img src="assets/images/media/media-56.jpg" class="img-fluid !rounded-md" alt="...">
                                        </span>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Travel</a>
                                            <p class="mb-1 popular-blog-content text-truncate">
                                                Latin words, combined with a handful of model sentence
                                            </p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">28,Nov 2022 - 10:45</span>
                                        </div>
                                        <div>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex gap-2 flex-wrap items-center">
                                        <span class="avatar avatar-xl me-1">
                                            <img src="assets/images/media/media-54.jpg" class="img-fluid !rounded-md" alt="...">
                                        </span>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Interior</a>
                                            <p class="mb-1 popular-blog-content text-truncate">
                                                Contrary to popular belief, Lorem Ipsum is not simply random
                                            </p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">30,Nov 2022 - 08:32</span>
                                        </div>
                                        <div>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex gap-2 flex-wrap items-center">
                                        <span class="avatar avatar-xl me-1">
                                            <img src="assets/images/media/media-52.jpg" class="img-fluid !rounded-md" alt="...">
                                        </span>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Nature</a>
                                            <p class="mb-1 popular-blog-content text-truncate">
                                                It was popularised in the 1960s with the release of Letraset sheets containing
                                            </p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">3,Dec 2022 - 12:56</span>
                                        </div>
                                        <div>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex gap-2 flex-wrap        items-center">
                                        <span class="avatar avatar-xl me-1">
                                            <img src="assets/images/media/media-74.jpg" class="img-fluid !rounded-md" alt="...">
                                        </span>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Health</a>
                                            <p class="mb-1 popular-blog-content text-truncate">
                                                It was popularised in the 1960s with the release of Letraset sheets containing
                                            </p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">16,Dec 2022 - 04:56</span>
                                        </div>
                                        <div>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="flex gap-2 flex-wrap        items-center">
                                        <span class="avatar avatar-xl me-1">
                                            <img src="assets/images/media/media-49.jpg" class="img-fluid !rounded-md" alt="...">
                                        </span>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Food</a>
                                            <p class="mb-1 popular-blog-content text-truncate">
                                                It was popularised in the 1960s with the release of Letraset sheets containing
                                            </p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">31,Dec 2022 - 18:06</span>
                                        </div>
                                        <div>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                        <div class="flex gap-2 flex-wrap items-center">
                                        <span class="avatar avatar-xl me-1">
                                            <img src="assets/images/media/media-76.jpg" class="img-fluid !rounded-md" alt="...">
                                        </span>
                                        <div class="flex-grow">
                                            <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Travel</a>
                                            <p class="mb-1 popular-blog-content text-truncate">
                                                It was popularised in the 1960s with the release of Letraset sheets containing
                                            </p>
                                            <span class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">15,Dec 2022 - 14:31</span>
                                        </div>
                                        <div>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item text-center">
                                    <button type="button" class="ti-btn ti-btn-primary !font-medium">Load more</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->


    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error => {
      console.error(error);
    });
</script>


<script>
    $(document).ready(function() {
        $('#news_form').submit(function(e) {
            e.preventDefault();
            $('#news_save_btn').val('please wait..');
            var token = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: '{{ route('save.news') }}',
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
                        showError('meta_desc', response.messages.Status);
                        showError('content', response.messages.news_discription);
                        showError('news_images', response.messages.news_images);
                        $('#news_save_btn').val('Post News');
                    } else if (response.status == 200) {
                        $('.invalid-feedback').empty();
                        $("#show_success_alert").html(showMessage('success', response
                            .messages));
                        $('#news_form')[0].reset();
                        removeValidationClass("#news_form");
                        $('#news_save_btn').val('Post News');
                    }
                },
                error: function(xhr, status, error) {

                }
            });
        });
    });
</script>



@endsection