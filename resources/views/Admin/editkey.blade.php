@extends('Admin.Layouts.layout')

@section('title', 'Edit Key Details')
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
                        Key Details Edit </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Key Details
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Key Details Edit
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Key Details Edit</div>
                        </div>
                        <form method="post" id="edit_key_save_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">


                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label required">Product Details</label>
                                        <input type="text" name="main_id" value="{{ isset($editkey->id) ? \Crypt::encrypt($editkey->id) : '' }}" hidden>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="product_id" id="product_id">
                                            <option value="">Select</option>
                                            @php
                                                $product_details = DB::table('product_details')
                                                    ->join('storepick', 'product_details.key_type', '=', 'storepick.PICK_ID')
                                                    ->join('planname', 'product_details.plan_id', '=', 'planname.plan_id')
                                                    ->select('product_details.id', 'storepick.PICK_TEXT as key_text', 'planname.name as plan_name_text', 'product_details.plan_id')
                                                    ->get();
                                            @endphp
                                            @foreach ($product_details as $product_detail)
                                                <option value="{{ $product_detail->id }}" {{$product_detail->id ==$editkey->product_id ? 'selected' :'' }}>{{ $product_detail->key_text }}-{{ $product_detail->plan_name_text }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>


                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">main_key</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="main_key" name="main_key" value="{{ isset($editkey->main_key) ? $editkey->main_key : '' }}" placeholder="Enter Key">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                 

                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">key_activation_date</label>
                                        <input type="date" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="key_activation_date" value="{{ isset($editkey->key_activation_date) ? $editkey->key_activation_date : '' }}" name="key_activation_date" >
                                        <div class="invalid-feedback"></div>
                                    </div>

                                
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">key_expirey_date</label>
                                        <input type="date" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="key_expirey_date" value="{{ isset($editkey->key_expirey_date) ? $editkey->key_expirey_date : '' }}" name="key_expirey_date" >
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="coupons" class="form-label">Key Status</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="is_key_used" id="is_key_used">
                                            <option value="">Select</option>
                                            @php
                                                $keystatus = DB::table('storepick')
                                                    ->where('STORE_ID', 'key_status')
                                                    ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                    ->get();
                                            @endphp
                                            @foreach ($keystatus as $keystatuss)
                                                <option value="{{ $keystatuss->PICK_ID }}" {{$keystatuss->PICK_ID ==$editkey->is_key_used ? 'selected' : '' }}>{{ $keystatuss->PICK_TEXT }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Status</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="key_status" id="key_status">
                                            <option value="">Select</option>
                                            @php
                                                $status = DB::table('storepick')
                                                    ->where('STORE_ID', 'Status')
                                                    ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                    ->get();
                                            @endphp
                                            @foreach ($status as $statuss)
                                                <option value="{{ $statuss->PICK_ID }}" {{$statuss->PICK_ID ==$editkey->key_status ? 'selected' : '' }}>{{ $statuss->PICK_TEXT }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Edit Key" id="key_edit_btn"
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
            $('#edit_key_save_form').submit(function(e) {
                e.preventDefault();
                $('#key_edit_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);
                
                $.ajax({
                    url:  "{{ route('edit.editkeysave') }}",
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
                            showError('product_id', response.messages.product_id);
                            showError('key_activation_date', response.messages.key_activation_date);
                            showError('key_expirey_date', response.messages.key_expirey_date);
                            showError('is_key_used', response.messages.is_key_used);
                            showError('key_status', response.messages.key_status);
                            $('#key_edit_btn').val('Edit Key');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            // $("#show_success_alert").html(showMessage('success', response
                            //     .messages));
                            $('#edit_key_save_form')[0].reset();
                            removeValidationClass("#edit_key_save_form");
                            $('#key_edit_btn').val('Edit Key');
                            alert(response.messages);
                            window.location.href = "{{ route('key.show') }}";
                           
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });

        });
    </script>



@endsection
