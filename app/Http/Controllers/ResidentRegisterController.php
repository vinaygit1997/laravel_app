<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; // Import the Validator facade
use App\Models\User;
use App\Models\ResidentDetail;
use Illuminate\Support\Facades\Auth;

class ResidentRegisterController extends Controller
{
    // Show form for registering a new resident
    public function showRegisterResidentForm()
    {
        return view('admin.register_resident');
    }

    // Handle the resident registration process
    public function registerResident(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'flat_no' => 'required|string|max:255',
            'floor_no' => 'required|string|max:255',
            'block_no' => 'required|string|max:255',
            'flat_holder_name' => 'nullable|string|max:255',
            'aadhar_no' => 'nullable|string|max:255',
            'family_members' => 'nullable|integer',
            'vehicles' => 'nullable|integer',
            'area_sft' => 'nullable|integer',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user for the resident
        $user = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 3, // 3 for Resident
        ]);

        // Store the resident details in the ResidentDetail model
        ResidentDetail::create([
            'user_id' => $user->id,
            'admin_id' => Auth::id(),
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'flat_no' => $request->flat_no,
            'floor_no' => $request->floor_no,
            'block_no' => $request->block_no,
            'flat_holder_name' => $request->flat_holder_name,
            'aadhar_no' => $request->aadhar_no,
            'family_members' => $request->family_members,
            'vehicles' => $request->vehicles,
            'area_sft' => $request->area_sft,
        ]);

        // Redirect back to the registration form with success message
        return redirect()->route('admin.register.resident.form')->with('status', 'Resident registered successfully.');
    }

    // Show list of residents
    public function viewResidents()
    {
        // Fetch residents with pagination
        $residents = ResidentDetail::paginate(10); // Adjust the pagination as needed
        return view('admin.view_resident', compact('residents'));
    }
      // Show single resident details
      public function showResident($id)
      {
          // Find the resident by ID
          $resident = ResidentDetail::findOrFail($id);
          return view('admin.show_resident', compact('resident')); // Pass the resident data to the view
      }
      public function editResident($id)
{
    $resident = ResidentDetail::findOrFail($id);
    return view('admin.edit_resident', compact('resident'));
}

public function updateResident(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'mobile' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'flat_no' => 'required|string|max:255',
        'floor_no' => 'required|string|max:255',
        'block_no' => 'required|string|max:255',
        'flat_holder_name' => 'nullable|string|max:255',
        'aadhar_no' => 'nullable|string|max:255',
        'family_members' => 'nullable|integer',
        'vehicles' => 'nullable|integer',
        'area_sft' => 'nullable|integer',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $resident = ResidentDetail::findOrFail($id);
    $resident->update($request->all());

    return redirect()->route('admin.view.residents')->with('status', 'Resident updated successfully.');
}

}
