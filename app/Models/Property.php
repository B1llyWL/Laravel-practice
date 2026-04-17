<?php

namespace App\Models;

use Database\Seeders\PropertySeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function options()
    {
        return $this->hasMany(PorpertyOption::class);
    }

    public function photos()
    {
        return $this->hasMany(PropertyPhoto::class);
    }
}
