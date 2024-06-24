<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    protected $table = 'blogcomment';
    protected $fillable = [
        'status',
  
    ];

    use HasFactory,SoftDeletes;
}
