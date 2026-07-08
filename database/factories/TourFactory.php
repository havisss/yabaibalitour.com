<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['BALI FULL DAY TOUR', 'BALI ACTIVITIES', 'NUSA PENIDA TOUR', 'PRIVATE CAR CHARTER', 'AIRPORT TRANSFER'];
        $locations = ['Ubud, Bali', 'Nusa Penida, Bali', 'Kuta, Bali', 'Uluwatu, Bali', 'Kintamani, Bali'];
        $images = [
            'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1537953773345-d172ccf13cf1?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1555400038-63f5ba517a47?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=800&q=80'
        ];

        return [
            'category' => fake()->randomElement($categories),
            'title' => fake()->sentence(4),
            'location' => fake()->randomElement($locations),
            'description' => fake()->paragraph(2),
            'duration' => fake()->numberBetween(4, 12) . '-' . fake()->numberBetween(12, 14) . ' Hours',
            'price' => 'From IDR ' . fake()->numberBetween(400, 1000) . 'K/Car',
            'image_url' => fake()->randomElement($images),
            'tags' => ['Private Tour', 'Hotel Pickup'],
            'is_popular' => fake()->boolean(60),
        ];
    }
}
