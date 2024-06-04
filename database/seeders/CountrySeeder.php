<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\District;
use App\Models\Province;
use App\Models\Town;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country = Country::firstOrCreate(['name' => 'Türkiye']);

        $data = json_decode(file_get_contents(public_path('assets/data.json')), 1);

        foreach ($data as $il) {
            $prov = Province::createOrFirst([
                'country_id' => $country->id,
                'name' => $il['name'],
            ]);

            foreach ($il['counties'] as $county) {
                $town = Town::createOrFirst([
                    'province_id' => $prov->id,
                    'name' => $county['name'],
                ]);

                foreach ($county['districts'] as $mahalle) {
                    foreach ($mahalle['neighborhoods'] as $m) {
                        District::createOrFirst([
                            'town_id' => $town->id,
                            'name' => $m['name'],
                        ]);
                    }
                }
            }
        }
    }
}
