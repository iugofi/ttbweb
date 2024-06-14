<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Plandetails extends Model
{
    protected $table = 'product_details';
    protected $fillable = [
        'key_type',
        'plan_id',
        'price',
        'image',
        'discount',
        'coupons',
        'is_coupons',

    ];
    use HasFactory,SoftDeletes;
}
