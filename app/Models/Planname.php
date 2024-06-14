<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Planname extends Model
{
    protected $table = 'planname';
    protected $fillable = [
        'plan_id',
        'name',
    ];

    use HasFactory,SoftDeletes;
}
