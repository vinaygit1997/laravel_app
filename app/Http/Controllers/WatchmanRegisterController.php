<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\WatchmanDetail;
use Illuminate\Support\Facades\Auth; 

class WatchmanRegisterController extends Controller
{
    public function showRegisterWatchmanForm()
    {
        return view('admin.register_watchman');
    }

 


    public function registerWatchman(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'qualifiacation' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'aadhar_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
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
            'type' => 4, 
        ]);

        // Store the resident details
        WatchmanDetail::create([
            'user_id' => $user->id,
            'admin_id' => Auth::id(),
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'qualifiacation' => $request->qualifiacation,
            'experience' => $request->experience,
            'aadhar_no' => $request->aadhar_no,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.home')->with('status', 'Manager registered successfully.');
    }
}
