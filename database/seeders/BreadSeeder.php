<?php

namespace Database\Seeders;

use App\Models\Bread;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bread::factory()->create([
            'name' => 'Roti Tawar Premium',
            'description' => 'Roti tawar dengan bahan baku premium yang lembut dan aroma butternya yang lezat.',
            'bread_type_id' => 1,
            'quantity' => 50,
            'min_order' => 2,
            'unit' => 'Pack',
            'price' => 26900,
            'image' => "breads/1.jpg",
        ]);
        Bread::factory()->create([
            'name' => 'Roti Tawar Kering',
            'description' => 'Roti tawar kering dengan polesan mentega yang memberi rasa gurih dan renyah. Sajian yang cocok untuk sarapan di pagi hari.',
            'bread_type_id' => 1,
            'quantity' => 80,
            'min_order' => 2,
            'unit' => 'Pack',
            'price' => 24200,
            'image' => "breads/2.jpg",
        ]);
        Bread::factory()->create([
            'name' => 'Roti Tawar Kulit',
            'description' => 'Nikmatnya roti tawar khas Holland Bakery yang lembut hingga dibagian pinggirnya.',
            'bread_type_id' => 1,
            'quantity' => 30,
            'min_order' => 3,
            'unit' => 'Pack',
            'price' => 20100,
            'image' => "breads/3.jpg",
        ]);
        Bread::factory()->create([
            'name' => 'Roti Tawar Kupas',
            'description' => 'Roti tawar tanpa kulit khas Holland Bakery yang lembut dan bisa disesuaikan dengan selera kamu.',
            'bread_type_id' => 1,
            'quantity' => 1000,
            'min_order' => 2,
            'unit' => 'Pack',
            'price' => 20100,
            'image' => "breads/4.jpg",
        ]);
        Bread::factory()->create([
            'name' => 'Roti Bakso Ayam',
            'description' => 'Roti Bakso Ayam: Roti lembut dengan isian bakso ayam gurih. Cocok untuk camilan atau bekal.',
            'bread_type_id' => 2,
            'quantity' => 60,
            'min_order' => 20,
            'unit' => 'Pcs',
            'price' => 4200,
            'image' => "breads/5.jpg",
        ]);
        Bread::factory()->create([
            'name' => 'Roti Cheese Raisin',
            'description' => 'Roti Cheese Raisin: Roti lembut dengan campuran keju dan kismis manis. Pas untuk camilan.',
            'bread_type_id' => 2,
            'quantity' => 40,
            'min_order' => 20,
            'unit' => 'Pcs',
            'price' => 3400,
            'image' => "breads/6.jpg",
        ]);
    }
}
