<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceCharge extends Model
{
    use HasFactory;

    protected $fillable = ['amount_per_sqt'];
}

