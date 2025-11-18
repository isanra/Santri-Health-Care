<?php

namespace App\Jobs;

use App\Models\Obat;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendLowStockJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected Obat $obat;

    public function __construct(Obat $obat)
    {
        $this->obat = $obat;
    }

    public function handle()
    {
        // contoh kirim webhook; set LOW_STOCK_WEBHOOK di .env jika mau
        $webhook = config('services.low_stock_webhook', env('LOW_STOCK_WEBHOOK'));
        $payload = [
            'id' => $this->obat->id,
            'nama_obat' => $this->obat->nama_obat,
            'stok' => $this->obat->stok,
            'kategori' => $this->obat->kategori,
        ];

        if ($webhook) {
            try {
                Http::timeout(5)->post($webhook, $payload);
            } catch (\Throwable $e) {
                // log error, tapi jangan crash job
                \Log::warning('LowStock webhook failed: '.$e->getMessage(), $payload);
            }
        }

        // Di sini bisa juga kirim email / notifikasi internal
    }
}
