<?php
namespace App\Observers;

use App\Models\Obat;
use App\Events\LowStockEvent;

class ObatObserver
{
    public function saved(Obat $obat)
    {
        if($obat->stok <= 5){ // threshold, ubah sesuai kebutuhan
            event(new LowStockEvent($obat));
        }
    }
}
