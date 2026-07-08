<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Default normal user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Default admin user
        User::factory()->create([
            'name' => 'Admin Yabai',
            'email' => 'admin@yabaibalitour.com',
            'password' => bcrypt('password'),
        ]);

        // Seed 12 mock tours
        \App\Models\Tour::factory(12)->create();

        // Seed mock car partners
        $carPartners = [
            [
                'name' => 'Wayan Sudirta',
                'car_type' => 'Toyota Avanza',
                'capacity' => 6,
                'price' => 'IDR 550K / 10 Hours',
                'phone_number' => '+6281234567890',
                'image_url' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=800&q=80',
                'description' => 'Comfortable MPV, driver, petrol, and parking fees included. Fluent in English.',
                'is_available' => true,
                'rating' => 4.9,
            ],
            [
                'name' => 'Ketut Wijaya',
                'car_type' => 'Toyota Innova Reborn',
                'capacity' => 7,
                'price' => 'IDR 800K / 10 Hours',
                'phone_number' => '+6281234567891',
                'image_url' => 'https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?auto=format&fit=crop&w=800&q=80',
                'description' => 'Spacious and premium MPV, quiet cabin, perfect for families. Driver & petrol included.',
                'is_available' => true,
                'rating' => 4.8,
            ],
            [
                'name' => 'Made Arta',
                'car_type' => 'Suzuki APV',
                'capacity' => 6,
                'price' => 'IDR 500K / 10 Hours',
                'phone_number' => '+6281234567892',
                'image_url' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=800&q=80',
                'description' => 'Budget friendly standard MPV, cool AC, clean vehicle. Driver and petrol included.',
                'is_available' => true,
                'rating' => 4.7,
            ],
            [
                'name' => 'Nyoman Gede',
                'car_type' => 'Toyota HiAce Commuter',
                'capacity' => 15,
                'price' => 'IDR 1.2M / 10 Hours',
                'phone_number' => '+6281234567893',
                'image_url' => 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=800&q=80',
                'description' => 'Minibus for group tours, high roof, spacious legroom. Driver and petrol included.',
                'is_available' => true,
                'rating' => 4.9,
            ],
            [
                'name' => 'Kadek Putu',
                'car_type' => 'Toyota Alphard',
                'capacity' => 6,
                'price' => 'IDR 2.2M / 10 Hours',
                'phone_number' => '+6281234567894',
                'image_url' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80',
                'description' => 'Luxury MPV, captain seats, premium comfort, mineral water & tissue provided.',
                'is_available' => true,
                'rating' => 5.0,
            ],
        ];

        foreach ($carPartners as $partner) {
            \App\Models\CarPartner::create($partner);
        }
    }
}
