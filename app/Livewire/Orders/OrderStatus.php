<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class OrderStatus extends Component
{
    public $orderStatusId;
    public $order;
    public $order_status;

    public function mount($order, $order_status)
    {
        $this->order = $order;
        $this->order_status = $order_status;
    }

    public function updateStatus($orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;
        $this->order->update([
            'order_status_id' => (int) $this->orderStatusId,
        ]);

        flash('Status Berhasil Diupdate', 'success');
        return redirect()->route('orders.detail', $this->order->no_order);
    }
    public function render()
    {
        return view('livewire.orders.order-status');
    }
}
