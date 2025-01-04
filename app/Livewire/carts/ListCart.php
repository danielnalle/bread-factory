<?php

namespace App\Livewire\Carts;

use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ListCart extends Component
{

    public $cart;
    public $cartDetails;
    public $totalPrice = 0;
    public $quantities = [];
    public $errorsPerBread = [];
    public $checkedItems = [];

    public function mount()
    {
        $this->checkedItems = session()->get('checkedItems', []);
        $this->loadCart();
    }

    public function loadCart()
    {
        $this->cart = Cart::where('user_id', Auth::user()->id)
            ->where('is_active', true)
            ->first();

        if ($this->cart) {
            $this->cartDetails = $this->cart->cart_details;

            foreach ($this->cartDetails as $detail) {
                $this->quantities[$detail->id] = $detail->quantity;
            }
        }
        $this->calculateTotalPrice();
    }

    public function calculateTotalPrice()
    {
        $checkedItems = $this->checkedItems ?? [];

        $this->totalPrice = $this->cartDetails
            ->filter(function ($detail) use ($checkedItems) {
                return in_array($detail->id, $checkedItems);
            })
            ->sum(function ($detail) {
                return $detail->quantity * $detail->breads->price;
            });
    }

    public function updateQuantity($id, $quantity)
    {
        $cartDetail = CartDetail::find($id);
        $min_order = $cartDetail->breads->min_order;
        if ($quantity < $min_order) {
            $this->errorsPerBread[$id] = 'Jumlah produk tidak boleh kurang dari ' . $min_order;
            return;
        }
        if ($cartDetail) {
            $cartDetail->update(['quantity' => $quantity]);
            unset($this->errorsPerBread[$id]);
            $this->loadCart();
        }
        $this->calculateTotalPrice();
    }

    public function toggleCheckout($cartId)
    {
        if (in_array($cartId, $this->checkedItems)) {
            $this->checkedItems = array_diff($this->checkedItems, [$cartId]);
        } else {
            $this->checkedItems[] = $cartId;
        }

        session()->put('checkedItems', $this->checkedItems);
        $this->calculateTotalPrice();
    }

    public function toggleAllItems()
    {
        if (count($this->checkedItems) == $this->cartDetails->count()) {
            $this->checkedItems = [];
        } else {
            $this->checkedItems = $this->cartDetails->pluck('id')->toArray();
        }
        session()->put('checkedItems', $this->checkedItems);
        // dd(session()->get('checkedItems'));

        $this->calculateTotalPrice();
    }

    public function removeItem($id, $cartDetailId)
    {
        $cartDetail = CartDetail::where('cart_id', $this->cart->id)->where('bread_id', $id)->first();
        if ($cartDetail) {
            $cartDetail->delete();
            if ($key = array_search($cartDetailId, $this->checkedItems)) {
                unset($this->checkedItems[$key]);
                session()->put('checkedItems', $this->checkedItems);
            } else {
                unset($this->checkedItems[0]);
                session()->put('checkedItems', $this->checkedItems);
            }

            $this->loadCart();
            $this->calculateTotalPrice();
        }
    }


    // // Fungsi untuk proses checkout
    // public function proceedToCheckout()
    // {
    //     // Pindahkan produk yang dicheckout ke cart tidak aktif
    //     foreach ($this->checkedItems as $cartId) {
    //         $cart = CartDetail::find($cartId);
    //         if ($cart) {
    //             // Tandai produk sebagai tidak aktif (misal update status di database)
    //             $cart->update(['status' => 'inactive']);
    //         }
    //     }

    //     // Hapus produk yang sudah dipilih dari daftar checkedItems
    //     $this->checkedItems = [];

    // Session setelah checkout
    // session()->forget('checkedItems');

    //     // Kirim notifikasi atau refresh data
    //     session()->flash('message', 'Produk berhasil dipindahkan ke checkout.');
    // }

    public function render()
    {
        return view('livewire.carts.list-cart', [
            'carts' => $this->cartDetails,
        ]);
    }
}
