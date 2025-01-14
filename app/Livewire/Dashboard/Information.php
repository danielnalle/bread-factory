<?php

namespace App\Livewire\Dashboard;

use App\Models\Bread;
use App\Models\BreadType;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Information extends Component
{
    public $informations = [];
    public $pendapatan = 0;
    public function render()
    {
        $this->informations = [
            User::where('role', '!=', 'customer')->count(),
            User::where('role', 'customer')->count(),
            Bread::count(),
            BreadType::count(),
            Order::count(),
        ];


        $this->pendapatan = Order::where('payment_status_id', 3)
            ->whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->sum('total_price');
        return view('livewire.dashboard.information', [
            'informations' => $this->informations
        ]);
    }
}
