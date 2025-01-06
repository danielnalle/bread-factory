<?php

namespace Database\Seeders;

use App\Models\Bread;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\BreadType;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\PaymentStatus;
use Faker\Provider\ar_EG\Payment;
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
        $this->call([UserSeeder::class, BreadTypeSeeder::class, BreadSeeder::class]);
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

        PaymentStatus::create([
            'name' => 'Belum dibayar',
        ]);

        PaymentStatus::create([
            'name' => 'Bayar',
        ]);

        PaymentStatus::create([
            'name' => 'Sudah dibayar',
        ]);

        Cart::create([
            'user_id' => 9
        ]);

        CartDetail::create([
            'cart_id' => 1,
            'bread_id' => Bread::all()->random()->id,
            'quantity' => 20
        ]);

        CartDetail::create([
            'cart_id' => 1,
            'bread_id' => Bread::all()->random()->id,
            'quantity' => 25
        ]);

        Order::create([
            'cart_id' => 1,
            'order_status_id' => 1,
            'payment_status_id' => 2,
            'total_price' => 300000
        ]);
    }
}
