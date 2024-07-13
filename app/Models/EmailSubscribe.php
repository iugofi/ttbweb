<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailSubscribe extends Model
{
    protected $table = 'email_subscribe';
    use HasFactory,SoftDeletes;
}
