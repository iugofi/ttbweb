<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    protected $table = 'Event';
    protected $fillable = [
        'event_status',
        'event_name',
        'banner_img',
        'event_date',
        'event_handle',

    ];

    use HasFactory,SoftDeletes;
}
