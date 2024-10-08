@extends('Admin.Layouts.layout')

@section('title', 'Key Manual Add')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')
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
                        Add Manual Key
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Add Manual Key Create
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">Add Manual Key Create</div>
                    </div>
                    <form method="post" id="storepick_form" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="box text-center">
                                <div class="" id="show_success_alert"></div>
                            </div>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="STORE ID" class="form-label">Customer Email</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="customer_email" name="customer_email" placeholder="Customer Email">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="STORE-TYPE" class="form-label">Customer First Name</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="first_name" name="first_name" placeholder="First Name">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="xl:col-span-6 col-span-12">
                                    <label for="PICK TEXT" class="form-label">Customer Last Name</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="last_name" name="last_name" placeholder="Last Name">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="xl:col-span-6 col-span-6">
                                    <label for="blog-title" class="form-label required">Key Type</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" name="planname" id="planname">
                                        <option value="">Select</option>
                                        @php
                                            $status = DB::table('storepick')
                                                ->where('STORE_ID', 'key_type')
                                                ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                ->get();
                                        @endphp
                                        @foreach ($status as $statuss)
                                            <option value="{{ $statuss->PICK_ID }}">{{ $statuss->PICK_TEXT }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-6">
                                    <label for="blog-title" class="form-label required">Plan Name</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" name="plan_id" id="plan_id">
                                        <option value="">Select</option>
                                        <!-- Options will be populated dynamically -->
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>


                                <div class="xl:col-span-6 col-span-12">
                                    <label for="PICK TEXT" class="form-label">Key</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" name="key_ttb" id="key_ttb">
                                        <option value="">Select</option>
                                        <!-- Options will be populated dynamically -->
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="xl:col-span-6 col-span-12">
                                    <label for="PICK TEXT" class="form-label">State</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="PICK_TEXT" name="PICK_TEXT" placeholder="Last Name">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="canonical-url" class="form-label">City</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="PICK_ID" name="PICK_ID" placeholder="Phone">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="PICK TEXT" class="form-label">Line 1</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="PICK_TEXT" name="PICK_TEXT" placeholder="Last Name">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="canonical-url" class="form-label">Line 2</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="PICK_ID" name="PICK_ID" placeholder="Phone">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="PICK TEXT" class="form-label">Postal Code</label>
                                    <input type="text" class="form-control block w-full text-[0.875rem] !rounded-md"
                                        id="PICK_TEXT" name="PICK_TEXT" placeholder="Last Name">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <label for="coupons" class="form-label">Is Manual</label>
                                    <select class="form-control block w-full text-[0.875rem] !rounded-md" data-trigger
                                        name="is_key_used" id="is_key_used">
                                        <option value="">Select</option>
                                        @php
                                            $status = DB::table('storepick')
                                                ->where('STORE_ID', 'yes_no')
                                                ->orderBy('STORE_INDEX_SEQUENCE', 'asc')
                                                ->get();
                                        @endphp
                                        @foreach ($status as $statuss)
                                            <option value="{{ $statuss->PICK_ID }}">{{ $statuss->PICK_TEXT }}</option>
                                        @endforeach

                                    </select>

                                    <div class="invalid-feedback"></div>
                                </div>

                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="text-end">
                                {{-- <button type="button" class="ti-btn !py-1 !px-2 ti-btn-light !text-[0.75rem] !font-medium me-2">Save As Draft</button> --}}
                                <input type="submit" value="ADD MANUAL USER" id="storepick_save_btn"
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
        $('#planname').on('change', function() {
            var planname = $(this).val();
            $.ajax({
                url: '{{ route("get.plan.id") }}',
                type: 'GET',
                data: { planname: planname },
                success: function(data) {
                    $('#plan_id').empty();
                    $('#plan_id').append('<option value="">Select</option>');

                    $.each(data, function(key, value) {
                        $('#plan_id').append('<option value="'+ value.plande_id +'">'+ value.name +'</option>');
                    });
                }
            });
        });
        $('#plan_id').on('change', function() {
            var plan_id = $(this).val();
            $.ajax({
                url: '{{ route("get.key.id") }}',
                type: 'GET',
                data: { plan_id: plan_id },
                success: function(data) {
                    $('#key_ttb').empty();
                    $('#key_ttb').append('<option value="">Select</option>');
                    $.each(data, function(key, value) {
                        $('#key_ttb').append('<option value="'+ value.id +'">'+ value.main_key +'</option>');
                    });
                }
            });
        });
    });
    </script>


<script>
$('#customer_email').on('blur', function() {
            var email = $(this).val();

            if (email) {
                $.ajax({
                    url: '/check-email',
                    type: 'GET',
                    data: { email: email },
                    success: function(response) {
                        if (response.first_name && response.last_name) {
                            $('#first_name').val(response.first_name).prop('disabled', true);
                            $('#last_name').val(response.last_name).prop('disabled', true);
                            $('#hidden_first_name').val(response.first_name);
                            $('#hidden_last_name').val(response.last_name);
                        } else {
                            $('#first_name').val('').prop('disabled', false);
                            $('#last_name').val('').prop('disabled', false);
                            $('#customer_phone').val('').prop('disabled', false);
                            $('#hidden_first_name').val('');
                            $('#hidden_last_name').val('');
                        }
                    },
                    error: function() {
                        $('#first_name').val('').prop('disabled', false);
                        $('#last_name').val('').prop('disabled', false);
                        $('#hidden_first_name').val('');
                        $('#hidden_last_name').val('');
                    }
                });
            } else {
                $('#first_name').val('').prop('disabled', false);
                $('#last_name').val('').prop('disabled', false);
                $('#hidden_first_name').val('');
                $('#hidden_last_name').val('');
            }
        });

</script>


@endsection
