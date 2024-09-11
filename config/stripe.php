<?php
use Illuminate\Support\Facades\DB;
$stripeKeys = DB::table('api_keys')->where('service_name', 'stripe')->first();
return [
    'stripe_pk' => $stripeKeys ? $stripeKeys->key_name : env('STRIPE_KEY'),
    'stripe_sk' => $stripeKeys ? $stripeKeys->key_value : env('STRIPE_SECRET'),
];


