<?php

namespace App\Providers;

use App\Services\BarangayOfficials\BarangayOfficialService;
use Illuminate\Support\ServiceProvider;

class BarangayOfficialServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Services\BarangayOfficials\BarangayOfficialServiceInterface', BarangayOfficialService::class);
    }
}
