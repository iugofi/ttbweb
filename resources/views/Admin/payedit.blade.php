@extends('Admin.Layouts.layout')

@section('title', 'Payment Edit')
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
                        Payment Edit </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Payment
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Payment Edit
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Payment Edit</div>
                        </div>
                        <form method="post" id="edit_pay_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="blog-title" class="form-label">Payment Id</label>
                                        <input type="text" name="main_id" value="{{ isset($payedit->id) ? $payedit->id : '' }}" hidden>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="pay_id" name="pay_id" value="{{ isset($payedit->pay_id) ? $payedit->pay_id : '' }}" placeholder="Payment Id">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="product key" class="form-label">product_key</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="product_key" name="product_key" value="{{ isset($payedit->product_key) ? $payedit->product_key : '' }}" placeholder="Product Key">
                                        <div class="invalid-feedback"></div>
                                    </div> 
                                    <div class="xl:col-span-6 col-span-12">
                                        <label for="product key" class="form-label">Currency</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="currency" name="currency" value="{{ isset($payedit->currency) ? $payedit->currency : '' }}" placeholder="Currency">
                                        <div class="invalid-feedback"></div>
                                    </div> 

                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="text-end">
                                    {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                    <input type="submit" value="Edit Pay" id="pay_edit_btn"
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
          

            $('#edit_pay_form').submit(function(e) {
                e.preventDefault();
                $('#pay_edit_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);
                
                $.ajax({
                    url:  "{{ route('edit.news') }}",
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('pay_id', response.messages.pay_id);
                            showError('product_key', response.messages.product_key);
                        

                            $('#pay_edit_btn').val('Edit Pay');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            // $("#show_success_alert").html(showMessage('success', response
                            //     .messages));
                            $('#edit_pay_form')[0].reset();
                            removeValidationClass("#edit_pay_form");
                            $('#pay_edit_btn').val('Edit Pay');
                            alert(response.messages);
                            window.location.href = "{{ route('admin.newslist') }}";
                           
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
        });
    </script>



@endsection
