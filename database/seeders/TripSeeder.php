<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //public function run(): void
    //{
    //    $faker = \Faker\Factory::create();


    //    // Adjust the number of districts you want to generate
    //    Trip::factory(10)->create();

    //    Trip::factory()->create([
    //        'name' => 'Test User',
    //    ]);
    //    }
    public function run()
    {
        $faker = Faker::create();

        // Adjust the number of trips you want to generate
        $tripCount = 10;

        for ($i = 0; $i < $tripCount; $i++) {
            DB::table('trips')->insert([
                'name' => $faker->city,
                // You can add more fields if needed
            ]);
        }
    }
}
