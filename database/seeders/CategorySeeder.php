<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Roti Tawar',
            'isActive' => 1,
        ]);
        Category::factory()->create([
            'name' => 'Roti Isi',
            'isActive' => 1,
        ]);
    }
}
