<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        if ($this->app->environment('local')) {
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        } elseif ($this->app->environment('production')){
            $this->app->register('Arcanedev\LogViewer\LogViewerServiceProvider');
        }
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
