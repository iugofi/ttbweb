@extends('Admin.Layouts.layout')

@section('title', 'Manual Message')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
{{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"> --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>




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
                            Manual Message
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Add Manual User
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Add Manual User</div>
                        </div>
                        <form method="post" id="message_manual_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">

                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">Email Subject</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="main_key" name="main_key" placeholder="Enter Key" maxlength="29"
                                            onkeydown="addHyphen(this)">
                                        <div class="invalid-feedback"></div>
                                    </div>


                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">Email Content</label>
                                        <textarea name="EmailBody" id="summernote" class="typing-text" cols="300" rows="100"></textarea>

                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">Email Id</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md"
                                                name="email_ids[]" id="field2"
                                                multiple multiselect-search="true"
                                                multiselect-select-all="true"
                                                multiselect-max-items="3">
                                            @php
                                                $user = DB::table('usersall')->orderBy('created_at', 'asc')->get();
                                            @endphp
                                            @foreach ($user as $users)
                                                <option value="{{ $users->email }}">{{ $users->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Send Manual Message" id="message_manual_form_btn"
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
        $('#summernote').summernote({
          placeholder: 'Hello stand alone ui',
          tabsize: 2,
          height: 120,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
          ]
        });
      </script>


    <script>
           $(document).ready(function() {
            $('#message_manual_form').submit(function(e) {
                e.preventDefault();
                $('#message_manual_form_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route('send.manual') }}',
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('main_key', response.messages.main_key);
                            showError('EmailBody', response.messages.EmailBody);
                            showError('email_ids', response.messages.email_ids);
                            $('#message_manual_form_btn').val('Send Manual Message');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            $("#show_success_alert").html(showMessage('success', response
                                .messages));
                            $('#message_manual_form')[0].reset();
                            removeValidationClass("#message_manual_form");
                            $('#message_manual_form_btn').val('Send Manual Message');

                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });


           });
    </script>






@endsection
