<?php

namespace App\Livewire\Orders;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public $carts;
    public $cart;
    public $address;
    public $phone;
    public $user;
    public $totalPrice = 0;

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
        $activeCart = $this->cart->id;
        Order::create([
            'cart_id' => $activeCart,
            'order_status_id' => 1,
            'payment_status_id' => 1,
            'total_price' => $this->totalPrice,
        ]);
        Cart::where('id', $activeCart)->update(['is_active' => false]);
    }

    public function render()
    {
        return view('livewire.orders.checkout', [
            'carts' => $this->carts,
        ]);
    }
}
