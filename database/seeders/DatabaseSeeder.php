<?php

namespace Database\Seeders;

use App\Models\Maestro;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Maestro::create([
                "nombre" => $faker->name(),
                "apellido" => $faker->name(),
            ]);
        }
    }
}
