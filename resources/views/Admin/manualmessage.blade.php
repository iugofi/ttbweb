@extends('Admin.Layouts.layout')

@section('title', 'Manual Message')
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

                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="canonical-url" class="form-label">Email Subject</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="EmailSubject" name="EmailSubject" placeholder="Email Subject" maxlength="29">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="canonical-url" class="form-label">Email Type</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Without HTML
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            With HTML
                                        </label>
                                    </div>
                                    </div>


                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">Email Content</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md"
                                            name="email_content" id="email_content">
                                            @php
                                                $mail_data = DB::table('Mail')
                                                    ->join('storepick', 'storepick.PICK_ID', '=', 'Mail.mail_category')
                                                    ->where('storepick.STORE_ID', '=', 'mail_category')
                                                    ->select('Mail.*', 'storepick.*')
                                                    ->get();

                                            @endphp
                                            @foreach ($mail_data as $mail_datas)
                                                <option value="{{ $mail_datas->mail_body }}">
                                                    {{ $mail_datas->PICK_TEXT }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-12 col-span-12">
                                        <label class="form-label">Email Id</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md"
                                            name="email_ids[]" id="email_ids" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="3">
                                            @php
                                                $user = DB::table('usersall')->orderBy('created_at', 'asc')->get();
                                            @endphp
                                            @foreach ($user as $users)
                                                <option value="{{ $users->email }}">{{ $users->email }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"></div>
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

    <script src="{{ asset('assets/js/multiselect-dropdown.js') }}"></script>







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
                            showError('EmailSubject', response.messages.EmailSubject);
                            showError('email_content', response.messages.email_content);
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
