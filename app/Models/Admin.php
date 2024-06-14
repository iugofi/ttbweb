<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'email',
        'username',
        'admintype',
        'password',
        'image',
        'status', 
    ];
    use HasFactory,SoftDeletes;
}
