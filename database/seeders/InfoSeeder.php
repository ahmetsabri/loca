<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $infos = [

            [
                'en' => 'the age of the building',
                'ru' => 'возраст здания',
                'tr' => 'bina yaşı',
            ],
            [
                'en' => 'number of rooms',
                'ru' => 'Количество комнат',
                'tr' => 'oda sayısı',
            ],

        ];

        foreach ($infos as $info) {
            Info::create(['name' => $info, 'created_by_system' => 1]);
        }
    }
}
