<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMail extends Model
{
    protected $table = 'Mail';
    protected $fillable = [
        'mail_category',
        'mail_body',
        'status',
    ];
    use HasFactory;
}
