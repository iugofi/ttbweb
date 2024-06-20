@extends('Admin.Layouts.layout')

@section('title', 'Customers Edit')
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
                        Customers Edit </h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Edit
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Customers Edit
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">Customers Edit</div>
                        </div>
                        <form method="post" id="customers_edit_form" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="box text-center">
                                    <div class="" id="show_success_alert"></div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">First Name</label>
                                        <input type="text" name="main_id"
                                            value="{{ isset($editCustomers->id) ? \Crypt::encrypt($editCustomers->id) : '' }}" hidden>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="firstname" name="firstname"
                                            value="{{ isset($editCustomers->firstname) ? $editCustomers->firstname : '' }}"
                                            placeholder="Enter Your Firstname">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="xl:col-span-6 col-span-6">
                                        <label for="blog-title" class="form-label">Last Name</label>
                                        <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                            id="lastname" name="lastname"
                                            value="{{ isset($editCustomers->lastname) ? $editCustomers->lastname : '' }}"
                                            placeholder="Enter Your Lastname">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-title" class="form-label">Email</label>
                                            <input type="email"
                                                class="form-control block w-full text-[0.875rem] !rounded-md" id="email"
                                                name="email"
                                                value="{{ isset($editCustomers->email) ? $editCustomers->email : '' }}"
                                                placeholder="Enter Your Email">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-title" class="form-label">Phone</label>
                                            <input type="text"
                                                class="form-control block w-full text-[0.875rem] !rounded-md" id="phone"
                                                name="phone"
                                                value="{{ isset($editCustomers->phone) ? $editCustomers->phone : '' }}"
                                                placeholder="Enter Your Phone No">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-title" class="form-label">Address</label>
                                            <input type="text"
                                                class="form-control block w-full text-[0.875rem] !rounded-md" id="address"
                                                name="address"
                                                value="{{ isset($editCustomers->address) ? $editCustomers->address : '' }}"
                                                placeholder="Enter Your Firstname">
                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-title" class="form-label">Password</label>
                                            <div class="flex">
                                                <input type="password"
                                                    class="form-control block w-full text-[0.875rem] !rounded-md"
                                                    id="password"
                                                    name="password"value="{{ isset($editCustomers->password) ? \Crypt::decrypt($editCustomers->password) : '' }}"
                                                    placeholder="Enter Your Username">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-light !rounded-s-none !mb-0"
                                                    onclick="togglePasswordVisibility('password')"><i
                                                        class="ri-eye-off-line align-middle"></i></button>
                                                <br><br>
                                            </div>
                                            <div class="invalid-feedback"></div>
                                        </div>


                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-title" class="form-label">Activation_key</label>
                                            <input type="text"
                                                class="form-control block w-full text-[0.875rem] !rounded-md" id="activation_key"
                                                name="activation_key"
                                                value="{{ isset($editCustomers->activation_key) ? $editCustomers->activation_key : '' }}"
                                                placeholder="Enter Your Activation_key">
                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-title" class="form-label">Reset_tokens</label>
                                            <input type="text"
                                                class="form-control block w-full text-[0.875rem] !rounded-md" id="reset_tokens"
                                                name="reset_tokens"
                                                value="{{ isset($editCustomers->reset_tokens) ? $editCustomers->reset_tokens : '' }}"
                                                placeholder="Enter Your Reset_tokens">
                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-title" class="form-label">Otp</label>
                                            <input type="text"
                                                class="form-control block w-full text-[0.875rem] !rounded-md" id="otp"
                                                name="otp"
                                                value="{{ isset($editCustomers->otp) ? $editCustomers->otp : '' }}"
                                                placeholder="Enter Your Otp">
                                            <div class="invalid-feedback"></div>
                                        </div>


                                        <div class="xl:col-span-6 col-span-6">
                                            <label for="blog-Language" class="form-label">Status</label>
                                            <select class="form-control block w-full text-[0.875rem] !rounded-md"
                                                data-trigger name="admin_status" id="admin_status">
                                                <option value="">Select</option>
                                                @php
                                                    $status = DB::table('storepick')
                                                        ->where('STORE_ID', 'Status')
                                                        ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                        ->get();
                                                @endphp
                                                @foreach ($status as $statuss)
                                                    <option value="{{ $statuss->PICK_ID }}"
                                                        {{ $statuss->PICK_ID == $editCustomers->status ? 'selected' : '' }}>
                                                        {{ $statuss->PICK_TEXT }}</option>
                                                @endforeach

                                            </select>
                                            <div class="invalid-feedback"></div>
                                        </div>



                                   
                                </div>
                                <div class="box-footer">
                                    <div class="text-end">
                                        {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                        <input type="submit" value="Edit Customers" id="customers_edit_save_btn"
                                            class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">
                                Recent Admin
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
        
            $('#customers_edit_form').submit(function(e) {
                e.preventDefault();
                $('#customers_edit_save_btn').val('please wait..');
                var token = $('meta[name="csrf-token"]').attr('content');
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: "{{ route('edit.customerssave') }}",
                    method: 'post',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 400) {
                            showError('email', response.messages.email);
                            showError('password', response.messages.password);
                            showError('admin_status', response.messages.admin_status);
                            $('#customers_edit_save_btn').val('Edit Customers');
                        } else if (response.status == 200) {
                            $('.invalid-feedback').empty();
                            // $("#show_success_alert").html(showMessage('success', response
                            //     .messages));
                            $('#customers_edit_form')[0].reset();
                            removeValidationClass("#customers_edit_form");
                            $('#customers_edit_save_btn').val('Edit Customers');
                            alert(response.messages);
                            window.location.href = "{{ route('customer.show') }}";
                       
                        }
                    },
                    error: function(xhr, status, error) {}
                });
            });
            fetchAdmin();
        });
    </script>



@endsection
