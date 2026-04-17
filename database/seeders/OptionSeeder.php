<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OptionSeeder extends Seeder
{
    /**
     * Заполнение таблицы options тестовыми данными.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            [
                'name'        => 'Ранний заезд',
                'price'       => 500.00,
                'type'        => 'one_time',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Поздний выезд',
                'price'       => 1000.00,
                'type'        => 'one_time',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Ежедневная уборка',
                'price'       => 200.00,
                'type'        => 'daily',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Завтрак',
                'price'       => 200.00,
                'type'        => 'daily_per_guest',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Детская кроватка',
                'price'       => 300.00,
                'type'        => 'daily',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Трансфер из аэропорта',
                'price'       => 1500.00,
                'type'        => 'one_time',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Аренда велосипеда',
                'price'       => 250.00,
                'type'        => 'daily',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
        ];

        DB::table('options')->insert($options);
    }
}
