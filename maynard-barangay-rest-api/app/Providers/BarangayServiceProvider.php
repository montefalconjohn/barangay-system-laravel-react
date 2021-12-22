<?php

namespace App\Providers;

use App\Services\Barangay\BarangayService;
use Illuminate\Support\ServiceProvider;

class BarangayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Barangay\BarangayServiceInterface', BarangayService::class);
    }
}
