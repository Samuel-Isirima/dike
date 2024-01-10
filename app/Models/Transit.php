<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transit extends Model
{
    use HasFactory;

    public $mode; //Air, water, etc
    public $date_arrived;
    public $date_sent;
    public $depature_city;
    public $depature_state;
    public $depature_country;
    public $arrival_city;
    public $arrival_state;
    public $arrival_country;
    public $status;         //On hold, in transit, etc
    public $description;
    public $title;
}
