<?php

namespace App\Listeners;

use App\Dummy;
use App\Events\Claim\ClaimEventInterface;
use App\Events\DummyUpdatedEvent;
use App\Notifications\DummyUpdated;
use App\Qanoa\Exceptions\DocumentException;
use Illuminate\Support\Facades\Notification;

class SendMail
{
    /**
     * Handle the event.
     *
     * @param DummyUpdatedEvent $event
     *
     * @throws DocumentException
     */
    public function handle($event)
    {
        Notification::route('mail', [
            'luc@zeeleweb.nl' => 'Luc Zeelenberg',
        ])->notify(new DummyUpdated($event->getDummy()));
    }
}
