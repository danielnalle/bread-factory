<?php

namespace App\Livewire\Orders;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormUpdateProfil extends Component
{
    public $address;
    public $phone;
    public $user;

    public function updateProfil()
    {
        $this->validate([
            'phone' => 'required|regex:/^[0-9]{10,15}$/|unique:customers,phone, ' . $this->user->id . ',user_id',
            'address' => 'required|string|max:600',
        ]);

        Customer::create([
            'user_id' => $this->user->id,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);

        flash('Profil Berhasil Diupdate', 'success');
        return redirect()->route('checkout');
    }

    public function render()
    {
        $user = Auth::user();
        $this->user = $user;
        if ($user->customer) {
            $this->address = $user->customer->address;
            $this->phone = $user->customer->phone;
        }
        return view('livewire.orders.form-update-profil');
    }
}
