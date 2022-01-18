<?php

namespace App\Providers;

use App\Services\Position\PositionService;
use Illuminate\Support\ServiceProvider;

class PositionServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Services\Position\PositionServiceInterface', PositionService::class);
    }
}
