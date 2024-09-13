<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\AdminDetail;


class AdminRegisterController extends Controller
{
    public function showRegisterAdminForm()
    {
        return view('superadmin.register_admin');
    }

  


    public function registerAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'pincode' => 'required|string|max:255',
            'apartment_name' => 'required|string|max:255',
            'apartment_purpose' => 'required|string|in:Industry,Home,Apartment',
            'apartment_address' => 'required|string|max:255',
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
            'type' => 1, 
        ]);
    
        // Store the resident details
        AdminDetail::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'pincode' => $request->pincode,
            'apartment_name' => $request->apartment_name,
            'apartment_purpose' => $request->apartment_purpose,
            'apartment_address' => $request->apartment_address,
        ]);
    
        return redirect()->route('superadmin.home')->with('status', 'Admin registered successfully.');
    }
    

}
