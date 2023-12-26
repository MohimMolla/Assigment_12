<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Provider\PhoneNumber;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new PhoneNumber($faker));

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'address' => 'hello',
            'phone' => $faker->unique()->numberBetween(1000000000, 9999999999),
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
