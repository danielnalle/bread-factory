<?php

namespace App\Livewire\Landing;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LandingNotification extends Component
{
    public $notifications;
    public $isHome;
    public function mount($home)
    {
        $this->isHome = $home;
        $this->loadNotifications();
    }

    public function markAsReadAll()
    {
        $notification = Auth::user()->notifications->where('type', 'App\Notifications\OrderStatusNotification');
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
            return redirect()->route('my-account.orders.detail', $notification['data']['order']['cart_id']);
        }
    }

    public function loadNotifications()
    {
        $this->notifications = Auth::user()->unreadNotifications->where('type', 'App\Notifications\OrderStatusNotification')->take(5);
    }

    public function render()
    {
        $this->loadNotifications();
        return view('livewire.landing.landing-notification');
    }
}
