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

        $tours = [
            [
                'title' => 'Ubud Monkey Forest Tour',
                'description' => 'Explore the sacred monkey forest sanctuary and beautiful surrounding areas in Ubud.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Monkey-Forest-1.jpg',
                'category' => 'BALI FULL DAY TOUR',
                'location' => 'Ubud, Bali',
                'duration' => '10-12 Hours',
                'price' => 'From IDR 550K/Car',
                'tags' => ["Private Tour", "Cultural"],
                'is_popular' => true,
            ],
            [
                'title' => 'Uluwatu Sunset Dance',
                'description' => 'Witness the magical Kecak Fire Dance during sunset at the cliff-top Uluwatu Temple.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Uluwatu-Temple-1024x683.jpg',
                'category' => 'BALI FULL DAY TOUR',
                'location' => 'Uluwatu, Bali',
                'duration' => '6-8 Hours',
                'price' => 'From IDR 450K/Car',
                'tags' => ["Sunset", "Cultural"],
                'is_popular' => true,
            ],
            [
                'title' => 'Tanah Lot Sunset Tour',
                'description' => 'Visit the iconic sea temple of Tanah Lot and enjoy the breathtaking sunset views.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Tanah-Lot-1024x573.jpeg',
                'category' => 'BALI FULL DAY TOUR',
                'location' => 'Tabanan, Bali',
                'duration' => '6-8 Hours',
                'price' => 'From IDR 450K/Car',
                'tags' => ["Sunset", "Temple"],
                'is_popular' => true,
            ],
            [
                'title' => 'Gate of Heaven Lempuyang',
                'description' => 'Take iconic photos at the Gate of Heaven with Mount Agung as the majestic backdrop.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Lempuyang-Temple-Gate-of-Heaven-e1754399242204.jpg',
                'category' => 'BALI FULL DAY TOUR',
                'location' => 'Karangasem, Bali',
                'duration' => '10-12 Hours',
                'price' => 'From IDR 700K/Car',
                'tags' => ["Photography", "Temple"],
                'is_popular' => true,
            ],
            [
                'title' => 'Lovina Dolphin Watching',
                'description' => 'Enjoy an early morning boat ride to see wild dolphins playing in the ocean at Lovina.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/dolphin-watching.jpg',
                'category' => 'BALI ACTIVITIES',
                'location' => 'Lovina, Bali',
                'duration' => '12-14 Hours',
                'price' => 'From IDR 750K/Car',
                'tags' => ["Nature", "Sunrise"],
                'is_popular' => false,
            ],
            [
                'title' => 'Bali Watersports Experience',
                'description' => 'Feel the adrenaline rush with various exciting water sport activities in Tanjung Benoa.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Experience-the-Best-of-Bali-Watersports.jpg',
                'category' => 'BALI ACTIVITIES',
                'location' => 'Nusa Dua, Bali',
                'duration' => '4-6 Hours',
                'price' => 'From IDR 350K/Car',
                'tags' => ["Adventure", "Watersport"],
                'is_popular' => true,
            ],
            [
                'title' => 'Mount Batur Sunrise Jeep',
                'description' => 'Experience the stunning sunrise and black lava from Mount Batur on a 4WD Jeep.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Mount-Batur-Sunrise-Black-Lava-Jeep-Experience-5-e1754399220682.jpg',
                'category' => 'BALI ACTIVITIES',
                'location' => 'Kintamani, Bali',
                'duration' => '8-10 Hours',
                'price' => 'From IDR 600K/Car',
                'tags' => ["Adventure", "Sunrise"],
                'is_popular' => true,
            ],
            [
                'title' => 'Bali ATV Quad Bike',
                'description' => 'Ride through lush jungles, rice paddies, and muddy tracks on a thrilling ATV adventure.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Bali-ATV-Quad-Bike-Adventure-1024x683.jpg',
                'category' => 'BALI ACTIVITIES',
                'location' => 'Ubud, Bali',
                'duration' => '6-8 Hours',
                'price' => 'From IDR 450K/Car',
                'tags' => ["Adventure", "Nature"],
                'is_popular' => true,
            ],
            [
                'title' => 'Nusa Penida West Tour',
                'description' => 'Explore the most famous spots in Nusa Penida including Kelingking Beach and Broken Beach.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/07/Kelingking-Beach-Nusa-Penida.jpg',
                'category' => 'NUSA PENIDA TOUR',
                'location' => 'Nusa Penida, Bali',
                'duration' => '10-12 Hours',
                'price' => 'From IDR 850K/Pax',
                'tags' => ["Island", "Nature"],
                'is_popular' => true,
            ],
            [
                'title' => 'Tirta Empul Purification',
                'description' => 'Experience a spiritual cleansing ritual at the holy spring water temple of Tirta Empul.',
                'image_url' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Tirta-Empul-Healing-Purification-Tour.jpg',
                'category' => 'BALI FULL DAY TOUR',
                'location' => 'Tampaksiring, Bali',
                'duration' => '6-8 Hours',
                'price' => 'From IDR 500K/Car',
                'tags' => ["Cultural", "Spiritual"],
                'is_popular' => false,
            ],
        ];

        foreach ($tours as $tour) {
            \App\Models\Tour::create($tour);
        }
    }
}
