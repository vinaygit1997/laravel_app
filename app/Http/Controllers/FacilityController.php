<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    // Show the list of facilities
    public function index()
    {
        $facilities = Facilities::all(); // Fetch all records from the facilities table
        return view('admin.facilities.view-facilities', compact('facilities'));
    }

    // Show the facility creation form
    public function create()
    {
        return view('admin.facilities.create');
    }

    // Handle the form submission and insert facility data
    public function store(Request $request)
    {
        $request->validate([
            'facility_name' => 'required|string|max:255',
            'time_slot' => 'required|date_format:H:i', // Validating time in HH:MM format
            'charge_per_day' => 'required|numeric',
            'cancel_days' => 'required|numeric',
        ]);
    
        // Append ":00" to make it HH:MM:SS format
        $time_slot = $request->time_slot . ':00';
    
        Facilities::create([
            'facility_name' => $request->facility_name,
            'time_slot' => $time_slot, // Now in HH:MM:SS format
            'charge_per_day' => $request->charge_per_day,
            'cancel_days' => $request->cancel_days,
        ]);
    
        return redirect()->route('admin.facilities.index')->with('success', 'Facility added successfully');
    }
    
  
  
    // Show the facility edit form
    public function edit($id)
    {
        $facility = Facilities::findOrFail($id);
        return view('admin.facilities.edit', compact('facility'));
    }

    // Handle the facility update
    public function update(Request $request, $id)
{
    $request->validate([
        'facility_name' => 'required|string|max:255',
        'time_slot' => 'required|date_format:H:i', // Validating time in HH:MM format
        'charge_per_day' => 'required|numeric',
        'cancel_days' => 'required|numeric',
    ]);

    // Append ":00" to make it HH:MM:SS format
    $time_slot = $request->time_slot . ':00';

    $facility = Facilities::findOrFail($id);
    $facility->update([
        'facility_name' => $request->facility_name,
        'time_slot' => $time_slot, // Now in HH:MM:SS format
        'charge_per_day' => $request->charge_per_day,
        'cancel_days' => $request->cancel_days,
    ]);

    return redirect()->route('admin.facilities.index')->with('success', 'Facility updated successfully');
}


    // Handle the facility deletion
    public function destroy($id)
    {
        $facility = Facilities::findOrFail($id);
        $facility->delete();
    
        return redirect()->route('admin.facilities.index')->with('success', 'Facility deleted successfully');
    }
}
