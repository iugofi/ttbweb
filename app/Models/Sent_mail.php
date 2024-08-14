<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sent_mail extends Model
{
    protected $table = 'sent_mail';
    protected $fillable = [
        'email_id',
        'email_category',
        'status',
    ];
    use HasFactory;
}
