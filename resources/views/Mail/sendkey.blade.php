@php
	
    // Perform the database query directly in PHP within Blade
    $paymentDetails = DB::table('payments')
        ->join('product_details', 'product_details.id', '=', 'payments.product_id')
        ->join('usersall', 'usersall.id', '=', 'payments.user_id')
        ->select('payments.*', 'product_details.*', 'usersall.*')
        ->where('payments.pay_id', $payment_intent)
        ->where('payments.product_key', $main_key)
        ->first();

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vpn Kay</title>
</head>
<body>
    @if ($paymentDetails)
    <h2>User Information</h2>
    <p>Name: {{ $paymentDetails->firstname }}</p>
    <p>Email: {{ $paymentDetails->email }}</p>
    <h2>Product Information</h2>
    <p>key type:{{$paymentDetails->key_type}}</p>
    <p>key type:{{$paymentDetails->plan_id}}</p>
  

    <h2>Payment Information</h2>
    <p>Payment ID: {{ $paymentDetails->pay_id }}</p>
    <p>Amount: {{ $paymentDetails->amount_total }}</p>
    <p>Status: {{ $paymentDetails->payment_status }}</p>

    <p>{{$main_key}}</p>
    @else
    <p>No payment details found.</p>
@endif
</body>
</html>
