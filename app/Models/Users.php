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
    
    public function getProfileCompletionPercentage()
{
    $totalFields = 6;
    $filledFields = 0;

    $fields = ['firstname', 'lastname', 'profile', 'email', 'address', 'phone'];

    foreach ($fields as $field) {
        if (!empty($this->$field)) {
            $filledFields++;
        }
    }

    return ($filledFields / $totalFields) * 100;
}
}
