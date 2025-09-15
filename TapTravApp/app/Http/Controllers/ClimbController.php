<?php

namespace App\Http\Controllers;

use App\Models\Climb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClimbController extends Controller
{
    // Show gallery (only user's climbs)
 public function climb()
{
    $climbs = Climb::latest()
        ->get();

    return view('frontend.climb-gallery', compact('climbs'));
}

    // Store new climb
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|max:100',
            'difficulty'  => 'required|max:50',
            'address'     => 'required|max:150',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $path = $request->file('image')->store('climbs', 'public');

        Climb::create([
            'user_id'     => Auth::id(),
            'title'       => $request->title,
            'difficulty'  => $request->difficulty,
            'address'     => $request->address,
            'description' => $request->description,
            'image_url'   => $path,
        ]);

        return redirect()->route('climbs.gallery')->with('success', 'Climb added successfully!');
    }

    // Update climb
    public function update(Request $request, Climb $climb)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'difficulty' => 'required|string',
        'address' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Replace Image IF New Uploaded
    if ($request->hasFile('image')) {
        if ($climb->image_url && Storage::exists('public/' . $climb->image_url)) {
            Storage::delete('public/' . $climb->image_url);
        }

        $climb->image_url = $request->file('image')->store('climbs', 'public');
    }

    // Update climb fields
    $climb->title = $request->title;
    $climb->difficulty = $request->difficulty;
    $climb->address = $request->address;
    $climb->description = $request->description;

    $climb->save();

    return redirect()
        ->route('climbs.gallery')
        ->with('success', 'Climb updated successfully!');
    
}

  // Delete climb
public function destroy(Climb $climb)
{
    if ($climb->user_id !== Auth::id()) {
        return redirect()->route('climbs.gallery')->with('error', 'Unauthorized action.');
    }

    if ($climb->image_url && Storage::exists('public/' . $climb->image_url)) {
        Storage::delete('public/' . $climb->image_url);
    }

    $climb->delete();

    return redirect()->route('climbs.gallery')->with('success', 'Climb deleted successfully!');
}


}
