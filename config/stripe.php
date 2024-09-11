<?php
use Illuminate\Support\Facades\DB;
$stripeKeys = DB::table('api_keys')->where('service_name', 'stripe')->first();
return [
    'stripe_pk' => $stripeKeys ? $stripeKeys->public_key : env('STRIPE_KEY'),
    'stripe_sk' => $stripeKeys ? $stripeKeys->secret_key : env('STRIPE_SECRET'),
];


