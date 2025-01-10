<?php

namespace App\Livewire\Carts;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Bread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCart extends Component
{
    public $quantity = 1;
    public $amount;
    public $bread;
    public $errMessage;
    public $user;

    public function mount($bread)
    {
        $this->bread = $bread;
        $this->amount = $bread->min_order;
        $this->user = Auth::user();
    }

    public function increment()
    {
        if (!$this->user) {
            return redirect()->route('login');
        }
        $this->amount++;
    }

    public function decrement()
    {
        if (!$this->user) {
            return redirect()->route('login');
        }
        if ($this->amount <= $this->bread->min_order) {
            $this->errMessage = 'Jumlah produk tidak boleh kurang dari ' . $this->bread->min_order;
        }
        $this->amount--;
    }

    public function addToCart()
    {
        if (!$this->user) {
            return redirect()->route('login');
        }

        if ($this->amount < $this->bread->min_order) {
            $this->errMessage = 'Jumlah produk tidak boleh kurang dari ' . $this->bread->min_order;
            return;
        }

        if ($this->amount > $this->bread->quantity) {
            $this->errMessage = 'Jumlah produk tidak boleh melebihi dari stok';
            return;
        }

        // Cari atau buat cart untuk user
        $cart = Cart::firstOrCreate(
            ['user_id' => $this->user->id, 'is_active' => true]
        );

        // Cek apakah produk sudah ada di cart
        $cartDetail = CartDetail::where('cart_id', $cart->id)
            ->where('bread_id', $this->bread->id)
            ->first();

        if ($cartDetail) {
            // Jika produk sudah ada, tambahkan quantity
            $cartDetail->update([
                'quantity' => $cartDetail->quantity += $this->amount,
            ]);
        } else {
            // Jika produk belum ada di cart, tambahkan produk baru ke cart
            CartDetail::create([
                'cart_id' => $cart->id,
                'bread_id' => $this->bread->id,
                'quantity' => $this->amount,
            ]);
        }
        flash('Produk berhasil ditambah ke keranjang', 'add-to-cart');
        return redirect()->route('detail-breads', $this->bread->id);
    }

    public function render()
    {
        return view('livewire.carts.add-to-cart');
    }
}
