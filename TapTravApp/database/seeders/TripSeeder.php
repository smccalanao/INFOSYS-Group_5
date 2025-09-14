<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    public function run(): void
    {
        Trip::truncate(); // clear old records

        // 🌋 Mindanao Mountains
        Trip::create([
            'name' => 'Mount Apo',
            'difficulty' => 'Moderate',
            'duration' => '3 Days Hike',
            'image' => 'assets/images/trips/mount_apo.jpg',
            'description' => 'The highest peak in the Philippines with breathtaking summit views.',
            'is_popular' => true,
        ]);

        Trip::create([
            'name' => 'Mount Dulang-Dulang',
            'difficulty' => 'Hard',
            'duration' => '4 Days Hike',
            'image' => 'assets/images/trips/mount_dulang_dulang.jpg',
            'description' => 'Second-highest peak in the Philippines, often misty and mystical.',
            'is_popular' => true,
        ]);

        Trip::create([
            'name' => 'Mount Kitanglad',
            'difficulty' => 'Hard',
            'duration' => '3 Days Hike',
            'image' => 'assets/images/trips/mount_kitanglad.jpg',
            'description' => 'Home to rare flora and fauna, including the Philippine eagle.',
            'is_popular' => false,
        ]);

        Trip::create([
            'name' => 'Mount Kalatungan',
            'difficulty' => 'Very Hard',
            'duration' => '4 Days Hike',
            'image' => 'assets/images/trips/mount_kalatungan.jpg',
            'description' => 'One of Mindanao’s toughest hikes with dense forests and steep trails.',
            'is_popular' => false,
        ]);

        Trip::create([
            'name' => 'Mount Hibok-Hibok',
            'difficulty' => 'Moderate',
            'duration' => '1-2 Days Hike',
            'image' => 'assets/images/trips/mount_hibok_hibok.jpg',
            'description' => 'Active volcano in Camiguin with views of the island and White Island sandbar.',
            'is_popular' => false,
        ]);

        Trip::create([
            'name' => 'Mount Matutum',
            'difficulty' => 'Hard',
            'duration' => '2-3 Days Hike',
            'image' => 'assets/images/trips/mount_matutum.jpg',
            'description' => 'A stratovolcano in South Cotabato, surrounded by lush forests.',
            'is_popular' => false,
        ]);

        Trip::create([
            'name' => 'Lake Holon (Mount Melibengoy)',
            'difficulty' => 'Moderate',
            'duration' => '2 Days Hike',
            'image' => 'assets/images/trips/lake_holon.jpg',
            'description' => 'Also known as the Crown Jewel of the South, Lake Holon is a crater lake atop Mount Melibengoy in South Cotabato.',
            'is_popular' => true,
        ]);

        Trip::create([
            'name' => 'Mount Hamiguitan',
            'difficulty' => 'Moderate',
            'duration' => '2-3 Days Hike',
            'image' => 'assets/images/trips/mount_hamiguitan.jpg',
            'description' => 'A UNESCO World Heritage Site in Davao Oriental, home to pygmy forests and unique biodiversity.',
            'is_popular' => false,
        ]);

        Trip::create([
            'name' => 'Mount Malindang',
            'difficulty' => 'Hard',
            'duration' => '3 Days Hike',
            'image' => 'assets/images/trips/mount_malindang.jpg',
            'description' => 'Located in Misamis Occidental, rich in forests and waterfalls.',
            'is_popular' => false,
        ]);

        // 🗻 Luzon
        Trip::create([
            'name' => 'Mount Pulag',
            'difficulty' => 'Easy',
            'duration' => '2 Days Hike',
            'image' => 'assets/images/trips/mount_pulag.jpg',
            'description' => 'Famous for its “sea of clouds” and beginner-friendly trails.',
            'is_popular' => true,
        ]);

        Trip::create([
            'name' => 'Mount Pinatubo',
            'difficulty' => 'Moderate',
            'duration' => '1 Day Hike',
            'image' => 'assets/images/trips/mount_pinatubo.jpg',
            'description' => 'Known for its turquoise crater lake formed after the 1991 eruption.',
            'is_popular' => true,
        ]);

        // 🏞️ Visayas
        Trip::create([
            'name' => 'Mount Kanlaon',
            'difficulty' => 'Hard',
            'duration' => '4 Days Hike',
            'image' => 'assets/images/trips/mount_kanlaon.jpg',
            'description' => 'An active stratovolcano with challenging trails and crater views.',
            'is_popular' => true,
        ]);

        Trip::create([
            'name' => 'Mount Guiting-Guiting',
            'difficulty' => 'Very Hard',
            'duration' => '5 Days Hike',
            'image' => 'assets/images/trips/mount_guiting_guiting.jpg',
            'description' => 'One of the most difficult climbs in the country with jagged peaks.',
            'is_popular' => true,
        ]);
    }
}
