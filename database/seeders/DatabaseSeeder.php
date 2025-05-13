<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Travel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Event\Tracer\Tracer;

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
        Contact::create([
            'contactNumber' => '081234567890',
            'rekeningNumber' => '1234567890',
            'nasabahName' => 'John Doe',
            'waLink' => '81234567890',
            'about' => 'Kami adalah rental mobil terpercaya.',
            'email' => 'info@rentalmobil.com',
            'instagram' => '@rentalmobil',
            'address' => 'Jl. Soekarno Hatta No.123, Jakarta',
        ]);

        Category::create(['name' => 'Jakarta']);
        Category::create(['name' => 'Bogor']);
        Category::create(['name' => 'Bandung']);

        // Travel::create([
        //     'travel_category_id' => $categories['Jakarta'] ?? 1,
        //         'destination' => 'Bandung',
        //         'image' => 'travel/jakarta-bandung.jpg',
        //         'price' => 350000,
        //         'features' => json_encode(['Mobil AC', 'Driver Berpengalaman', 'Jemput di alamat']),
        //         'waLink' => '81234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        // ]);
        // Travel::create([
        //         'travel_category_id' => $categories['Jakarta'] ?? 1,
        //         'destination' => 'Yogyakarta',
        //         'image' => 'travel/jakarta-jogja.jpg',
        //         'price' => 650000,
        //         'features' => json_encode(['Mobil nyaman', 'Free air mineral', 'AC dingin']),
        //         'waLink' => '81234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        // ]);
        // Travel::create([
        //         'travel_category_id' => $categories['Bandung'] ?? 2,
        //         'destination' => 'Semarang',
        //         'image' => 'travel/bandung-semarang.jpg',
        //         'price' => 600000,
        //         'features' => json_encode(['Sopir sopan', 'Bisa request jam', 'Mobil bersih']),
        //         'waLink' => '81234567890',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        // ]);
    }
}
