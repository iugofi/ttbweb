<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Newscomment extends Model
{
    protected $table = 'newscomment';

    use HasFactory,SoftDeletes;
}
