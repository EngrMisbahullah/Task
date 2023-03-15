<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    public function store(Request $request)
    {
        $country = new Country();
        $country->name = $request->name;
        $country->code = $request->code;
        $country->save();

        return response()->json($country);
    }

    public function show(Country $country)
    {
        return response()->json($country);
    }

    public function update(Request $request, Country $country)
    {
        $country->name = $request->name;
        $country->code = $request->code;
        $country->save();

        return response()->json($country);
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return response()->json(['message' => 'Country deleted successfully']);
    }

    public function getCitiesByCountry($countryId)
    {
        $country = Country::findOrFail($countryId);
        $cities = $country->cities;
        return response()->json($cities);

    }
}
