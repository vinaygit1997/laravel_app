<?php

namespace App\Http\Controllers;

use App\Models\ResidentAccount;
use App\Models\ResidentDetail; // Import the ResidentDetail model
use Illuminate\Http\Request;

class ResidentAccountController extends Controller
{
    public function index()
{
    // Join resident_details with resident_accounts and get the necessary fields
    $residentAccounts = ResidentDetail::leftJoin('resident_accounts', 'resident_details.id', '=', 'resident_accounts.resident_id')
        ->select(
            'resident_details.*',
            'resident_accounts.id as account_id',  // Ensure you have an account ID for edit/delete
            'resident_accounts.maintenance_fee',
            'resident_accounts.amount_type',
            'resident_accounts.date',
            'resident_accounts.status'
        )
        ->get();

    return view('admin.resident_accounts.index', compact('residentAccounts'));
}



    public function create()
    {
        return view('admin.resident_accounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'resident_name' => 'required',
            'block_name' => 'required',
            'floor' => 'required|integer',
            'flat_number' => 'required',
            'flat_type' => 'required',
            'amount_per_sft' => 'required|numeric',
            'square_feet' => 'required|integer',
            'maintenance_fee' => 'required|numeric',
            'amount_type' => 'required',
            'date' => 'required|date',
            'status' => 'required|in:Paid,Due',
        ]);

        ResidentAccount::create($request->all());

        return redirect()->route('admin.resident_accounts.index')->with('success', 'Resident account created successfully.');
    }

    public function edit($id)
{
    $account = ResidentAccount::findOrFail($id);
    return view('admin.resident_accounts.edit', compact('account'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'flat_no' => 'required',
        'floor_no' => 'required',
        'block_no' => 'required',
        'name' => 'required',
        'mobile' => 'required',
        'email' => 'required|email',
        'area_sft' => 'required',
        // Add validation for other fields as needed
    ]);

    $account = ResidentAccount::findOrFail($id);
    $account->update($request->all());

    return redirect()->route('admin.resident_accounts.index')
                     ->with('success', 'Resident account updated successfully');
}



    public function destroy($id)
{
    $account = ResidentAccount::findOrFail($id);
    $account->delete();

    return redirect()->route('admin.resident_accounts.index')
                     ->with('success', 'Resident account deleted successfully');
}

}
