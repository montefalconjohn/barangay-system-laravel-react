<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Residents\ResidentService;

class ResidentServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Services\Residents\ResidentServiceInterface', ResidentService::class);
    
    }
}
