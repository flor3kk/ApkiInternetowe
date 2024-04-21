<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function index()
    {

        $trips = Trip::all();

        return view('trips.index', compact('trips'));
    }


    public function show($id)
    {

        $trip = Trip::find($id);


        if (!$trip) {
            abort(404);
        }

        return view('trips.show', compact('trip'));
    }
}
