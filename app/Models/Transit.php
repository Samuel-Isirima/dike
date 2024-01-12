<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transit extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'mode',
        'date_arrived',
        'date_sent',
        'depature_city',
        'depature_state',
        'depature_country',
        'arrival_city',
        'arrival_state',
        'arrival_country',
        'status',
        'description',
        'title',
    ];
}
