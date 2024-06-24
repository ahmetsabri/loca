<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainCategories = [
            [
                'name' => [
                    'tr' => 'arsa',
                    'en' => 'land',
                    'ru' => 'участок',
                ],
                'sub_categories' => [
                    ['name' => [
                        'tr' => 'kiralık',
                        'en' => 'for rent',
                        'ru' => 'сдается в аренду',
                    ],
                    ],
                ],
            ],
            [
                'name' => [
                    'tr' => 'bina',
                    'en' => 'building',
                    'ru' => 'здание',
                ],
                'sub_categories' => [
                    ['name' => [
                        'tr' => 'kiralık',
                        'en' => 'for rent',
                        'ru' => 'сдается в аренду',
                    ],
                    ],
                ],
            ],
            [
                'name' => [
                    'tr' => 'konut',
                    'en' => 'house',
                    'ru' => 'жилье',

                ],
                'sub_categories' => [
                    ['name' => [
                        'tr' => 'kiralık',
                        'en' => 'for rent',
                        'ru' => 'сдается в аренду',
                    ],
                    ],
                ],
            ],
            [
                'name' => [
                    'tr' => 'İş Yeri',
                    'en' => 'workplace',
                    'ru' => 'Рабочее место',
                ],
                'sub_categories' => [
                    ['name' => [
                        'tr' => 'kiralık',
                        'en' => 'for rent',
                        'ru' => 'сдается в аренду',
                    ],
                    ],
                ],
            ],

            [
                'name' => [
                    'tr' => 'devre mülk',
                    'en' => 'timeshare',
                    'ru' => 'Таймшер',
                ],
                'sub_categories' => [
                    [
                        'name' => [
                            'tr' => 'kiralık',
                            'en' => 'for rent',
                            'ru' => 'сдается в аренду',
                        ],
                    ],
                ],
            ],
        ];

        foreach ($mainCategories as $mainCategory) {
            $mainData = Arr::except($mainCategory, 'sub_categories');
            $category = Category::create($mainData + ['created_by_system' => true]);
            Category::create(['parent_id' => $category->id] + Arr::only($mainCategory, 'sub_categories')['sub_categories'][0]);
        }
    }
}
