<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CityService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CityService::class, function ($app) {
            return new CityService();
        });
    }

    public function boot()
    {
        //
    }
}
