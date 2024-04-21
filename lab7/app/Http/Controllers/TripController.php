<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTripRequest;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Country;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', [
            'trips' => $trips,
            'randomTrips' => $trips->random(4),
        ]);
    }
    public function show(Trip $trip)
    {
        return view('trips.show', compact('trip'));
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        $countries = Country::all();
        return view('trips.edit', compact('trip', 'countries'));
    }

    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'continent' => 'required|string|max:30',
            'period' => 'required|numeric|max:30|min:0',
            'description' => 'required|string|min:0',
            'price' => 'required|numeric|max:100000|min:0',
        ]);

        $input = $request->all();
        $trip->update($input);
        return redirect()->route('trips.index');
    }
    // public function update(UpdateTripRequest $request, Trip $trip)
    // {
    //     $input = $request->all();
    //     $trip->update($input);
    //     return redirect()->route('trips.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect()->route('trips.index');
    }
}
