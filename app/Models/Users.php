<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Users extends Model
{
    protected $table = 'usersall';
    protected $fillable = [
        'password',
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'status',
        'otp',
        'profile',
        'google_id',
        'google_token',
        'google_refresh_token',
        'provider',
        'activation_key',
        'reset_tokens',



    ];
    use HasFactory,SoftDeletes;
}
