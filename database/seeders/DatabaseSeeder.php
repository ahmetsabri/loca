<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(['email' => 'admin@mail.com', 'name' => 'Admin']);
        $this->call([
            CategorySeeder::class,
            // InfoSeeder::class,
            CountrySeeder::class,
        ]);
    }
}
