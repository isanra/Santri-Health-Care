<?php

namespace App\Listeners;

use App\Events\LowStockEvent;
use App\Jobs\SendLowStockJob;

class DispatchLowStockJob
{
    public function handle(LowStockEvent $event)
    {
        // dispatch job ke queue (async)
        SendLowStockJob::dispatch($event->obat);
    }
}
