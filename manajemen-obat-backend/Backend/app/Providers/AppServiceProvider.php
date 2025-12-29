<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Obat;
use App\Observers\ObatObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Fix migration default string length (compatibility)
        Schema::defaultStringLength(191);

        // Register model observers
        // Pastikan App\Observers\ObatObserver ada
        Obat::observe(ObatObserver::class);
    }
}
