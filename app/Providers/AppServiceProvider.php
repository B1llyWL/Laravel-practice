<?php

namespace App\Providers;

use App\Http\Resources\PropertyResource;
use App\Models\Property;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function indecx()
    {
        return PropertyResource::collection(Property::all());
    }

    /**
     * Bootstrap any application services.
     */
    public function show(Property $property)
    {
        return new PropertyResource($property);
    }
}
