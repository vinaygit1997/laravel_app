<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ParkingSlotController extends Controller
{
    // Display the parking slots page
    public function index()
    {
        
        return view('admin.parking-slot.index');
    }

}
