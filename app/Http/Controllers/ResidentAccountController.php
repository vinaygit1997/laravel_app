<?php

namespace App\Http\Controllers;

use App\Models\ResidentAccount;
use App\Models\ResidentDetail; // Import the ResidentDetail model
use Illuminate\Http\Request;
class ResidentAccountController extends Controller
{
    // Display all resident details in a table
    public function index()
    {
        $residents = ResidentDetail::all(); // Fetch all residents
        return view('admin.resident_accounts.index', compact('residents'));
    }

    // Show form for editing a resident
    public function edit($id)
    {
        $resident = ResidentDetail::find($id); // Fetch resident by ID

        if (!$resident) {
            return redirect()->route('admin.resident.index')->with('error', 'Resident not found.');
        }

        return view('admin.resident_accounts.edit', compact('resident'));
    }

    // Update resident details
    public function update(Request $request, $id)
    {
        $resident = ResidentDetail::find($id);

        if (!$resident) {
            return redirect()->route('admin.resident.index')->with('error', 'Resident not found.');
        }

        $request->validate([
            'flat_no' => 'required|string',
            'floor_no' => 'required|integer',
            'block_no' => 'required|string',
            'flat_holder_name' => 'required|string',
            'name' => 'required|string',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'area_sft' => 'required|numeric',
        ]);

        $resident->update($request->all());

        return redirect()->route('admin.resident.index')->with('success', 'Resident details updated successfully.');
    }

    // Delete resident
    public function destroy($id)
    {
        $resident = ResidentDetail::find($id);

        if (!$resident) {
            return redirect()->route('admin.resident.index')->with('error', 'Resident not found.');
        }

        $resident->delete();

        return redirect()->route('admin.resident.index')->with('success', 'Resident deleted successfully.');
    }

   
}