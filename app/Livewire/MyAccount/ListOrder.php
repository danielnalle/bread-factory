<?php

namespace App\Livewire\MyAccount;

use App\Models\BreadType;
use App\Models\Bread;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListOrder extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedOrderStatus = '';
    public $selectedOrderStatusName = 'Semua';

    public function render()
    {
        $order_status = OrderStatus::all();
        return view('livewire.my-account.list-order', [
            'orders' => Order::select('orders.*')->join('carts', 'carts.id', '=', 'orders.cart_id')
                ->where('carts.is_active', false)->orderBy('orders.id', 'desc')
                ->when($this->search, function ($query) {
                    $query->where('orders.no_order', 'like', '%' . $this->search . '%');
                })->when($this->selectedOrderStatus, function ($query) {
                    $query->where('orders.order_status_id', $this->selectedOrderStatus);
                })->paginate(10),
            'order_status' => $order_status,
            'selectedOrderStatusName' => $this->selectedOrderStatusName,
        ]);
    }

    public function filter($value)
    {
        $this->selectedOrderStatus = $value;
        $this->resetPage();
    }
}
