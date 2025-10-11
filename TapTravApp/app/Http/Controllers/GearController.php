<?php

namespace App\Http\Controllers;

use App\Models\Gear;
use Illuminate\Http\Request;

class GearController extends Controller
{
    public function index()
    {
        $gear = Gear::where('user_id', auth()->id())->first();
        $savedGears = $gear ? $gear->items : [];

        return view('gear.index', compact('savedGears'));
    }

    public function save(Request $request)
    {
        Gear::updateOrCreate(
            ['user_id' => auth()->id()],
            ['items' => $request->input('gear', [])]
        );

        return redirect()->route('index')->with('success', 'Checklist saved!');
    }
}
