<?php

namespace App\Livewire\Payments;

use App\Models\PaymentMethod;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePaymentMethod extends Component
{
    #[Validate('required|string|max:255|unique:payment_methods,name')]
    public $name;
    #[Validate('boolean')]
    public $isActive = false;

    public function render()
    {
        return view('livewire.payments.create-payment-method');
    }

    public function store()
    {
        $this->validate();

        PaymentMethod::create([
            'name' => $this->name,
            'isActive' => $this->isActive,
        ]);

        flash("Payment Berhasil Ditambah", "success");
        return redirect()->route('payment-method');
    }
}
