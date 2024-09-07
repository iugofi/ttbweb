<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment1 extends Model
{
    protected $table = 'payments1';
    protected $fillable = [
        'id',
        'description',
        'price',
        'discount',
        'coupons',
        'product_id',
        'email',
        'firstname',
        'lastname',
        'phoneno',
        'pincode',
        'city',
        'state',
        'country',
        'address',
        'same_as_shipping',
        'user_id',
        'payment_method',
        'payment_status',
        'transaction_id',
        'payment_time',
    ];
    use HasFactory;
}
