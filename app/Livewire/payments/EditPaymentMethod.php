<?php

namespace App\Livewire\Payments;

use App\Models\PaymentMethod;
use Livewire\Component;

class EditPaymentMethod extends Component
{
    public $payment_id;
    public $name;
    public $isActive;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:payment_methods,name, ' . $this->payment_id,
            'isActive' => 'required|boolean',
        ];
    }
    public function mount($payment)
    {
        $this->payment_id = $payment->id;
        $this->name = $payment->name;
        $this->isActive = $payment->isActive;
    }

    public function render()
    {

        return view('livewire.payments.edit-payment-method');
    }

    public function update()
    {
        $this->validate();

        PaymentMethod::where('id', $this->payment_id)->update([
            'name' => $this->name,
            'isActive' => $this->isActive,
        ]);

        $this->reset();

        flash('Payment Berhasil Diupdate', 'success');
        return redirect()->route('payment-method');
    }
}
