<?php

namespace App\Providers;

use App\Repositories\Position\PositionRepository;
use Illuminate\Support\ServiceProvider;

class PositionRepositoryProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\Position\PositionRepositoryInterface', PositionRepository::class);
    }
}
