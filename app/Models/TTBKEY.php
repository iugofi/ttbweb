<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TTBKEY extends Model
{
    protected $table = 'ttbkey';
    protected $fillable = [
        'main_key',
        'product_id',
        'key_activation_date',
        'key_expirey_date',
        'is_key_used',
        'key_status', 
    ];
    
    use HasFactory,SoftDeletes;
}
