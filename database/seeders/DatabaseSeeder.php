<?php

namespace Database\Seeders;

use App\Models\Bread;
use App\Models\BreadType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([UserSeeder::class, BreadTypeSeeder::class, PaymentSeeder::class, BreadSeeder::class]);
        DB::table('order_status')->insert([
            ['name' => 'Baru', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['name' => 'Sedang Diproses', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['name' => 'Dalam Pengiriman', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['name' => 'Sampai di Tujuan', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['name' => 'Selesai', 'created_at' => NOW(), 'updated_at' => NOW()],
            ['name' => 'Ditolak', 'created_at' => NOW(), 'updated_at' => NOW()],
        ]);

        DB::table('carts')->insert([
            'user_id' => 8,
            'is_active' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('cart_details')->insert([
            'cart_id' => 1,
            'bread_id' => 5,
            'quantity' => 20,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
