<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Property_optionSeeder extends Seeder
{
    /**
     * Заполнение связующей таблицы property_option.
     *
     * @return void
     */
    public function run()
    {
        // Получаем все ID объектов жилья
        $propertyIds = DB::table('properties')->pluck('id')->toArray();
        // Получаем все ID опций
        $optionIds = DB::table('options')->pluck('id')->toArray();

        if (empty($propertyIds) || empty($optionIds)) {
            $this->command->warn('Свойства или опции отсутствуют. Пропускаем заполнение property_option.');
            return;
        }

        // Создаём массив связей (каждый объект получит несколько опций)
        $pivotData = [];

        foreach ($propertyIds as $propertyId) {
            // Базовые опции, которые будут у всех: ранний заезд (id 1), поздний выезд (id 2), уборка (id 3), завтрак (id 4)
            $baseOptions = [1, 2, 3, 4];

            // Для некоторых объектов добавим дополнительные опции
            // Например, для свойства с id = 1 добавим детскую кроватку (5)
            // Для свойства с id = 2 добавим трансфер (6)
            // Для свойства с id = 3 добавим аренду велосипеда (7)
            // Остальным оставим только базовые

            $additionalOptions = [];
            switch ($propertyId) {
                case 1:
                    $additionalOptions = [5]; // детская кроватка
                    break;
                case 2:
                    $additionalOptions = [6]; // трансфер
                    break;
                case 3:
                    $additionalOptions = [7]; // велосипед
                    break;
                // Для других свойств (4,5,6) дополнительные опции не добавляем
            }

            $allOptionsForProperty = array_merge($baseOptions, $additionalOptions);

            foreach ($allOptionsForProperty as $optionId) {
                $pivotData[] = [
                    'property_id' => $propertyId,
                    'option_id'   => $optionId,
                    'created_at'  => Carbon::now(),
                    'updated_at'  => Carbon::now(),
                ];
            }
        }

        // Вставляем связи, игнорируя возможные дубликаты (на случай повторного запуска)
        DB::table('property_option')->insertOrIgnore($pivotData);
    }
}
