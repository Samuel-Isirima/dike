<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_code',
        'title',
        'description',
        'status',
        'mode',
        'sender_name',
        'sender_address',
        'sender_city',
        'sender_state',
        'sender_country',
        'sender_phone',
        'sender_email',
        'recipient_name',
        'recipient_address',
        'recipient_city',
        'recipient_state',
        'recipient_country',
        'recipient_phone',
        'type',
        'net_weight',
        'gross_weight',
        'quantity',
    ];

}