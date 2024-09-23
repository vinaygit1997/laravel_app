<?php

namespace App\Http\Controllers;

use App\Models\Facilities; // Adjusted to plural 'Facilities'
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    // Show the list of facilities (admin view)
    public function index()
    {
        $facilities = Facilities::all(); // Fetch all records from the 'facilities' table
        return view('admin.facilities.view-facilities', compact('facilities'));
    }


  
    
    public function bookingHistory()
    {
       
        return view('resident.facilities.booking-history');
    }

    // Show the facility creation form (admin view)
    public function create()
    {
        return view('admin.facilities.create');
    }

    // Handle the form submission and insert facility data
    public function store(Request $request)
    {
        // Validation for form inputs
        $request->validate([
            'facility_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'charge_per_day' => 'required|numeric',
            'cancel_days' => 'required|numeric',
        ]);

        // Create a new facility record in the database
        Facilities::create([
            'facility_name' => $request->facility_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'charge_per_day' => $request->charge_per_day,
            'cancel_days' => $request->cancel_days,
        ]);

        // Redirect back to the facilities list with a success message
        return redirect()->route('admin.facilities.index')->with('success', 'Facility added successfully');
    }

    // Show the facility edit form (admin view)
    public function edit($id)
    {
        $facility = Facilities::findOrFail($id); // Fetch the facility by its ID
        return view('admin.facilities.edit', compact('facility'));
    }

    // Handle the facility update
    public function update(Request $request, $id)
    {
        // Validation for form inputs
        $request->validate([
            'facility_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'charge_per_day' => 'required|numeric',
            'cancel_days' => 'required|numeric',
        ]);

        // Find the facility by ID and update it
        $facility = Facilities::findOrFail($id);
        $facility->update([
            'facility_name' => $request->facility_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'charge_per_day' => $request->charge_per_day,
            'cancel_days' => $request->cancel_days,
        ]);

        // Redirect back to the facilities list with a success message
        return redirect()->route('admin.facilities.index')->with('success', 'Facility updated successfully');
    }

    // Handle the facility deletion
    public function destroy($id)
    {
        // Find the facility by ID and delete it
        $facility = Facilities::findOrFail($id);
        $facility->delete();

        // Redirect back to the facilities list with a success message
        return redirect()->route('admin.facilities.index')->with('success', 'Facility deleted successfully');
    }

    public function showBookingForm()
    {
        // Fetch facilities from the database
        $facilities = Facilities::all(); // Use the correct model name
    
        return view('facilities.index', compact('facilities'));
    }

    public function residentIndex() {
        $facilities = Facilities::all(); // Fetch all records from the 'facilities' table
        return view('resident.facilities.index', compact('facilities')); // Pass the facilities to the view
    }
    
    public function getFacilityTimes($id)
{
    // Fetch the facility from the database by its ID
    $facility = Facilities::findOrFail($id);
    
    // Return the start and end time as a JSON response
    return response()->json([
        'start_time' => $facility->start_time,
        'end_time' => $facility->end_time
    ]);
}

}
