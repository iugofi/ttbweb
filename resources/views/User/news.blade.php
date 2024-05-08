@extends('User.Layouts.layout')

@section('title', 'News')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')



@section('content')

    <style>
        .news-box .box {
            height: 95%;
        }

        .my-\[3rem\] {
            margin-top: 3rem;
            margin-bottom: 6rem;
        }

        .like-btn.liked {
            color: blue;
            /* Change color to blue */
        }

        body {
            background-color: rgb(var(--body-bg));
        }
    </style>


    <div class="content">
        <div class="main-content">


            <div class="container my-[3rem] ">
                <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-x-6">


                    {{-- scroll --}}
                    <div class="xxl:col-span-6 xl:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">

                        <div class="box custom-box">
                            <div class="box-body">
                                <div class="swiper pagination">
                                    <div class="swiper-wrapper">
                                        @if ($newsscroll->isNotEmpty())
                                            @foreach ($newsscroll as $newsscrolllist)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('assets/images/dailynews/' . $newsscrolllist->image) }}"
                                                        class="!rounded-md" alt="">
                                                    <div class="box-footer">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <div class="avatar avatar-sm avatar-rounded me-2">
                                                                    <img src="assets/images/faces/10.jpg" alt="">
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">
                                                                        {{ $newsscrolllist->title }}
                                                                    </p>
                                                                    <p
                                                                        class="text-[#8c9097] dark:text-white/50 text-[.625rem] mb-0">
                                                                        {{ $newsscrolllist->created_at->format('F j, Y') }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <button aria-label="button" type="button"
                                                                    class="like-btn ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"
                                                                    data-post-id="{{ $newsscrolllist->id }}">
                                                                    <i class="ri-thumb-up-line"></i>
                                                                </button>

                                                                <a href="{{ route('news.details', ['id' => $newsscrolllist->slug]) }}"
                                                                    aria-label="button"
                                                                    class="ti-btn ti-btn-light ti-btn-sm"><i
                                                                        class="ri-chat-2-line"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <p>No news available.</p>
                                        @endif
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end scroll --}}
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

                    <div class="xxl:col-span-6 xl:col-span-6 md:col-span-6 sm:col-span-6 col-span-12 news-box">
                        <div class="grid grid-cols-12 gap-x-6">
                            @if ($newsscroll2->isNotEmpty())
                                @foreach ($newsscroll2 as $newsscrolllist2)
                                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('assets/images/dailynews/' . $newsscrolllist2->image) }}"
                                                    class="card-img-top rounded-t-sm" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{ route('news.details', ['id' => $newsscrolllist2->slug]) }}"
                                                    class="font-semibold text-[0.875rem] text-dark mb-1">{{ $newsscrolllist2->title }}</a>
                                                <p class="card-text text-[#8c9097] dark:text-white/50 mb-3">
                                                    {!! nl2br(e(Str::limit(strip_tags($newsscrolllist2->description), 150))) !!}</p>
                                                <a href="javascript:void(0);"
                                                    class="ti-btn ti-btn-primary !font-medium !mb-0">Read
                                                    More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="assets/images/faces/10.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Posted Date</p>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 text-[.625rem] mb-0">
                                                                {{ $newsscrolllist2->created_at->format('F j, Y') }}</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button aria-label="button" type="button"
                                                            class="like-btn ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"
                                                            data-post-id="{{ $newsscrolllist2->id }}">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </button>
                                                        <a href="{{ route('news.details', ['id' => $newsscrolllist2->slug]) }}"
                                                            aria-label="button" class="ti-btn ti-btn-light ti-btn-sm"><i
                                                                class="ri-chat-2-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No news available.</p>
                            @endif

                        </div>
                    </div>

                    <div class="xl:col-span-12 col-span-12">
                        <div class="flex justify-between items-center mb-3">
                            <h5 class="mb-0 font-semibold text-[1.25rem] text-defaulttextcolor">Popular News</h5>
                            <p class="mb-0 font-semibold">
                                {{-- <a href="javascript:void(0);" class="text-primary"><u>View All</u></a> --}}
                            </p>
                        </div>

                    </div>

                    <div class="xl:col-span-12 col-span-12 news-box">
                        <div class="grid grid-cols-12 gap-x-6">
                            @if ($newsscroll3->isNotEmpty())
                                @foreach ($newsscroll3 as $newsscrolllist3)
                                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('assets/images/dailynews/' . $newsscrolllist3->image) }}"
                                                    class="card-img-top rounded-t-sm" alt="...">
                                            </a>
                                            <div class="box-body">
                                                <a href="{{ route('news.details', ['id' => $newsscrolllist3->slug]) }}"
                                                    class="font-semibold text-[0.875rem] text-dark mb-1">{{ $newsscrolllist3->title }}</a>
                                                <p class="card-text text-[#8c9097] dark:text-white/50 mb-4">
                                                    {!! nl2br(e(Str::limit(strip_tags($newsscrolllist3->description), 150))) !!}</p>
                                                <a href="{{ route('news.details', ['id' => $newsscrolllist3->slug]) }}"
                                                    class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <div class="avatar avatar-sm avatar-rounded me-2">
                                                            <img src="assets/images/faces/7.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold">Post Date</p>
                                                            <p
                                                                class="text-[#8c9097] dark:text-white/50 text-[.625rem] mb-0">
                                                                {{ $newsscrolllist3->created_at->format('F j, Y') }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-list">
                                                        <button aria-label="button" type="button"
                                                            class="like-btn ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]"
                                                            data-post-id="{{ $newsscrolllist3->id }}">
                                                            <i class="ri-thumb-up-line"></i>
                                                        </button>
                                                        <a href="{{ route('news.details', ['id' => $newsscrolllist3->slug]) }}"
                                                            aria-label="button" class="ti-btn ti-btn-light ti-btn-sm"><i
                                                                class="ri-chat-2-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No news available.</p>
                            @endif

                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

                <!-- Start: pagination -->
                <div class="ltr:float-right rtl:float-left mb-6">
                    {{ $newsscroll3->links() }}
                </div>
                <!-- End: pagination -->
            </div>


        </div>
    </div>


    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/blog.js') }}"></script>




@endsection
