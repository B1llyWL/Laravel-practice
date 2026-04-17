<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Убедимся, что в таблице countries есть нужные записи
        $countries = [
            ['name' => 'Россия', 'code' => 'RU'],
            ['name' => 'США', 'code' => 'US'],
            ['name' => 'Франция', 'code' => 'FR'],
            ['name' => 'Италия', 'code' => 'IT'],
            ['name' => 'Испания', 'code' => 'ES'],
        ];

        foreach ($countries as $country) {
            DB::table('countries')->updateOrInsert(
                ['code' => $country['code']],
                [
                    'name' => $country['name'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }

        // Получаем ID стран для последующей привязки городов
        $ruId = DB::table('countries')->where('code', 'RU')->value('id');
        $usId = DB::table('countries')->where('code', 'US')->value('id');
        $frId = DB::table('countries')->where('code', 'FR')->value('id');
        $itId = DB::table('countries')->where('code', 'IT')->value('id');
        $esId = DB::table('countries')->where('code', 'ES')->value('id');

        // Массив городов с привязкой к странам
        $cities = [
            ['name' => 'Москва', 'country_id' => $ruId],
            ['name' => 'Санкт-Петербург', 'country_id' => $ruId],
            ['name' => 'Казань', 'country_id' => $ruId],
            ['name' => 'Екатеринбург', 'country_id' => $ruId],
            ['name' => 'Сочи', 'country_id' => $ruId],
            ['name' => 'Нью-Йорк', 'country_id' => $usId],
            ['name' => 'Лос-Анджелес', 'country_id' => $usId],
            ['name' => 'Париж', 'country_id' => $frId],
            ['name' => 'Рим', 'country_id' => $itId],
            ['name' => 'Барселона', 'country_id' => $esId],
        ];

        // Добавляем города с временными метками
        foreach ($cities as $city) {
            DB::table('cities')->updateOrInsert(
                ['name' => $city['name'], 'country_id' => $city['country_id']],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
}}}
