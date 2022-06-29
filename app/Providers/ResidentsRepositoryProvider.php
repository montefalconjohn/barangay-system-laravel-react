<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Residents\ResidentsRepository;

class ResidentsRepositoryProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\Residents\ResidentsRepositoryInterface', ResidentsRepository::class);
    }
}
