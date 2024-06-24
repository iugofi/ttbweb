@extends('Admin.Layouts.layout')

@section('title', 'Blog Comment Edit')
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
                        Blog Edit</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Blog Comment
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Blog Comment Edit
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Blog Comment Edit</div>
                        </div>
                        <form method="post" id="edit__com_blog_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-title" class="form-label">Blog Id</label>
                                        <input type="text" name="main_id" value="{{ isset($editblog->id) ? $editblog->id : '' }}" hidden>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="" name="" value="{{ isset($editblog->blog_id) ? $editblog->blog_id : '' }}" placeholder="Blog Id" disabled>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-title" class="form-label">First Name</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="" name="" value="{{ isset($editblog->first_name) ? $editblog->first_name : '' }}" placeholder="Blog Id" disabled>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-title" class="form-label">Last Name</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="" name="" value="{{ isset($editblog->last_name) ? $editblog->last_name : '' }}" placeholder="Blog Id" disabled>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-title" class="form-label">Email</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="" name="" value="{{ isset($editblog->email) ? $editblog->email : '' }}" placeholder="Blog Id" disabled>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-title" class="form-label">Comment</label>
                                        <textarea name="" class="form-control block w-full text-[0.875rem] !rounded-md" id="" cols="30" rows="10" disabled>{{ isset($editblog->comment) ? $editblog->comment : '' }}</textarea>
                                        
                                        <div class="invalid-feedback"></div>
                                    </div>
                                   

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="blog-Language" class="form-label">Status</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="blog_com_status" id="blog_com_status">
                                            <option value="">Select</option>
                                            @php
                                                $status = DB::table('storepick')
                                                    ->where('STORE_ID', 'Status')
                                                    ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                    ->get();
                                            @endphp
                                            @foreach ($status as $statuss)
                                                <option value="{{ $statuss->PICK_ID }}" {{ $statuss->PICK_ID == $editblog->status ? 'selected' : '' }}>{{ $statuss->PICK_TEXT }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback"></div>

                                    </div>


                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Edit Blog" id="blog__com_edit_btn"
                                        class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <!--End::row-1 -->


        </div>
    </div>

 




    <script>
        $(document).ready(function() {
            $('#edit__com_blog_form').submit(function(e) {
                e.preventDefault();
                $('#blog__com_edit_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);
                
                $.ajax({
                    url:  "{{ route('edit.editcommentblog') }}",
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('blog_com_status', response.messages.news_com_status);
                            $('#blog__com_edit_btn').val('Edit Blog Comment');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            // $("#show_success_alert").html(showMessage('success', response
                            //     .messages));
                            $('#edit__com_blog_form')[0].reset();
                            removeValidationClass("#edit__com_blog_form");
                            $('#blog__com_edit_btn').val('Edit Blog Comment');
                            alert(response.messages);
                            window.location.href = "{{ route('admin.blogcommentlist') }}";
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
            fetchNews();
        });
    </script>



@endsection
