<?php

namespace App\Livewire\Carts;

use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListCart extends Component
{
    public $cart;
    public $cartDetails;
    public $totalPrice = 0;
    public $selectedItems = []; // Item yang dicentang untuk checkout

    // Menghitung total harga berdasarkan item yang dipilih
    // public function calculateTotal()
    // {
    //     $this->totalPrice = 0;

    //     foreach ($this->cartDetails as $detail) {
    //         if (in_array($detail->id, $this->selectedItems)) {
    //             $this->totalPrice += $detail->price * $detail->quantity;
    //         }
    //     }
    // }

    // Mengupdate jumlah produk
    public function updateQuantity($detailId, $quantity)
    {
        $cartDetail = CartDetail::find($detailId);
        $cartDetail->quantity = $quantity;
        $cartDetail->save();

        $this->calculateTotal();
    }

    // Mengelola proses checkout
    // public function checkout()
    // {
    //     $selectedItems = CartDetail::whereIn('id', $this->selectedItems)->get();

    //     // Menyimpan data ke table orders
    //     $order = auth()->user()->orders()->create([
    //         'total_price' => $this->totalPrice
    //     ]);

    //     foreach ($selectedItems as $item) {
    //         // Menggunakan data cart_details untuk membuat riwayat pesanan
    //         $order->orderDetails()->create([
    //             'product_id' => $item->product_id,
    //             'quantity' => $item->quantity,
    //             'price' => $item->price,
    //         ]);

    //         // Pindahkan status cart dari aktif ke tidak aktif
    //         $item->cart->update(['status' => 'inactive']);
    //     }

    //     // Hapus item yang dipilih dari cart
    //     $this->clearSelectedItems();

    //     session()->flash('message', 'Checkout successful!');
    // }

    // Menyimpan checklist item ke localStorage
    public function saveToLocalStorage()
    {
        $selectedItems = $this->selectedItems;

        // Menyimpan data keranjang tidak aktif sementara di localStorage
        $this->dispatchBrowserEvent('saveToLocalStorage', ['items' => $selectedItems]);
    }

    // Clear selected items
    public function clearSelectedItems()
    {
        $this->selectedItems = [];
        $this->totalPrice = 0;
    }

    public function render()
    {
        $this->cart = Cart::where('user_id', Auth::user()->id)
            ->where('is_active', true)
            ->first();
        $this->cartDetails = $this->cart->cart_details;


        // if ($this->cart) {
        //     $this->cartDetails = $this->cart->cartDetails;
        //     $this->calculateTotal();
        // }
        return view('livewire.carts.list-cart', [
            'carts' => $this->cartDetails,
        ]);
    }
    // public $cartItems = [];

    // public function toggleItem($cartId)
    // {
    //     $cart = Cart::find($cartId);
    //     $cart->checked = !$cart->checked;
    //     $cart->save();
    //     $this->refreshCart();
    // }

    // public function updateQuantity($cartId, $operation)
    // {
    //     $cart = Cart::find($cartId);
    //     if ($operation === 'increment' && $cart->product->stock > $cart->quantity) {
    //         $cart->quantity++;
    //     } elseif ($operation === 'decrement' && $cart->quantity > 1) {
    //         $cart->quantity--;
    //     }
    //     $cart->save();
    //     $this->refreshCart();
    // }

    // private function refreshCart()
    // {
    //     $this->cartItems = Cart::with('product')->get()->toArray();
    // }

    // public function render()
    // {
    //     return view('livewire.carts.list-cart', [
    //         'totalPrice' => array_reduce($this->cartItems, function ($carry, $item) {
    //             return $carry + ($item['checked'] ? $item['quantity'] * $item['product']['price'] : 0);
    //         }, 0),
    //     ]);
    // }
}
