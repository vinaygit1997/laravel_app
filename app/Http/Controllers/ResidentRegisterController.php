<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\ResidentDetail;
use Illuminate\Support\Facades\Auth; 

class ResidentRegisterController extends Controller
{
    public function showRegisterResidentForm()
    {
        return view('admin.register_resident');
    }

    public function registerResident(Request $request)
{
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

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Create a new user
    $user = User::create([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'type' => 3, // 3 for Resident
    ]);

    // Store the resident details
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

    return redirect()->route('admin.register.resident.form')->with('status', 'Resident registered successfully.');
}

}
