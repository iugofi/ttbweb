<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Storepick extends Model
{
    protected $table = 'storepick';
    public $timestamps = false;
    protected $fillable = [
        'STORE_ID',
        'STORE_TYPE',
        'PICK_TEXT',
        'PICK_ID',
        'STORE_INDEX_SEQUENCE',
        'PICK_TEXT_EXTEND', 
    ];

    use HasFactory,SoftDeletes;
}
