@extends('Admin.Layouts.layout')

@section('title', 'Mail Create')
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
                        Mail Create
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                     Mail Create
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Mail Create</div>
                    </div>
                    <form method="post" id="mail_create_form" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>
                            <div class="grid grid-cols-12 gap-4">

                                <div class="xl:col-span-12 col-span-12">
                                    <label for="blog-Language" class="form-label">Mail Category</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                        name="mail_cat" id="mail_cat">
                                        <option value="">Select</option>
                                        @php
                                            $status = DB::table('storepick')
                                                ->where('STORE_ID', 'mail_category')
                                                ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                ->get();
                                        @endphp
                                        @foreach ($status as $statuss)
                                            <option value="{{ $statuss->PICK_ID }}">{{ $statuss->PICK_TEXT }}</option>
                                        @endforeach

                                    </select>
                                    <div class="invalid-feedback"></div>

                                </div>


                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label">Email Content</label>
                                    <textarea name="EmailBody" id="summernote" class="typing-text" cols="40" rows="20"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="xl:col-span-12 col-span-12">
                                    <label class="form-label">Email Content HTML (optional)</label>
                                    <textarea name="EmailHTML"  class="form-control block w-full text-[0.875rem]"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>




                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-end">
                                {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                <input type="submit" value="Send Manual Message" id="mail_create_form_btn"
                                    class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>



    </div>
</div>









<script>
       $(document).ready(function() {
        $('#mail_create_form').submit(function(e) {
            e.preventDefault();
            $('#mail_create_form_btn').val('please wait..');
            var token = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData($(this)[0]);

            $.ajax({
                url: '{{ route('mail.createsave') }}',
                method: 'post',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 400) {
                        showError('mail_cat', response.messages.mail_cat);
                        showError('summernote', response.messages.EmailBody);

                        $('#mail_create_form_btn').val('Send Manual Message');
                    } else if (response.status == 200) {
                        $('.invalid-feedback').empty();
                        $("#show_success_alert").html(showMessage('success', response
                            .messages));
                        $('#mail_create_form')[0].reset();
                        removeValidationClass("#mail_create_form");
                        $('#mail_create_form_btn').val('Send Manual Message');

                    }
                },
                error: function(xhr, status, error) {}
            });
        });


       });
</script>



@endsection
