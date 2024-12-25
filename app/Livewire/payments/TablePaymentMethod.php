<?php

namespace App\Livewire\Payments;

use App\Models\PaymentMethod;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TablePaymentMethod extends Component
{
    use WithPagination;
    public $search = '';
    public $payment_id;

    public function render()
    {

        return view('livewire.payments.table-payment-method', [
            'payments' => PaymentMethod::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteConfirm($id)
    {
        $this->payment_id = $id;


        $this->dispatch('deleteConfirm', ['trigger' => 'paymentDelete']);
    }
    #[On('paymentDelete')]
    public function delete()
    {
        $payment = PaymentMethod::find($this->payment_id);
        $payment->delete();

        $this->dispatch("alert", ['type' => 'success', 'message' => "Payment Berhasil Dihapus"]);
    }
}
