<?php

namespace App\Livewire\Orders;

use App\Models\Bread;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderNotification;
use App\Notifications\OrderStatusNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class Checkout extends Component
{
    public $carts;
    public $cart;
    public $user;
    public $totalPrice = 0;
    public $note;

    public function mount()
    {
        $user = Auth::user();
        $this->user = $user;
        $cart_id = $user->carts->where('is_active', true)->first()->id;
        $this->cart = $user->carts->where('is_active', true)->first();
        $this->carts = CartDetail::where('cart_id', $cart_id)->get();
        $this->calculateTotalPrice();
    }

    public function calculateTotalPrice()
    {
        $this->totalPrice = $this->carts->sum(function ($detail) {
            return $detail->quantity * $detail->breads->price;
        });
    }

    public function makeOrder()
    {
        try {
            DB::beginTransaction();

            $activeCart = $this->cart->id;

            // Ambil nomor pesanan terakhir
            $lastOrder = Cart::where('user_id', Auth::id())->where('is_active', false)
                ->latest('id')
                ->first();
            $lastOrderNumber = $lastOrder ? intval(substr($lastOrder->order->no_order, -4)) : 0;
            $newOrderNumber = $lastOrderNumber + 1;


            $noOrder = "NP" . now()->format('Ymd') . Auth::id() . str_pad($newOrderNumber, 4, '0', STR_PAD_LEFT);
            $order = Order::create([
                'no_order' => $noOrder,
                'cart_id' => $activeCart,
                'order_status_id' => 1,
                'payment_status_id' => 1,
                'total_price' => $this->totalPrice,
                'note' => $this->note,
            ]);

            $cartItems = CartDetail::where('cart_id', $activeCart)->get();

            foreach ($cartItems as $item) {
                $bread = Bread::find($item->bread_id);
                if ($bread) {
                    $bread->quantity -= $item->quantity;
                    $bread->save();
                }
            }

            Cart::where('id', $activeCart)->update(['is_active' => false]);

            $userPabrik = User::where('role', '!=', 'customer')->get();
            Notification::send($userPabrik, new OrderNotification($order, 'Pesanan Baru', 'membuat pesanan baru.'));
            $userOrder = User::where('id', $this->user->id)->get();
            Notification::send($userOrder, new OrderStatusNotification($order, 'Pesanan Baru', 'berhasil buat.'));
            DB::commit();
            return redirect()->route('validation');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function render()
    {
        return view('livewire.orders.checkout', [
            'carts' => $this->carts,
        ]);
    }
}
