<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = DB::table('countries')->get();
        $countriesCollection = [];
        foreach ($countries as $country) {
            $countriesCollection[] = [
                'id' => $country->id,
                'code' => $country->code,
                'currency' => $country->currency,
                'area' => $country->area,
                'language' => $country->language,
            ];
        }
        return response()->json($countriesCollection, 200);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $country = DB::table('countries')->find($id);

        if (!$country) {
            return response()->json(['error' => 'Country not found'], 404);
        }

        $transformedCountry = $this->transformCountry($country);

        return response()->json($transformedCountry, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:countries,name|max:50',
            'code' => 'required|string|unique:countries,code|max:3',
            'currency' => 'required|string|max:30',
            'area' => 'required|integer|min:0',
            'language' => 'required|string|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = $request->only(['name', 'code', 'currency', 'area', 'language']);

        $newId = DB::table('countries')->insertGetId($data);

        $newCountry = DB::table('countries')->find($newId);

        return response()->json($newCountry, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|string|unique:countries,name,' . $id . '|max:50',
            'code' => 'required|string|unique:countries,code,' . $id . '|max:3',
            'currency' => 'required|string|max:30',
            'area' => 'required|integer|min:0',
            'language' => 'required|string|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $data = $request->only(['name', 'code', 'currency', 'area', 'language']);

        $updated = DB::table('countries')->where('id', $id)->update($data);

        if (!$updated) {
            return response()->json(['error' => 'Country not found'], 404);
        }

        $updatedCountry = DB::table('countries')->find($id);
        $transformedCountry = $this->transformCountry($updatedCountry);

        return response()->json($transformedCountry, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $country = DB::table('countries')->find($id);

        if (!$country) {
            return response()->json(['error' => 'Country not found'], 404);
        }

        DB::table('countries')->where('id', $id)->delete();

        return response()->json(null, 204);
    }

    /**
     * Transform country object into desired format.
     */
    private function transformCountry($country)
    {
        return [
            'id' => $country->id,
            'name' => $country->name,
            'code' => $country->code,
            'currency' => $country->currency,
            'area' => $country->area,
            'language' => $country->language,
        ];
    }
}
