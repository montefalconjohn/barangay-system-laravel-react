<?php

namespace App\Providers;

use App\Repositories\Barangays\BarangayRepository;
use Illuminate\Support\ServiceProvider;

class BarangayRepositoryProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\Barangays\BarangayRepositoryInterface', BarangayRepository::class);
    }
}
