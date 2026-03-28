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
        $notification = Auth::user()->notifications->where('type', 'App\Notifications\OrderNotification');
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
            if ($notif->type != "App\Notifications\StokNotification") {
                $notif->markAsRead();
                return redirect()->route('orders.detail', $notification['data']['no_order']);
            } else {
                $notif->markAsRead();
                return redirect()->route('breads.edit', $notification['data']['bread']['id']);
            }
        }
    }

    public function loadNotifications()
    {
        $this->notifications = Auth::user()->unreadNotifications->where('type', '!=', 'App\Notifications\OrderStatusNotification')->take(5);
    }
    public function render()
    {
        $this->loadNotifications();
        return view('livewire.notification');
    }
}
