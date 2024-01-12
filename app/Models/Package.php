<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_code',
        'type',
        'net_weight',
        'gross_weight',
        'sender_full_name',
        'sender_country',
        'sender_state',
        'sender_city',
        'sender_address',
        'receiver_full_name',
        'receiver_country',
        'receiver_state',
        'receiver_city',
        'receiver_address',
        'status',
        'description',
        'title',
    ];

}