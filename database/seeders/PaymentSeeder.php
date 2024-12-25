<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethod::factory(1)->create();
        PaymentMethod::factory()->create([
            'name' => 'BCA (Bank Central Asia)',
            'isActive' => true,
        ]);
        PaymentMethod::factory()->create([
            'name' => 'COD (Cash On Delivery)',
            'isActive' => true,
        ]);
    }
}
