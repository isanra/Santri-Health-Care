<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Events\LowStockEvent;
use App\Listeners\DispatchLowStockJob;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // contoh event Laravel default
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // Low stock event -> dispatch job listener
        LowStockEvent::class => [
            DispatchLowStockJob::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        parent::boot();
    }
}
