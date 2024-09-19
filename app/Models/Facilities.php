<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_name',
        'charge_per_hour',
        'charge_per_day',
        'cancel_days',
    ];
}

