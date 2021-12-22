<?php

namespace App\Providers;

use App\Repositories\BarangayRepository;
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
        $this->app->bind('App\Repositories\BarangayRepositoryInterface', BarangayRepository::class);
    }
}
