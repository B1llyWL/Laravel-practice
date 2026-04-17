<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertyResource;
use App\Models\Property;
use Illuminate\Http\Request;
use function Monolog\toArray;

class PropertyController extends Controller
{
    public function index()
    {
        return PropertyResource::collection(Property::all());
    }
    public function show(property $property)
    {
        return new PropertyResource($property);
    }
}
