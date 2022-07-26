<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BarangayOfficials\BarangayOfficialRepository;

class BarangayOfficialRepositoryProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\BarangayOfficials\BarangayOfficialRepositoryInterface', BarangayOfficialRepository::class);
    }
}
