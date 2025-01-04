<?php

namespace Database\Seeders;

use App\Models\Bread;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\PaymentStatus;
use Faker\Provider\ar_EG\Payment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $this->call([UserSeeder::class, CategorySeeder::class, BreadSeeder::class]);

        OrderStatus::create([
            'name' => 'Menunggu',
        ]);

        OrderStatus::create([
            'name' => 'Diproses',
        ]);

        OrderStatus::create([
            'name' => 'Pengiriman',
        ]);

        OrderStatus::create([
            'name' => 'Sampai & Pay',
        ]);

        OrderStatus::create([
            'name' => 'Selesai',
        ]);

        OrderStatus::create([
            'name' => 'Ditolak',
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
