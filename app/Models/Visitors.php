<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Visitors extends Model
{
    protected $table = 'Visitor';
    protected $fillable = [
        'ip_address',
        'device',
        'browser'

    ];
    use HasFactory,SoftDeletes;
}
