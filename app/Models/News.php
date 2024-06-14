<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'meta_title',
        'canonical_url',
        'meta_keyword',
        'meta_desc',
        'status',
       

       
    ];

    use HasFactory,SoftDeletes;
}
