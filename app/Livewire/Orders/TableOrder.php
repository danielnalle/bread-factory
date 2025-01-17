<?php

namespace App\Livewire\Orders;

use App\Models\BreadType;
use App\Models\Bread;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use App\Notifications\OrderStatusNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TableOrder extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedOrderStatus = '';
    public $selectedOrderStatusName = 'Semua';
    public $cart_id;
    public $selectedStatus;
    public $order;
    public $orderStatusId;


    public function render()
    {
        $order_status = OrderStatus::all();
        return view('livewire.orders.table-order', [
            'orders' => Order::select('orders.*')->join('carts', 'carts.id', '=', 'orders.cart_id')
                ->where('carts.is_active', false)->join('users', 'users.id', '=', 'carts.user_id')->orderBy('orders.id', 'desc')
                ->when($this->search, function ($query) {
                    $query->whereAny(['orders.no_order', 'users.name'], 'like', '%' . $this->search . '%');
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

    public function updateStatus($orderId, $orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;
        $this->order = Order::find($orderId);
        $this->order->update([
            'order_status_id' => (int) $this->orderStatusId,
        ]);

        $statusName = OrderStatus::find($orderStatusId)->name;
        $statusName = strtolower($statusName);
        $userId = $this->order->cart->user->id;
        $userOrder = User::where('id', $userId)->get();
        Notification::send($userOrder, new OrderStatusNotification($this->order, 'Pesanan Update', $statusName . '.'));
        flash('Status Berhasil Diupdate', 'success');
        return redirect(url()->previous());
    }

    public function deleteConfirm($id)
    {
        $this->cart_id = $id;

        // $user->delete();

        // session()->flash('message', 'Data berhasil dihapus.');
        $this->dispatch('deleteConfirm', ['trigger' => 'orderDelete']);
    }
    #[On('orderDelete')]
    public function delete()
    {
        $order = Cart::find($this->cart_id);
        $order->delete();

        flash('Order Berhasil Dihapus', 'success');
        return redirect()->route('orders');
    }
}
