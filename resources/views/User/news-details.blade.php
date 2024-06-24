@extends('User.Layouts.layout')

@section('title', 'News Details')
@section('description', $newsPost->meta_desc)
@section('keywords', $newsPost->meta_keyword)
@section('canonical', $newsPost->slug)


<style>
    body {
   background-color: rgb(var(--body-bg));
}
</style>
@section('content')



    <div class="content">
        <div class="main-content">


            <div class="container my-[3rem] ">
                <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                        <div class="xl:col-span-8  col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <p class="text-[1.125rem] font-semibold mb-1">{{ $newsPost->title }}</p>
                                    <div class="sm:flex items-center">
                                        <div class="flex items-center flex-grow">
                                            {{-- <span class="avatar avatar-sm avatar-rounded me-4">
                                        <img src="https://www.ttbinternetsecurity.com/admin/uploads/posts/{{ $bloglist->image }}" alt="">
                                    </span> --}}
                                            <div>
                                                <p class="mb-0 font-semibold">Posted Date - <span
                                                        class="text-[0.6875rem] text-[#8c9097] dark:text-white/50 font-normal">{{ $newsPost->created_at->format('F j, Y') }}</span>
                                                </p>
                                                <p class="mb-0 text-[#8c9097] dark:text-white/50"></p>
                                            </div>
                                        </div>
                                        {{-- <div class="sm:mt-0 mt-2">
                                    <span class="badge bg-primary text-white me-1">Nature</span>
                                    <span class="badge bg-secondary text-white">Travel</span>
                                </div> --}}
                                    </div>
                                </div>
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/images/dailynews/' . $newsPost->image) }}"
                                        class="card-img rounded-0 blog-details-img" alt="...">
                                </a>
                                <div class="box-body border-b dark:border-defaultborder/10 border-dashed">
                                    <div class="sm:flex block items-center justify-between">
                                        <div class="flex items-center">
                                            <span class="badge bg-success/10 text-success me-4">
                                                <i class="ri-thumb-up-line me-1 align-middle inline-block"></i>
                                                {{ $newsPost->likes }}
                                            </span>
                                            {{-- <span class="badge bg-info/10 text-info me-4">
                                       
                                        <i class="ri-chat-4-line me-1 align-middle inline-block"></i>
                                        Comments
                                    </span> --}}
                                        </div>
                                        <div class="btn-lists sm:mt-0 mt-2">
                                            <button aria-label="button" type="button"
                                                class="like-btn ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"
                                                data-post-id="{{ $newsPost->id }}">
                                                <i class="ri-thumb-up-line"></i>
                                            </button>
                                            <input type="text" value="{{ route('user.news') }}/{{ $newsPost->slug }}"
                                                id="myInput" hidden>
                                            <button aria-label="button" type="button" onclick="myFunction()"
                                                class="ti-btn ti-btn-sm ti-btn-primary text-primaryt me-1"><i
                                                    class="ri-share-line"></i></button>

                                            <button type="button"
                                                class="ti-btn !py-1 !px-2 ti-btn-secondary text-secondary !text-[0.75rem] !font-medium"><i
                                                    class="ri-chat-4-line me-1 align-middle inline-block"></i><a
                                                    href="#comment">Comment</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    {!! $newsPost->description !!}
                                </div>
                            </div>

                            
                            <div class="container">
                                <div class="max-w-6xl mx-auto reviews-container">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                        @if ($newscomment->count() > 0)
                                        @foreach ($newscomment as $newscommentlist)
                                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex items-center mb-4">
                                                        <span class="avatar avatar-md avatar-rounded me-4">
                                                            <img src="{{asset('assets/images/faces/15.jpg')}}" alt="">
                                                        </span>
                                                        <div>
                                                            <p class="mb-0 font-semibold text-[.875rem] text-primary">{{ ucwords(strtolower($newscommentlist->first_name)) }} {{ ucwords(strtolower($newscommentlist->last_name)) }}</p>
                                                            {{-- <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097] dark:text-white/50">CEO OF NORJA</p> --}}
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <span class="text-[#8c9097] dark:text-white/50">{{ $newscommentlist->comment }} <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-center">
                                                            <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                            <span class="text-warning block ms-1">
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-half-fill"></i>
                                                            </span>
                                                        </div>
                                                        <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                            <span>{{ \Carbon\Carbon::parse($newscommentlist->created_at)->diffForHumans() }}</span>
                                                            {{-- <span class="block font-normal text-[0.75rem] text-success"><i>Json Taylor</i></span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('assets/images/faces/15.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary"></p>
                                                        {{-- <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097] dark:text-white/50">CEO OF NORJA</p> --}}
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097] dark:text-white/50"> <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >No comments yet.</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    {{-- <div class="flex items-center">
                                                        <span class="text-[#8c9097] dark:text-white/50">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </span>
                                                    </div> --}}
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] dark:text-white/50 text-end">
                                                        <span></span>
                                                        {{-- <span class="block font-normal text-[0.75rem] text-success"><i>Json Taylor</i></span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                       
                                        
                                    </div>
                                   
                                </div>
                            </div>

              


                            {{-- <div class="box">
                            

                            </div> --}}



                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Leave a Comment
                                    </div>
                                </div>
                                <div class="" id="login_save_alert"></div>
                                <form action="/" method="post" id="comment_form">
                                    @csrf
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="xl:col-span-6  col-span-12">
                                                <label for="blog-first-name"
                                                    class="form-label dark:!text-defaulttextcolor/70">First
                                                    Name</label>
                                                <input type="text" name="news_id" id="blog_id"
                                                    value="{{ $newsPost->id }}" hidden>
                                                <input type="text"
                                                    class="form-control dark:bg-bodybg !rounded-sm block w-full"
                                                    id="first_name" name="first_name" placeholder="Enter Name">
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="blog-last-name"
                                                    class="form-label dark:!text-defaulttextcolor/70">Last
                                                    Name</label>
                                                <input type="text"
                                                    class="form-control dark:bg-bodybg !rounded-sm block w-full"
                                                    id="last_name" name="last_name" placeholder="Enter Name">
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label for="blog-email"
                                                    class="form-label dark:!text-defaulttextcolor/70">Email
                                                    ID</label>
                                                <input type="text"
                                                    class="form-control dark:bg-bodybg !rounded-sm block w-full"
                                                    id="email" name="email" placeholder="Enter Email">
                                                <div class="invalid-feedback"></div>

                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label for="blog-comment"
                                                    class="form-label dark:!text-defaulttextcolor/70 ">Write
                                                    Comment</label>
                                                <textarea class="form-control dark:bg-bodybg !rounded-sm block w-full" name="comment" id="comment" rows="5"></textarea>
                                                <div class="invalid-feedback"></div>

                                            </div>
                                        </div>

                                    </div>


                                    <div class="box-footer">
                                        <div class="text-end">
                                            <input type="submit" id="commentsubmit"
                                                class="ti-btn ti-btn-primary !font-medium" value="post comment">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                    <div class="grid grid-cols-12 gap-x-6">
                      
                  </div>
              </div> --}}


                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            @foreach ($recentblog as $recentbloglist)
                                
                           
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12 news-box">
                                <div class="box">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('assets/images/dailynews/' . $recentbloglist->image) }}"
                                            class="card-img-top rounded-t-sm" alt="...">
                                    </a>
                                    <div class="box-body">
                                        <a href="{{ route('news.details', ['id' => $recentbloglist->slug]) }}"
                                            class="font-semibold text-[0.875rem] text-dark mb-1">{{$recentbloglist->title}}</a>
                                        <p class="card-text text-[#8c9097] dark:text-white/50 mb-4">{!! nl2br(e(Str::limit(strip_tags($recentbloglist->description), 150))) !!}</p>
                                        <a href="{{ route('news.details', ['id' => $recentbloglist->slug]) }}"
                                            class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                    </div>
                                    <div class="box-footer">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <div class="avatar avatar-sm avatar-rounded me-2">
                                                    <img src="{{asset('assets/images/faces/7.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <p class="mb-0 font-semibold">Posted Date</p>
                                                    <p class="text-[#8c9097] dark:text-white/50 text-[.625rem] mb-0">{{ $recentbloglist->created_at->format('F j, Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="btn-list">
                                                <button aria-label="button" type="button" class="like-btn ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]" data-post-id="{{ $recentbloglist->id }}">
                                                    <i class="ri-thumb-up-line"></i>
                                                </button>
                                             
                                                <a href="{{ route('news.details', ['id' => $recentbloglist->slug]) }}" aria-label="button" 
                                                    class="ti-btn ti-btn-light ti-btn-sm"><i
                                                        class="ri-chat-2-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start: pagination -->
                {{-- <div class="ltr:float-right rtl:float-left mb-6">
                    <nav aria-label="Page navigation" class="">
                        <ul class="pagination mb-0 flex flex-row rounded-sm text-[1rem]">
                            <li class="page-item disabled">
                                <a class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">
                                    Prev
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link !py-[0.375rem] !px-[0.75rem]"
                                    href="javascript:void(0);">1</a></li>
                            <li class="page-item "><a class="page-link !py-[0.375rem] !px-[0.75rem]"
                                    href="javascript:void(0);">2</a></li>
                            <li class="page-item ">
                                <a aria-label="anchor" class="page-link !py-[0.375rem] !px-[0.75rem]"
                                    href="javascript:void(0);">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                            </li>
                            <li class="page-item "><a class="page-link !py-[0.375rem] !px-[0.75rem]"
                                    href="javascript:void(0);">17</a></li>
                            <li class="page-item">
                                <a class="page-link !text-primary !py-[0.375rem] !px-[0.75rem]"
                                    href="javascript:void(0);">
                                    next
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
                <!-- End: pagination -->
            </div>


        </div>
    </div>


    <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(copyText.value);


        }
    </script>

    <script>
        $(document).ready(function() {
            // Check if the user has liked or disliked the post in the browser's cache
            $('.like-btn').each(function() {
                var postId = $(this).data('post-id');
                var action = localStorage.getItem('actionnews_' + postId);
                if (action === 'like') {
                    $(this).addClass('liked');
                } else if (action === 'dislike') {
                    $(this).addClass('disliked');
                }
            });

            // Handle like/dislike button click
            $('.like-btn').click(function(e) {
                e.preventDefault();
                var postId = $(this).data('post-id');
                var action = '';

                // Check if already liked/disliked in browser cache
                var cachedAction = localStorage.getItem('actionnews_' + postId);
                if ($(this).hasClass('liked')) {
                    if (confirm('Are you sure you want to remove your like?')) {
                        action = 'remove-like';
                    } else {
                        return; // Cancelled, do nothing
                    }
                } else if ($(this).hasClass('disliked')) {
                    if (confirm('Are you sure you want to remove your dislike?')) {
                        action = 'remove-dislike';
                    } else {
                        return; // Cancelled, do nothing
                    }
                } else {
                    action = 'like'; // Default action
                }

                // Make AJAX request to update database
                $.ajax({
                    type: 'POST',
                    url: '/news/' + postId + '/like',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        action: action
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update UI                           
                            if (action === 'like') {
                                $('.like-btn[data-post-id="' + postId + '"]').addClass('liked');
                                localStorage.setItem('actionnews_' + postId, 'like');
                            } else if (action === 'remove-like') {
                                $('.like-btn[data-post-id="' + postId + '"]').removeClass(
                                    'liked');
                                localStorage.removeItem('actionnews_' + postId);
                            } else if (action === 'remove-dislike') {
                                $('.like-btn[data-post-id="' + postId + '"]').removeClass(
                                    'disliked');
                                localStorage.removeItem('actionnews_' + postId);
                            }
                        }
                    }
                });
            });
        });
    </script>
      <script>
        $(document).ready(function() {
            $('#comment_form').submit(function(e) {

                e.preventDefault();
                $('#commentsubmit').val('please wait..');
                $.ajax({
                    url: '{{ route('save.newscomment') }}',
                    method: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.status === 400) {
                            showError('first_name', response.messages.first_name);
                            showError('last_name', response.messages.last_name);
                            showError('email', response.messages.email);
                            showError('comment', response.messages.comment);
                            $('#commentsubmit').val('post comment');
                        } else if (response.status === 401) {
                            $("#login_save_alert").html(showMessage('danger', response
                                .messages));
                            $('#commentsubmit').val('post comment');
                        } else {
                            if (response.status === 200) {
                                $("#login_save_alert").html(showMessage('success', response
                                    .messages));
                                $('#comment_form')[0].reset();
                                removeValidationClass("#commentsubmit");
                                $('#commentsubmit').val('post comment');
                                location.reload();
                            } else {
                                // Handle other response statuses or messages
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors here
                    }
                });
            });
        });
    </script>
    <style>
        .like-btn.liked {
            color: blue;
            /* Change color to blue */
        }
        .news-box .box {
            height: 95%;
        }
    </style>




@endsection
