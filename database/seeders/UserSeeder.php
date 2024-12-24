<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::factory()->admin()->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'Yogi Pradnyana',
            'email' => 'yogi@gmail.com',
            'role' => 'admin',
            'password' => 'asdasd',
        ]);
    }
}
