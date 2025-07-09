<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PriceCalculator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PriceCalculator::class, function () {
            return new PriceCalculator();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
