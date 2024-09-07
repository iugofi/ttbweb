@extends('User.Layouts.layout')

@section('title', 'Chekout Page')
@section('Description', '')
@section('keywords', '')
@section('canonical', '')
@section('content')



    <script src="https://pay.google.com/gp/p/js/pay.js"></script>
    <style>
        body {
            background-color: rgb(var(--body-bg));
        }

        [data-hs-tab].active.hs-tab-active\:text-primary {
            color: rgb(0 0 0);
        }

        .spinner-custom {
            border: 3px solid rgba(0, 0, 0, 0.1);
            border-left: 3px solid #000;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .google-pay {
            background-color: #fff;
            background-origin: content-box;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            border: 0;
            border-radius: 4px;
            box-shadow: 0px 1px 3px 0px #6d6d6d;
            outline: 0;
            padding: 10px 8px;

            width: 160px;
            height: 40px;
            min-height: 40px;
            background-image: url('data:image/svg+xml,%3Csvg%20width%3D%2241%22%20height%3D%2217%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cpath%20d%3D%22M19.526%202.635v4.083h2.518c.6%200%201.096-.202%201.488-.605.403-.402.605-.882.605-1.437%200-.544-.202-1.018-.605-1.422-.392-.413-.888-.62-1.488-.62h-2.518zm0%205.52v4.736h-1.504V1.198h3.99c1.013%200%201.873.337%202.582%201.012.72.675%201.08%201.497%201.08%202.466%200%20.991-.36%201.819-1.08%202.482-.697.665-1.559.996-2.583.996h-2.485v.001zm7.668%202.287c0%20.392.166.718.499.98.332.26.722.391%201.168.391.633%200%201.196-.234%201.692-.701.497-.469.744-1.019.744-1.65-.469-.37-1.123-.555-1.962-.555-.61%200-1.12.148-1.528.442-.409.294-.613.657-.613%201.093m1.946-5.815c1.112%200%201.989.297%202.633.89.642.594.964%201.408.964%202.442v4.932h-1.439v-1.11h-.065c-.622.914-1.45%201.372-2.486%201.372-.882%200-1.621-.262-2.215-.784-.594-.523-.891-1.176-.891-1.96%200-.828.313-1.486.94-1.976s1.463-.735%202.51-.735c.892%200%201.629.163%202.206.49v-.344c0-.522-.207-.966-.621-1.33a2.132%202.132%200%200%200-1.455-.547c-.84%200-1.504.353-1.995%201.062l-1.324-.834c.73-1.045%201.81-1.568%203.238-1.568m11.853.262l-5.02%2011.53H34.42l1.864-4.034-3.302-7.496h1.635l2.387%205.749h.032l2.322-5.75z%22%20fill%3D%22%235F6368%22%2F%3E%3Cpath%20d%3D%22M13.448%207.134c0-.473-.04-.93-.116-1.366H6.988v2.588h3.634a3.11%203.11%200%200%201-1.344%202.042v1.68h2.169c1.27-1.17%202.001-2.9%202.001-4.944%22%20fill%3D%22%234285F4%22%2F%3E%3Cpath%20d%3D%22M6.988%2013.7c1.816%200%203.344-.595%204.459-1.621l-2.169-1.681c-.603.406-1.38.643-2.29.643-1.754%200-3.244-1.182-3.776-2.774H.978v1.731a6.728%206.728%200%200%200%206.01%203.703%22%20fill%3D%22%2334A853%22%2F%3E%3Cpath%20d%3D%22M3.212%208.267a4.034%204.034%200%200%201%200-2.572V3.964H.978A6.678%206.678%200%200%200%20.261%206.98c0%201.085.26%202.11.717%203.017l2.234-1.731z%22%20fill%3D%22%23FABB05%22%2F%3E%3Cpath%20d%3D%22M6.988%202.921c.992%200%201.88.34%202.58%201.008v.001l1.92-1.918C10.324.928%208.804.262%206.989.262a6.728%206.728%200%200%200-6.01%203.702l2.234%201.731c.532-1.592%202.022-2.774%203.776-2.774%22%20fill%3D%22%23E94235%22%2F%3E%3Cpath%20d%3D%22M0%200h41.285v18H0z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E');
        }

        .paypal-btn {
            background-color: #fff;
            /* background-origin: content-box; */
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            border: 0;
            border-radius: 4px;
            box-shadow: 0px 1px 3px 0px #6d6d6d80;
            outline: 0;
            padding: 10px 97px;
            width: 160px;
            height: 40px;
            min-height: 40px;
            margin: auto;
            background-image: url('https://cdn.pixabay.com/photo/2015/05/26/09/37/paypal-784404_1280.png');
        }
    </style>


    <div class="content checkout-pd">
        <div class="main-content">
            <div class="container my-[3rem]">
                <div class="grid grid-cols-12 gap-6 mt-6">
                    <div class="xl:col-span-12 col-span-12 order-mobile1">
                        <div class="box">
                            <div class="box-body">
                                <div class="team-header">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <div class="h5 font-semibold mb-0">Checkout</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0  product-checkout">
                                    <nav class="md:flex justify-evenly !border-b !border-dashed border-defaultborder dark:border-defaultborder/10"
                                        aria-label="Tabs">
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{ route('user.fpay', ['id' => encrypt($id_on)]) }}"
                                            style="pointer-events: none" id="order-tab" data-hs-tab="#order-tab-pane"
                                            aria-controls="order-tab-pane">
                                            <i
                                                class="bi bi-patch-check me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Verification
                                        </a>
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{ route('user.fpay1', ['id' => encrypt($id_on)]) }}" id="order-tab"
                                            data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="bi bi-file-person me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Personal
                                            Details
                                        </a>
                                        <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active"
                                            href="{{ route('user.fpay2', ['id' => encrypt($id_on)]) }}" id="order-tab"
                                            data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                            <i
                                                class="ri-bank-card-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Payment
                                        </a>
                                        <a class="w-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary"
                                            href="{{ route('user.fpay3', ['id' => encrypt($id_on)]) }}"
                                            style="pointer-events: none" aria-controls="delivery-tab-pane">
                                            <i
                                                class="ri-checkbox-circle-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full bg-light !block"></i>Confirmation
                                        </a>
                                    </nav>
                                    <form id="payment-form">
                                        <div class="tab-content">
                                            <!-- Default tab content: Verification -->
                                            <div class="tab-pane text-defaulttextcolor dark:!text-defaulttextcolor/70 !border-0 !p-0"
                                                id="order-tab-pane" aria-labelledby="order-tab">
                                                <div class="p-4 text-defaulttextcolor dark:!text-defaulttextcolor/70">
                                                    <p
                                                        class="mb-1 font-semibold text-[#8c9097] dark:text-white/50 opacity-[0.5] text-[1.25rem]">
                                                        03</p>
                                                    <div
                                                        class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                        <div>Payment Details :</div>
                                                    </div>
                                                    <div class="grid grid-cols-12 sm:gap-6">
                                                        <div class="xl:col-span-12 col-span-12">

                                                            <div
                                                                class="box border dark:border-defaultborder/10 !shadow-none mb-4">
                                                                <div class="box-header">
                                                                    <div class="box-title">
                                                                        Payment Methods
                                                                    </div>
                                                                </div>
                                                                <div class="box-body">
                                                                    <div class="mb-4 sm:flex block " role="group"
                                                                        aria-label="Basic radio toggle button group">
                                                                        <input type="radio" class="btn-check "
                                                                            name="btnradio" id="btnradio1" checked>
                                                                        <label
                                                                            class="w-full hs-tab-active:font-semibold ti-btn ti-btn-outline-light !text-defaulttextcolor sm:!border-e-0 dark:!text-defaulttextcolor/70 dark:!border-defaultborder/10 hover:!bg-light !rounded-e-none active"
                                                                            id="icon-item-1" data-hs-tab="#icon-1"
                                                                            aria-controls="icon-1">Credit/Debit
                                                                            Card</label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="btnradio" id="btnradio2">
                                                                        <label
                                                                            class="w-full hs-tab-active:font-semibold ti-btn ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/70 sm:!border-e-0 dark:!border-defaultborder/10 hover:!bg-light sm:mt-0 mt-1 !rounded-none"
                                                                            id="icon-item-2" data-hs-tab="#icon-2"
                                                                            aria-controls="icon-2">PayPal</label>
                                                                        <input type="radio" class="btn-check"
                                                                            name="btnradio" id="btnradio3">
                                                                        <label
                                                                            class="w-full hs-tab-active:font-semibold ti-btn ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:!border-defaultborder/70 hover:!bg-light !rounded-s-none sm:mt-0 mt-1"
                                                                            id="icon-item-3" data-hs-tab="#icon-3"
                                                                            aria-controls="icon-3">Googlepay</label>
                                                                    </div>

                                                                    <div class="mt-3">
                                                                        <div id="icon-1" role="tabpanel"
                                                                            aria-labelledby="icon-item-1">
                                                                            <div class="grid grid-cols-12 gap-4">

                                                                                <input type="text"
                                                                                    class="form-control w-full !rounded-md"
                                                                                    id="product-id"
                                                                                    value="{{ encrypt($id_on) }}" hidden>

                                                                                <div class="xl:col-span-12 col-span-12">
                                                                                    <label for="payment-card-number"
                                                                                        class="form-label">Card
                                                                                        Number</label>
                                                                                    <div id="card-element"
                                                                                        class="form-control w-full !rounded-md"
                                                                                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                                                                    </div>
                                                                                    <img id="card-brand-icon" src=""
                                                                                        alt="Card Brand"
                                                                                        style="width: 40px; height: auto; margin-left: 10px; display: none;" />
                                                                                </div>
                                                                                <div class="xl:col-span-6 col-span-12">
                                                                                    <label for="card-expiry-element"
                                                                                        style="margin-top: 15px; display: block;">Expiration
                                                                                        Date</label>
                                                                                    <div id="card-expiry-element"
                                                                                        class="StripeElement"
                                                                                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="xl:col-span-6 col-span-12">
                                                                                    <label for="card-cvc-element"
                                                                                        style="margin-top: 15px; display: block;">CVC</label>
                                                                                    <div id="card-cvc-element"
                                                                                        class="StripeElement"
                                                                                        style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="xl:col-span-6 col-span-12">
                                                                                    <div id="card-errors" role="alert"
                                                                                        style="color: red; margin-top: 10px;">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="xl:col-span-12 col-span-12">
                                                                                    <div
                                                                                        class="form-check !flex items-center gap-2 !ps-0">
                                                                                        <input
                                                                                            class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success"
                                                                                            type="checkbox" value=""
                                                                                            id="payment-card-save" checked>
                                                                                        <label class="form-check-label"
                                                                                            for="payment-card-save">
                                                                                            Save this card
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" col-span-12"
                                                                                    style="margin: auto;">
                                                                                    <button type="button"
                                                                                        class="ti-btn ti-btn-success m-1"
                                                                                        id="continue-payment-trigger"><span
                                                                                            id="otp-spinner"
                                                                                            class="spinner-custom"
                                                                                            role="status"
                                                                                            aria-hidden="true"
                                                                                            style="display:none;"></span>Continue
                                                                                        Payment<i
                                                                                            class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="icon-2" class="hidden"
                                                                            role="tabpanel" aria-labelledby="icon-item-2">
                                                                            <div>
                                                                                <center><a
                                                                                        href="{{ route('processTransaction') }}"
                                                                                        class="paypal-btn"
                                                                                        id="paypal-button-container"></a>
                                                                            </div>
                                                                            </center>

                                                                        </div>
                                                                        <div id="icon-3" class="hidden"
                                                                            role="tabpanel" aria-labelledby="icon-item-3">
                                                                            <center> <button id="google-pay-button"
                                                                                    class="google-pay"></button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-4 border-t border-dashed dark:border-defaultborder/10 sm:flex justify-between">
                        <button type="button" class="ti-btn ti-btn-danger m-1" id="back-personal-trigger"><i
                                class="ri-user-3-line me-2 align-middle inline-block"></i>Back To
                            Personal Info</button>

                    </div>
                </div>
            </div>
            </form>


        </div>
    </div>
    </div>



    @include('components.plan-card', ['plan' => $plan])


    </div>
    <!--End::row-1 -->
    </div>
    </div>
    </div>
    </div>

    st

    <script>
        const base64url = (str) => btoa(str).replace(/\+/g, '-').replace(/\//g, '_').replace(/=+$/, '');
        const paymentDataRequest = {
            apiVersion: 2,
            apiVersionMinor: 0,
            allowedPaymentMethods: [{
                type: 'CARD',
                parameters: {
                    allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
                    allowedCardNetworks: ['VISA', 'MASTERCARD']
                },
                tokenizationSpecification: {
                    type: 'PAYMENT_GATEWAY',
                    parameters: {
                        gateway: 'stripe',
                        gatewayMerchantId: 'BCR2DN4T6PR433DV'
                    }
                }
            }],
            merchantInfo: {
                merchantId: 'BCR2DN4T6PR433DV',
                merchantName: 'ttbtest'
            },
            transactionInfo: {
                totalPriceStatus: 'FINAL',
                totalPriceLabel: 'Total',
                totalPrice: '50.00',
                currencyCode: 'INR',
                countryCode: 'IN'
            }
        };

        const paymentsClient = new google.payments.api.PaymentsClient({
            environment: 'TEST'
        });

        document.getElementById('google-pay-button').addEventListener('click', () => {
            const paymentDataRequestWithParameters = Object.assign({}, paymentDataRequest);
            paymentDataRequestWithParameters.transactionInfo.totalPrice = '50.00';

            paymentsClient.loadPaymentData(paymentDataRequestWithParameters)
                .then((paymentData) => {
                    // Handle the successful payment response
                    console.log(paymentData);
                })
                .catch((error) => {
                    // Handle errors
                    console.error(error);
                });
        });
    </script>

    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD&disable-funding=card&intent=authorize"></script>
    {{-- <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                layout: 'vertical',
                color: 'gold',
                shape: 'pill',
                label: 'pay',
            }

        }).render('#paypal-button-container');
    </script> --}}
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        $(document).ready(function() {
            var stripe = Stripe('{{ env('STRIPE_KEY') }}');
            var elements = stripe.elements();

            // Custom styling for the Stripe elements
            var style = {
                base: {
                    fontSize: '16px',
                    color: '#32325d',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create the card number, CVC, and expiry elements
            var cardNumber = elements.create('cardNumber', {
                style: style
            });
            var cardExpiry = elements.create('cardExpiry', {
                style: style
            });
            var cardCvc = elements.create('cardCvc', {
                style: style
            });

            // Mount the elements in their respective containers
            cardNumber.mount('#card-element');
            cardExpiry.mount('#card-expiry-element');
            cardCvc.mount('#card-cvc-element');

            $('#continue-payment-trigger').on('click', function() {
                var prod_id = $('#product-id').val();
                $('#otp-spinner').show();
                stripe.createToken(cardNumber).then(function(result) {
                    if (result.error) {
                        // Show error in the form
                        $('#card-errors').text(result.error.message);
                    } else {
                        // Send the token to your server
                        $.ajax({
                            url: '{{ route('save.stripe_checkout_data') }}',
                            type: 'POST',
                            data: {
                                token: result.token.id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                $('#otp-spinner').hide();
                                // alert(response.status);
                                window.location.href =
                                    '{{ route('user.fpay3', ':prod_id') }}'.replace(
                                        ':prod_id', prod_id);
                            },
                            error: function(xhr) {
                                alert(xhr.responseJSON.message); // Handle errors
                            }
                        });
                    }
                });
            });
        });
    </script>









@endsection
