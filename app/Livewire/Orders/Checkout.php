<?php

namespace App\Livewire\Orders;

use App\Models\Bread;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Checkout extends Component
{
    public $carts;
    public $cart;
    public $address;
    public $phone;
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
        if ($user->customer) {
            $this->address = $user->customer->address;
            $this->phone = $user->customer->phone;
        }
        $this->calculateTotalPrice();
    }

    public function updateProfil()
    {
        $this->validate([
            'phone' => 'required|regex:/^[0-9]{10,15}$/|unique:customers,phone, ' . $this->user->id . ',user_id',
            'address' => 'required|string|max:600',
        ]);

        Customer::create([
            'user_id' => $this->user->id,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);

        flash('Profil Berhasil Diupdate', 'success');
        return redirect()->route('checkout');
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
            Order::create([
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
