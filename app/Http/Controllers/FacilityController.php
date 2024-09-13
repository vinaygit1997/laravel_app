<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    // Show the facility booking form
    public function index()
    {
        return view('resident.facilities.index'); // Corrected blade view path
    }

    // Handle the form submission and check availability
    public function checkAvailability(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'facility' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'bookedFor' => 'required|string',
            'communityPurpose' => 'required|string'
        ]);

        // Process the request here, for example, check if the facility is available.

        return redirect()->route('resident.facilities.index')->with('status', 'Facility is available!');
    }

    // Show booking history
    public function bookingHistory()
    {
        // Get the user's booking history from the database
        
        return view('resident.facilities.booking-history'); // Corrected blade view path
    }
}
