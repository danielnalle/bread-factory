<?php

namespace App\Livewire\Dashboard;

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

class TableNewOrder extends Component
{
    use WithPagination;

    public $search = '';
    public $cart_id;
    public $order;
    public $orderStatusId;

    public function render()
    {
        $order_status = OrderStatus::all();
        return view('livewire.dashboard.table-new-order', [
            'orders' => Order::select('orders.*')->join('carts', 'carts.id', '=', 'orders.cart_id')
                ->join('users', 'users.id', '=', 'carts.user_id')
                ->join('order_status', 'order_status.id', '=', 'orders.order_status_id')
                ->where('carts.is_active', false)
                ->where('order_status.id', '1')
                ->orderBy('orders.id', 'desc')
                ->when($this->search, function ($query) {
                    $query->whereAny(['orders.no_order', 'users.name'], 'like', '%' . $this->search . '%');
                })->paginate(10),
            'order_status' => $order_status,
        ]);
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
        return redirect()->route('dashboard');
    }
}
