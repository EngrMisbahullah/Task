<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return response()->json($cities);
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->name;
        $city->country_id = $request->country_id;
        $city->save();

        return response()->json($city);
    }

    public function show(City $city)
    {
        return response()->json($city);
    }

    public function update(Request $request, City $city)
    {
        $city->name = $request->name;
        $city->country_id = $request->country_id;
        $city->save();

        return response()->json($city);
    }

    public function destroy(City $city)
    {
        $city->delete();

        return response()->json(['message' => 'City deleted successfully']);
    }
}
