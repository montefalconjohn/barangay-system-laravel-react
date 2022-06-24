<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Citizenship\CitizenshipRepository;

class CitizenshipRepositoryProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\Citizenship\CitizenshipRepositoryInterface', CitizenshipRepository::class);
    }
}
