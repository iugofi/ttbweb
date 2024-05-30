<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    protected $table = 'Visitor';
    protected $fillable = [
        'ip_address'

    ];
    use HasFactory;
}
