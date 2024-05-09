<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
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
    
    use HasFactory;
}
