<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->create([
            'name' => 'Roti Tawar Premium',
            'description' => 'Roti tawar dengan bahan baku premium yang lembut dan aroma butternya yang lezat.',
            'bread_type_id' => 1,
            'quantity' => 50,
            'min_order' => 2,
            'unit' => 'Pack',
            'price' => 26900,
            'image' => "products/1.jpg",
        ]);
        Product::factory()->create([
            'name' => 'Roti Tawar Kering',
            'description' => 'Roti tawar kering dengan polesan mentega yang memberi rasa gurih dan renyah. Sajian yang cocok untuk sarapan di pagi hari.',
            'bread_type_id' => 1,
            'quantity' => 80,
            'min_order' => 2,
            'unit' => 'Pack',
            'price' => 24200,
            'image' => "products/2.jpg",
        ]);
        Product::factory()->create([
            'name' => 'Roti Tawar Kulit',
            'description' => 'Nikmatnya roti tawar khas Holland Bakery yang lembut hingga dibagian pinggirnya.',
            'bread_type_id' => 1,
            'quantity' => 30,
            'min_order' => 3,
            'unit' => 'Pack',
            'price' => 20100,
            'image' => "products/3.jpg",
        ]);
        Product::factory()->create([
            'name' => 'Roti Tawar Kupas',
            'description' => 'Roti tawar tanpa kulit khas Holland Bakery yang lembut dan bisa disesuaikan dengan selera kamu.',
            'bread_type_id' => 1,
            'quantity' => 1000,
            'min_order' => 2,
            'unit' => 'Pack',
            'price' => 20100,
            'image' => "products/4.jpg",
        ]);
        Product::factory()->create([
            'name' => 'Roti Bakso Ayam',
            'description' => 'Roti Bakso Ayam: Roti lembut dengan isian bakso ayam gurih. Cocok untuk camilan atau bekal.',
            'bread_type_id' => 2,
            'quantity' => 60,
            'min_order' => 20,
            'unit' => 'Pcs',
            'price' => 4200,
            'image' => "products/5.jpg",
        ]);
        Product::factory()->create([
            'name' => 'Roti Cheese Raisin',
            'description' => 'Roti Cheese Raisin: Roti lembut dengan campuran keju dan kismis manis. Pas untuk camilan.',
            'bread_type_id' => 2,
            'quantity' => 40,
            'min_order' => 20,
            'unit' => 'Pcs',
            'price' => 3400,
            'image' => "products/6.jpg",
        ]);
    }
}
