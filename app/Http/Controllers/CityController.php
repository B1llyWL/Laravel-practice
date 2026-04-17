<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return City::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country_id' => 'required|exists:countries,id'
        ]);

        return City::create($request->all());
    }

    public function show(City $city)
    {
        return $city;
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->only(['name', 'country_id']));
        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json(['deleted' => true]);
    }
}
