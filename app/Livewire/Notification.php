<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{

    public $notifications;
    public function mount()
    {
        $this->loadNotifications();
    }

    public function markAsReadAll()
    {
        $notification = Auth::user()->notifications;
        if ($notification) {
            $notification->markAsRead();
            $this->loadNotifications();
        }
    }

    public function markAsRead($notification)
    {
        $notif = Auth::user()->notifications->find($notification['id']);
        if ($notif) {
            $notif->markAsRead();
            $this->loadNotifications();
        }
    }

    public function goToDetail($notification)
    {
        $notif = Auth::user()->notifications->find($notification['id']);
        if ($notif) {
            $notif->markAsRead();
            return redirect()->route('orders.detail', $notification['data']['no_order']);
        }
    }

    public function loadNotifications()
    {
        $this->notifications = Auth::user()->unreadNotifications->take(5);
    }
    public function render()
    {
        $this->loadNotifications();
        return view('livewire.notification');
    }
}
