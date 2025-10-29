<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        // 1. Get ONLY the popular trips for the "Featured" carousel.
        $popularTrips = Trip::where('is_popular', true)->get();

        // 2. Get ALL trips for the main grid.
        $allTrips = Trip::orderBy('name', 'asc')->get(); // Getting all trips, ordered by name

        // 3. Pass both variables to the view.
        return view('trips.index', [
            'popularTrips' => $popularTrips,
            'allTrips' => $allTrips
        ]);
    }
}