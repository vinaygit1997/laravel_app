<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    use HasFactory;

    // Specify the table name explicitly
    protected $table = 'facilities';

    // Define the fillable attributes
    protected $fillable = [
        'facility_name',
        'time_slot',
        'charge_per_day',
        'cancel_days',
    ];
}

