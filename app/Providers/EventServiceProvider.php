<?php

namespace App\Providers;

use App\Events\DummyCronEvent;
use App\Events\DummyUpdatedEvent;
use App\Listeners\SendMail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        DummyUpdatedEvent::class => [
            SendMail::class,
        ],
        DummyCronEvent::class => [
            SendMail::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
