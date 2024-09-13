<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExpenseController extends Controller
{
    public function create()
{
    return view('admin.expenses.create');  // Correct view path for create.blade.php
}

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'description' => 'nullable|string',
            'amount' => 'required|numeric',
            'paid_date' => 'required|date',
            'month' => 'required|string',
            'file' => 'nullable|file|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('expenses');
        }

        Expense::create([
            'category' => $request->category,
            'description' => $request->description,
            'amount' => $request->amount,
            'paid_date' => $request->paid_date,
            'month' => $request->month,
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Expense added successfully');
    }
   public function index()
{
    $expenses = Expense::all();  // Retrieve all expenses from the database
    return view('admin.expenses.index', compact('expenses'));  // Correct view path for index.blade.php
}


}
