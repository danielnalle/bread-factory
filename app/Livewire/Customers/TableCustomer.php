<?php

namespace App\Livewire\Customers;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TableCustomer extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {

        return view('livewire.customers.table-customer', [
            'customers' => User::orderBy('id', 'desc')->where('role', 'customer')->whereAny(['name'], 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
