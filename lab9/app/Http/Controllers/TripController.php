<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Country;
use Illuminate\Support\Facades\Gate;
use App\Services\TripService;
use Illuminate\Support\Facades\Log;

// Log::info('Showing details for trip: '.$id);
// Log::channel('stderr')->info('Showing details for trip: '.$id);

class TripController extends Controller
{

    protected $tripService;
    public function __construct(TripService $tripService)
    {
    $this->tripService = $tripService;
    }

    public function index()
    {
        // Ładowanie kolekcji wycieczek z krajami (zachłanne ładowanie)
        $trips = Trip::with('country:id,name')->get();

        // Pobranie 4 losowych wycieczek
        $randomTrips = $trips->random(4);

        return view('trips.index', [
            'trips' => $trips,
            'randomTrips' => $randomTrips,
        ]);
    }


    public function show($id)
    {
        $trip = Trip::findOrFail($id);

        $tripService = new TripService();

        $promoPrice = $tripService->calculatePromoPrice($trip->price);

        return view('trips.show', [
            'trip' => $trip,
            'promoPrice' => $promoPrice, // Przekazanie nowej ceny promocyjnej jako zmienną promoPrice
        ]);
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        return view('trips.edit', [
            'trip' => $trip,
            'countries' => Country::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        if (! Gate::allows('is-admin')) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|unique:trips,name,'.$id,
            'continent' => 'required|string',
            'period' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'img' => 'required|string',
            'country_id' => 'required|integer|exists:countries,id',
        ]);

        $trip = Trip::findOrFail($id);
        $input = $request->all();
        $trip->update($input);
        return redirect()->route('trips.index');
    }

    public function favourite(Request $request)
    {
        $request->validate(['id' => 'required|integer|exists:trips,id']);
        $id = $request->id;
        $favTrips = session('favTrips', array());

        if(in_array($id, $favTrips))
        {
            $this->arrayRemoveValue($favTrips, $id);
        }
        else {
            array_push($favTrips, $id);
        }

        session(['favTrips' => $favTrips]);

        return redirect()->route('trips.index')->withFragment('#cennik');
    }

    public function imageUpload()
    {
        return view('trips.image-upload');
    }

    public function imageUploadStore(Request $request)
    {
        $request->validate([
            'files' => 'required|max:5',
            'files.*' => 'required|mimes:jpg,jpeg|max:1000',
        ], [
            'files.required' => 'Nie wybrano plików.',
            'files.*.mimes' => 'Wymagane rozszerzenia: .jpg lub .jpeg.',
            'files.*.max' => 'Maksymalny rozmiar jednego pliku: ok. 1MB.',
        ]);

        $files = $request->file('files');

        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                Storage::putFileAs(env('UPLOAD_PATH'), $file, $file->getClientOriginalName());
            }
        }

        return redirect()->route('trips.index')->with('successMessage','Przesyłanie plików zakończone pomyślnie.');
    }


}
