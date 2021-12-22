<?php

namespace App\Providers;

use App\Services\BarangayOfficials\BarangayOfficialsService;
use Illuminate\Support\ServiceProvider;

class BarangayOfficialsServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Services\BarangayOfficials\BarangayOfficialsServiceInterface', BarangayOfficialsService::class);
    }
}
