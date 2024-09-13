<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class HelpDeskController extends Controller
// {
//     public function index()
//     {
//         return view('resident/helpdesk.index'); 
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import your models if necessary
// use App\Models\OpenRequest;
// use App\Models\ResolvedRequest;

class HelpDeskController extends Controller
{
    public function index()
    {
        // Fetch Open and Resolved Requests from the database (assuming you have the models)
        // $openRequests = OpenRequest::all();
        // $resolvedRequests = ResolvedRequest::all();

        // For demo purposes, mock up some data if models are not set up yet
        $openRequests = [
            (object)[
                'id' => 'C200',
                'title' => 'Fix Leaking Tap',
                'user_name' => 'Alice Smith',
                'apartment' => 'F 1001',
                'description' => 'The tap in the kitchen is leaking and needs immediate attention.',
                'days_open' => 2,
                'created_at' => now()->subDays(2)
            ],
            (object)[
                'id' => 'C201',
                'title' => 'Air Conditioner Repair',
                'user_name' => 'Bob Johnson',
                'apartment' => 'G 2020',
                'description' => 'The air conditioner in the living room is not working.',
                'days_open' => 1,
                'created_at' => now()->subDay()
            ]
        ];

        $resolvedRequests = [
            (object)[
                'id' => 'C160',
                'title' => 'Maintenance Completed',
                'user_name' => 'John Doe',
                'apartment' => 'A 1010',
                'description' => 'Fixed the lighting issue in the main hallway.',
                'resolved_days_ago' => 15,
                'created_at' => now()->subDays(16),
                'resolved_at' => now()->subDays(15)
            ],
            (object)[
                'id' => 'C161',
                'title' => 'Plumbing Repair',
                'user_name' => 'Sarah Lee',
                'apartment' => 'B 0202',
                'description' => 'Fixed the broken pipe in the basement.',
                'resolved_days_ago' => 20,
                'created_at' => now()->subDays(22),
                'resolved_at' => now()->subDays(20)
            ]
        ];

        // Pass the data to the view
        return view('resident/helpdesk.index', compact('openRequests', 'resolvedRequests'));
    }
}

