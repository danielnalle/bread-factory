<?php

namespace App\Livewire\SidebarApp;

use App\Models\Order;
use Livewire\Component;

class BadgesOrder extends Component
{
    public function render()
    {
        return view('livewire.sidebar-app.badges-order', [
            'orders' => Order::count()
        ]);
    }
}
