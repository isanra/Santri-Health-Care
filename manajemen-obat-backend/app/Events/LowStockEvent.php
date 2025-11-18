<?php

namespace App\Events;

use App\Models\Obat;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LowStockEvent
{
    use Dispatchable, SerializesModels;

    public Obat $obat;

    public function __construct(Obat $obat)
    {
        $this->obat = $obat;
    }
}
