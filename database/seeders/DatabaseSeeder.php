<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(PropertySeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(Property_optionSeeder::class);
    }
}

