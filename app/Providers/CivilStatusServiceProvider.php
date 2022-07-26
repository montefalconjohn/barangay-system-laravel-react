<?php

namespace App\Providers;

use App\Services\CivilStatuses\CivilStatusService;
use Illuminate\Support\ServiceProvider;

class CivilStatusServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Services\CivilStatuses\CivilStatusServiceInterface', CivilStatusService::class);
    
    }
}
