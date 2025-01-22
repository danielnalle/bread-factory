<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StokNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $bread;
    public $title;
    public function __construct($bread, $title)
    {
        $this->bread = $bread;
        $this->title = $title;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'bread' => $this->bread,
            'title' => $this->title . '⚠️',
            'message' => 'Stok ' . strtolower($this->bread->name) . ' sudah habis! Harap segera di restock.',
        ];
    }
}
