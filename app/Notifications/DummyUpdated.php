<?php

namespace App\Notifications;

use App\Dummy;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DummyUpdated extends Notification implements ShouldQueue
{
    use Queueable;

    private $dummy;

    public function __construct(Dummy $dummy)
    {
        $this->dummy = $dummy;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->line('Lorem: ' . $this->dummy->lorem)
            ->line('Ipsum: ' . $this->dummy->ipsum);
    }
}
