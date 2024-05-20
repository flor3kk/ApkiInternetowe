<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CountryCollection;
use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CountryCollection(Country::with('trips')->get()); // 200
    }

    // 405 method not allowed, jesli chcemy dodac kraj o specyficznym naszym wybranym id

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request) //error 422 unprocessable content
    {
        return response()->json(new CountryResource(Country::create($request->validated())), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country) //error 404 not found
    {
        return new CountryResource($country->loadMissing('trips')); // 200
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country) //error 422 unprocessable content, 404 not found
    {
        $country->update($request->validated());
        return new CountryResource($country->refresh()); // 200
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country) // jesli nie ma takiego kraju to 404,
    {
        $country->delete();
        return response()->json(null, 204);
    }
}
