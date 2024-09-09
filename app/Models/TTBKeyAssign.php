<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TTBKeyAssign extends Model
{
    protected $table = 'ttb_key_assign';
    protected $fillable = [
        'payment_id',
        'main_key',
        'mail_send_status',
    ];
    use HasFactory;
}
