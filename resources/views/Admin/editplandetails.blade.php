@extends('Admin.Layouts.layout')

@section('title', 'Edit Plan Details')
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
                        Plan Details Edit </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Plan Details
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Plan Details Edit
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Plan Details Edit</div>
                        </div>
                        <form method="post" id="edit_plan_details_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">



                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label required">Plan Id</label>
                                        <input type="text" name="main_id" value="{{ isset($editplandetails->id) ? \Crypt::encrypt($editplandetails->id) : '' }}" hidden>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="planname" id="planname">
                                            <option value="">Select</option>
                                            @php
                                                $status = DB::table('storepick')
                                                    ->where('STORE_ID', 'key_type')
                                                    ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                    ->get();
                                            @endphp
                                            @foreach ($status as $statuss)
                                                <option value="{{ $statuss->PICK_ID }}" {{$statuss->PICK_ID ==$editplandetails->key_type ? 'selected' :'' }}>{{ $statuss->PICK_TEXT }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label required">Plan Name</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="plan_id" id="plan_id">
                                            <option value="">Select</option>
                                            @php
                                                $plan_name = DB::table('planname')->get();
                                            @endphp
                                            @foreach ($plan_name as $plan_names)
                                                <option value="{{ $plan_names->plan_id }}" {{$plan_names->plan_id ==$editplandetails->plan_id ? 'selected' :'' }}>{{ $plan_names->name }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                   

                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">Price</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="price" name="price" value="{{ isset($editplandetails->price) ? $editplandetails->price : '' }}" placeholder="Enter Price">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                 

                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="canonical-url" class="form-label">Discount</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="discount" name="discount" value="{{ isset($editplandetails->discount) ? $editplandetails->discount : '' }}" placeholder="Enter Discount">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="coupons" class="form-label">Coupons</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="coupons" name="coupons" value="{{ isset($editplandetails->coupons) ? $editplandetails->coupons : '' }}" placeholder="Enter coupons">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label"> Coupons Status</label>
                                        <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                            name="coupon_status" id="coupon_status">
                                            <option value="">Select</option>
                                            @php
                                                $status = DB::table('storepick')
                                                    ->where('STORE_ID', 'Status')
                                                    ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                    ->get();
                                            @endphp
                                            @foreach ($status as $statuss)
                                                <option value="{{ $statuss->PICK_ID }}" {{$statuss->PICK_ID ==$editplandetails->is_coupons ? 'selected' : '' }}>{{ $statuss->PICK_TEXT }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    
                                


                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Edit Plan Details" id="plan_details_edit_btn"
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
            $('#edit_plan_details_form').submit(function(e) {
                e.preventDefault();
                $('#plan_details_edit_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);
                
                $.ajax({
                    url:  "{{ route('edit.editplandetailssave') }}",
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('planname', response.messages.planname);
                            showError('plan_id', response.messages.plan_id);
                            showError('price', response.messages.price);
                            $('#plan_details_edit_btn').val('Edit Plan Details');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            // $("#show_success_alert").html(showMessage('success', response
                            //     .messages));
                            $('#edit_plan_details_form')[0].reset();
                            removeValidationClass("#edit_plan_details_form");
                            $('#plan_details_edit_btn').val('Edit Plan Details');
                            alert(response.messages);
                            window.location.href = "{{ route('plan.detailsshow') }}";
                           
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });

        });
    </script>



@endsection
