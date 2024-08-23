<!DOCTYPE html>
<html>
<head>
    <title>Subscription Renewal Reminder</title>
</head>
<body>
    <p>Dear User,</p>
    <p>Your subscription for product ID {{ $reminder->product_id }} is expiring on {{ $reminder->key_expirey_date }}.</p>
    <p>Please renew your subscription to continue enjoying our services.</p>
    <p>Thank you!</p>
</body>
</html>
