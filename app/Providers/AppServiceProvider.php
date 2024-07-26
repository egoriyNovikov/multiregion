<?php

namespace App\Providers;

use App\Services\CityService;
use App\Services\PageService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CityService::class, function ($app) {
            return new CityService();
        });
        $this->app->singleton(PageService::class, function ($app) {
            return new PageService();
        });
    }

    public function boot()
    {
        //
    }
}
