<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'enrique2003junior2@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => str::random(10),
        // ]);
    }
}
