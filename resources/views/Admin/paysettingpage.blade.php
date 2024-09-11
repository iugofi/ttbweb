@extends('Admin.Layouts.layout')

@section('title', 'Payment Settings')
@section('Description', '')
@section('keywords', '')
@section('canonical', 'vbhdvbh')
@section('content')


<style>.btn-toggle {
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-toggle.active {
    background-color: #0069d9; /* Active color for the selected button */
    color: white;
}

.btn-toggle.inactive {
    background-color: #f8f9fa; /* Inactive color for the unselected button */
    color: #6c757d;
}

</style>

    <div class="content">
        <div class="main-content">


            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Payment Settings </h3>
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
                        Payment Settings
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <p class="text-[0.875rem] font-semibold mb-3">Payment Getwatys :</p>
            <div class="grid grid-cols-12 gap-4">
                @foreach ($pay_getways as $index => $item)
                <div class="xl:col-span-3 col-span-12">
                    <div class="box !shadow-none border dark:border-defaultborder/10">
                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                            <div class="">
                                <span class="font-semibold">{{$item->PICK_TEXT}}</span>
                            </div>
                            <div>
                                <div class="inline-flex" role="group" aria-label="Payment method toggle button group">
                                    <input type="radio" class="btn-check" name="payment-method-{{$index}}" id="payment-enable-{{$index}}" value="{{$item->PICK_TEXT_EXTEND}}">
                                    <label class="ti-btn !text-[0.75rem] !font-medium btn-toggle bg-primary text-white !rounded-e-none !border-e-0" for="payment-enable-{{$index}}">Enable</label>
                                    <input type="radio" class="btn-check" name="payment-method-{{$index}}" id="payment-disable-{{$index}}" value="{{$item->PICK_TEXT_EXTEND}}">
                                    <label class="ti-btn !text-[0.75rem] !font-medium btn-toggle btn-sm ti-btn-outline-primary !rounded-s-none" for="payment-disable-{{$index}}">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



                {{-- <div class="xl:col-span-3 col-span-12">
                    <div class="box !shadow-none border dark:border-defaultborder/10">
                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                            <div class="">
                                <span class="font-semibold">Paypal</span>
                            </div>
                            <div>
                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="label-inbox" id="inbox-enable" checked>
                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="inbox-enable">Enable</label>
                                    <input type="radio" class="btn-check" name="label-inbox" id="inbox-disable" >
                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="inbox-disable">Disable</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>



        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Select all the radio buttons and labels
            const radios = document.querySelectorAll('.btn-check');
            const labels = document.querySelectorAll('.btn-toggle');

            // Add event listeners to each radio button
            radios.forEach(radio => {
                radio.addEventListener('change', () => {
                    // Remove active class from all labels
                    labels.forEach(label => {
                        label.classList.remove('active');
                        label.classList.add('inactive');
                    });
                    // Add active class to the corresponding label
                    const selectedLabel = document.querySelector(`label[for="${radio.id}"]`);
                    if (selectedLabel) {
                        selectedLabel.classList.remove('inactive');
                        selectedLabel.classList.add('active');
                    }
                });
            });

            // Initialize the state based on the currently checked radio button
            radios.forEach(radio => {
                if (radio.checked) {
                    const selectedLabel = document.querySelector(`label[for="${radio.id}"]`);
                    if (selectedLabel) {
                        selectedLabel.classList.remove('inactive');
                        selectedLabel.classList.add('active');
                    }
                }
            });
        });
        </script>



@endsection
