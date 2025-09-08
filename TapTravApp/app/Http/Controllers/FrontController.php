<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function tripexplorer()
    {
        return view('frontend.trip-explorer');
    }
    public function tripplanner()
    {
        return view('frontend.trip-planner');
    }
    public function gearlist ()
    {
        return view('frontend.gearlist');
    }
    public function climbgallery ()
    {
        return view('frontend.climb-gallery');
    }
   
}
