<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\EmploymentStatuses\EmploymentStatusRepository;

class EmploymentStatusRepositoryProvider extends ServiceProvider
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
        $this->app->bind('App\Repositories\EmploymentStatuses\EmploymentStatusRepositoryInterface', EmploymentStatusRepository::class);
    }
}
