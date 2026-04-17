<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropertySeeder extends Seeder
{
    /**
     * Заполнение таблицы properties тестовыми данными.
     *
     * @return void
     */
    public function run()
    {
        // Массив с данными шести объектов жилья
        $properties = [
            [
                'name' => 'Уютная квартира в центре Москвы',
                'description' => 'Просторная квартира с современным ремонтом, рядом с метро, все удобства.',
                'price_per_night' => 5000,
                'city_id' => 1, // Москва
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Апартаменты с видом на Неву',
                'description' => 'Шикарные апартаменты в историческом центре Санкт-Петербурга, вид на реку.',
                'price_per_night' => 7000,
                'city_id' => 2, // Санкт-Петербург
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Домик в Казани с сауной',
                'description' => 'Отдельный дом с сауной и бассейном, идеально для компании.',
                'price_per_night' => 8500,
                'city_id' => 3, // Казань
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Студия возле Кремля',
                'description' => 'Небольшая студия в пешей доступности от главных достопримечательностей.',
                'price_per_night' => 4000,
                'city_id' => 1, // Москва
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Лофт в центре Екатеринбурга',
                'description' => 'Стильный лофт с панорамными окнами, отлично подходит для творческих людей.',
                'price_per_night' => 5500,
                'city_id' => 4, // Екатеринбург
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Квартира у моря в Сочи',
                'description' => 'Теплая квартира рядом с пляжем, балкон с видом на море.',
                'price_per_night' => 6500,
                'city_id' => 5, // Сочи
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Вставка записей в таблицу properties
        DB::table('properties')->insert($properties);
    }
}
