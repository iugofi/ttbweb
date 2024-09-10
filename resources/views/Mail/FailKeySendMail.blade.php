<!DOCTYPE html>
<html>
<head>
    <title>Fail Key Send Mail</title>
</head>
<body>
    <h1>Key Send Failure Notification</h1>
    <p>We encountered an issue with the Key process. Here are the details:</p>

    @if($paymentDetails)
        <ul>
            <li><strong>Payment ID:</strong> {{ $paymentDetails->id }}</li>
            <li><strong>Description:</strong> {{ $paymentDetails->description }}</li>
            <li><strong>Price:</strong> {{ $paymentDetails->price }}</li>
            <li><strong>Discount:</strong> {{ $paymentDetails->discount }}</li>
            <li><strong>Coupons:</strong> {{ $paymentDetails->coupons }}</li>
            <li><strong>Email:</strong> {{ $paymentDetails->email }}</li>
            <li><strong>Name:</strong> {{ $paymentDetails->firstname }} {{ $paymentDetails->lastname }}</li>
            <li><strong>Phone:</strong> {{ $paymentDetails->phoneno }}</li>
            <li><strong>Address:</strong> {{ $paymentDetails->address }}, {{ $paymentDetails->city }}, {{ $paymentDetails->state }}, {{ $paymentDetails->country }} - {{ $paymentDetails->pincode }}</li>
            <li><strong>Payment Status:</strong> {{ $paymentDetails->payment_status }}</li>
            <li><strong>Transaction ID:</strong> {{ $paymentDetails->transaction_id }}</li>
            <li><strong>Payment Time:</strong> {{ $paymentDetails->payment_time }}</li>
        </ul>
    @else
        <p>No payment details available.</p>
    @endif

    <p>Thank you for your attention.</p>
</body>
</html>
