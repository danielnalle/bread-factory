<?php

namespace App\Livewire\Status;

use Livewire\Component;

class UpdateOrderStatus extends Component
{
    public $order; // Mengambil data pesanan
    public $orderStatusId; // Status yang dipilih oleh admin
    public $orderStatus; // Status yang dipilih oleh admin

    public function mount($order, $order_status)
    {
        $this->order = $order;
        $this->orderStatusId = $order->order_status_id; // Status saat ini
        $this->orderStatus = $order_status; // Status saat ini
    }

    public function updateStatus()
    {
        // Validasi
        $this->validate([
            'orderStatusId' => 'required|exists:order_status,id',
        ]);

        // Update status pada pesanan
        $this->order->update([
            'order_status_id' => $this->orderStatusId,
        ]);

        // Emit pesan sukses

        flash('Status Berhasil Diupdate', 'success');
        return redirect(url()->previous());
    }

    public function render()
    {
        return view('livewire.status.update-order-status', [
            'order_status' => $this->orderStatus,
        ]);
    }
}
