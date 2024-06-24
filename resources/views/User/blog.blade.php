@extends('User.Layouts.layout')

@section('title', 'TTB Cyber Security Blogs - TTB Antivirus')
@section('Description',
    'TTB cyber security blogs are regularly updated to help our readers become aware of the latest
    phishing, breaches, and cyber attacks happening on the internet.')
@section('keywords', '')
@section('canonical', url('/blog'))



@section('content')

    <style>
        .contentblog {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            /* Number of lines to show */
            -webkit-box-orient: vertical;
        }
    </style>

    <div class="content">
        <div class="main-content">


            <div class="container my-[3rem] ">
                <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-6 xxl:col-span-8 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                    @foreach ($blogs as $bloglist)
                                        <div
                                            class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12 blog-box">
                                            <div class="box">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('assets/images/dailyblogs/' . $bloglist->image) }}"
                                                        class="card-img-top rounded-t-sm" style="width: 100%;"
                                                        alt="...">
                                                </a>
                                                <div class="box-body">
                                                    <a href="{{ route('blog.details', ['id' => $bloglist->slug]) }}"
                                                        class="font-semibold text-[0.875rem] text-dark mb-1">{{ $bloglist->title }}</a>
                                                    <p class="card-text text-[#8c9097] dark:text-white/50 mb-3 contentblog">
                                                        {!! nl2br(e(Str::limit(strip_tags($bloglist->description), 150))) !!}</p>
                                                    <a href="{{ route('blog.details', ['id' => $bloglist->slug]) }}"
                                                        class="ti-btn ti-btn-primary !font-medium !mb-0">Read More</a>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">

                                                            <div>
                                                                <p class="mb-0 font-semibold">Posted Date</p>
                                                                <p
                                                                    class="text-[#8c9097] dark:text-white/50 text-[.625rem] mb-0">
                                                                <p>{{ $bloglist->created_at->format('F j, Y') }}</p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="btn-list">
                                                            <button aria-label="button" type="button" class="like-btn ti-btn ti-btn-light ti-btn-sm !me-[0.375rem]" data-post-id="{{ $bloglist->id }}">
                                                                <i class="ri-thumb-up-line"></i>
                                                            </button>

                                                            <a href="{{ route('blog.details', ['id' => $bloglist->slug]) }}" aria-label="button" 
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
                            

                            <script>
                                $(document).ready(function() {
                                    // Check if the user has liked or disliked the post in the browser's cache
                                    $('.like-btn').each(function() {
                                        var postId = $(this).data('post-id');
                                        var action = localStorage.getItem('action_' + postId);
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
                                        var cachedAction = localStorage.getItem('action_' + postId);
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
                                        $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                        // Make AJAX request to update database
                                        $.ajax({
                                            type: 'POST',
                                            url: '/blog/' + postId + '/like',
                                            data: { action: action },
                                            success: function(response) {
                                                if (response.success) {  
                                                    // Update UI                           
                                                    if (action === 'like') {
                                                        $('.like-btn[data-post-id="' + postId + '"]').addClass('liked');
                                                        localStorage.setItem('action_' + postId, 'like');
                                                    } else if (action === 'remove-like') {
                                                        $('.like-btn[data-post-id="' + postId + '"]').removeClass('liked');
                                                        localStorage.removeItem('action_' + postId);
                                                    } else if (action === 'remove-dislike') {
                                                        $('.like-btn[data-post-id="' + postId + '"]').removeClass('disliked');
                                                        localStorage.removeItem('action_' + postId);
                                                    }
                                                }
                                            }
                                        });
                                    });
                                });
                            </script>
                            
                            
                            
                            <style>
                                .like-btn.liked {
    color: blue; /* Change color to blue */
}
                                .my-\[3rem\] {
                                    margin-top: 3rem;
                                    margin-bottom: 6rem;
                                }

                                .blog-box .box {
                                    height: 95%;
                                }
                                .recent-avtar span.avatar {
                                width: 100%;
                                max-width: 70px;
                            }
                            .blog-navigation .leading-5 {
                            margin: 4px;
                        }
                            </style>
                            <div class="xl:col-span-6 xxl:col-span-4 col-span-12">

                                <div class="box">
                                    <div class="box-header flex items-center justify-between">
                                        <div class="box-title">
                                            Recent Posts
                                        </div>
                                        <div>
                                            <span class="badge bg-primary/10 text-primary">{{$totalblog}} Blogs</span>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="list-group">
                                            @foreach ($recentblog as $recentbloglist)                                            
                                            <li class="list-group-item recent-avtar">
                                                <div class="flex flex-nowrap items-center">
                                                    <span class="avatar avatar-xl me-4">
                                                        <img src="{{ asset('assets/images/dailyblogs/' . $recentbloglist->image) }}"
                                                            class="img-fluid !rounded-md" alt="...">
                                                    </span>
                                                    <div class="flex-grow">
                                                        <a href="{{ route('blog.details', ['id' => $bloglist->slug]) }}"
                                                            class="text-[0.875rem] font-semibold mb-0">{{$recentbloglist->title}}</a>
                                                        <p class="mb-1 popular-blog-content text-truncate">
                                                            {!! nl2br(e(Str::limit(strip_tags($recentbloglist->description), 100))) !!}
                                                        </p>
                                                        <span
                                                            class="text-[#8c9097] dark:text-white/50 text-[0.6875rem]">{{ $recentbloglist->created_at->format('F j, Y') }}</span>
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('blog.details', ['id' => $recentbloglist->slug]) }}" aria-label="button"
                                                            class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i
                                                                class="ri-arrow-right-s-line"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            
                                            {{-- <li class="list-group-item text-center">
                                                <button type="button"
                                                    class="ti-btn ti-btn-primary !font-medium !mb-0">Load more</button>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--End::row-1 -->

                <!-- Start: pagination -->
                <div class="ltr:float-right rtl:float-left mb-6 blog-navigation">
                    {{ $blogs->links() }}
                    {{-- <nav aria-label="Page navigation" class="">
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
                    </nav> --}}
                </div>
                <!-- End: pagination -->
            </div>


        </div>
    </div>




@endsection
