<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return Country::all();
    }

    public  function store(Request $request){
        return Country:: create($request->all());
    }

    public function show(Country $country)
    {
        return $country;
    }
    public function  update(Country $country, Request $request)
    {
        $country->update($request->only(['name']));
        return $country;
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return [
            'deleted' => true
        ];
    }
}
