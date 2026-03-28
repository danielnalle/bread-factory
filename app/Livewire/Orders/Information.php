<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class Information extends Component
{
    public $informations = [];
    public function render()
    {
        $groupedOrders = Order::all()
            ->groupBy('order_status_id')
            ->mapWithKeys(function ($orders, $status) {
                return [$status => $orders->count()];
            });

        for ($status = 1; $status <= 6; $status++) {
            $this->informations[$status - 1] = $groupedOrders->get($status, 0);
        }
        return view('livewire.orders.information', [
            'informations' => $this->informations,
            'total_orders' => Order::count()
        ]);
    }
}
