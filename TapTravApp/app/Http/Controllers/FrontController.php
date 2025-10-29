<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class FrontController extends Controller
{
    public function dashboard()
    {
        // Show only popular climbs on dashboard
        $popularClimbs = Trip::where('is_popular', true)->take(4)->get();
        return view('frontend.dashboard', compact('popularClimbs'));
    }

    public function tripexplorer()
{
    $trips = \App\Models\Trip::all();

    // If DB is empty, inject a default trip
    if ($trips->isEmpty()) {
        $defaultTrip = new \App\Models\Trip([
            'id' => 0,
            'name' => 'Mount Apo',
            'difficulty' => 'Moderate',
            'duration' => '3 Days Hike',
            'image' => 'assets/images/mtapo.jpg',
            'description' => 'The highest peak in the Philippines, offering breathtaking views and a challenging climb.',
            'is_popular' => true,
        ]);

        // Wrap it in a collection
        $trips = collect([$defaultTrip]);
    }

    return view('frontend.trip-explorer', compact('trips'));
}


    public function tripplanner()
    {
        return view('frontend.trip-planner');
    }

    public function gearlist()
    {
        return view('frontend.gearlist');
    }

    public function climbgallery()
    {
        return view('frontend.climb-gallery');
    }

    public function profile()
    {
        // Redirect to the application's default profile edit route
        return redirect()->route('profile.edit');
    }
}
