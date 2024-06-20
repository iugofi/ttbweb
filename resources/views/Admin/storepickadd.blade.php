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
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Storepick Create</div>
                        </div>
                        <form method="post" id="storepick_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="STORE ID" class="form-label">STORE NAME</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="STORE_ID" name="STORE_ID" placeholder="STORE NAME">
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
                                    <input type="submit" value="STOREPICK ADD" id="storepick_save_btn"
                                        class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
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
                </div> --}}
            </div>
            <!--End::row-1 -->


        </div>
    </div>

  
    



    <script>
        $(document).ready(function() {
            $('#storepick_form').submit(function(e) {
                e.preventDefault();
                $('#storepick_save_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '{{ route('save.storepick') }}',
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('STORE_ID', response.messages.STORE_ID);
                            showError('PICK_TEXT', response.messages.PICK_TEXT);
                            showError('PICK_ID', response.messages.PICK_ID);
                            showError('STORE_INDEX_SEQUENCE', response.messages.STORE_INDEX_SEQUENCE);                   

                            $('#storepick_save_btn').val('STOREPICK ADD');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            // $("#show_success_alert").html(showMessage('success', response
                            //     .messages));
                            $('#storepick_form')[0].reset();
                            removeValidationClass("#storepick_form");
                            $('#storepick_save_btn').val('STOREPICK ADD');
                            alert(response.messages);
                            window.location.href = "{{ route('admin.storepickpage') }}";
                         
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
        });
    </script>



@endsection
