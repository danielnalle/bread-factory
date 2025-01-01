<?php

namespace Database\Seeders;

use App\Models\BreadType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreadTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BreadType::factory()->create([
            'name' => 'Roti Tawar',
            'isActive' => 1,
        ]);
        BreadType::factory()->create([
            'name' => 'Roti Isi',
            'isActive' => 1,
        ]);
    }
}
