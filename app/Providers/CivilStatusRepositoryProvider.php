<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CivilStatuses\CivilStatusRepository;

class CivilStatusRepositoryProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\CivilStatuses\CivilStatusRepositoryInterface', CivilStatusRepository::class);
    }
}
