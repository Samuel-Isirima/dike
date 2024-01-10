<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public $tracking_code;
    public $type;
    public $net_weight;
    public $gross_weight;
    public $sender_full_name;
    public $sender_country;
    public $sender_state;
    public $sender_city;
    public $sender_address;
    public $recipient_full_name;
    public $recipient_address;
    public $description;
}
