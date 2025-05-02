<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123') // hashed password
        ]);
        Product::create([
                'name' => 'Mobil + Driver',
                'description' => 'Kami melayani sewa mobil dengan driver yang berpengalaman.',
                'price_per_day' => 350000.00,
                'image' => 'mobil1.png',
                'availability' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);
        Product::create([
            'name' => 'Mobil Bandara',
                'description' => 'Driver kami siap melayani antar jemput bandara hingga 24 jam.',
                'price_per_day' => 300000.00,
                'image' => 'mobil1.png',
                'availability' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);
        Product::create([
            'name' => 'Travel Car',
                'description' => 'Kami menyediakan mobil untuk kebutuhan travel ke luar kota.',
                'price_per_day' => 400000.00,
                'image' => 'mobil1.png',
                'availability' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);


        Car::create([
            'name' => 'Avanza',
            'price' => 300000,
            'image' => 'cars/avanza.jpg',
            'features' => ['AC Dingin', 'Kapasitas 7 Orang', 'BBM Irit', 'Driver Ramah'], // tanpa json_encode
            'type' => 'kecil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Car::create([
            'name' => 'Avanza',
            'price' => 310000,
            'image' => 'cars/avanza2.jpg',
            'features' => ['AC Dingin', 'Kapasitas 7 Orang', 'BBM Irit', 'Driver Ramah'], // tanpa json_encode
            'type' => 'kecil',
            'waLink'=> '6281317987754',
            'created_at' => now(),
            'updated_at' => now(),
         ]);
    }
}
