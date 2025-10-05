<?php

namespace App\Http\Controllers;

use App\Models\Planner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlannerController extends Controller
{
    // Get all trips for the logged-in user
    public function index()
    {
        return response()->json(
            Planner::where('user_id', Auth::id())->latest()->get()
        );
    }

    // Store a new trip
    public function store(Request $request)
    {
        $trip = Planner::create([
            'user_id'     => Auth::id(),
            'destination'=> $request->destination,
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date,
            'companions' => $request->companions,
            'gear'       => $request->gear,
            'notes'      => $request->notes,
        ]);

        return response()->json($trip, 201);
    }

    // Show details of a trip
    public function show($id)
    {
        $trip = Planner::where('user_id', Auth::id())->findOrFail($id);
        return response()->json($trip);
    }

    // Delete a trip
    public function destroy($id)
    {
        $trip = Planner::where('user_id', Auth::id())->findOrFail($id);
        $trip->delete();
        return response()->json(['message' => 'Trip deleted']);
    }

    //update function
    public function update(Request $request, $id)
{
    $trip = Planner::where('user_id', Auth::id())->findOrFail($id);

    $trip->update([
        'destination' => $request->destination,
        'start_date'  => $request->start_date,
        'end_date'    => $request->end_date,
        'companions'  => $request->companions,
        'gear'        => $request->gear,
        'notes'       => $request->notes,
    ]);

    return response()->json($trip);
}
}

