<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class LocaleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        if (session()->has('locale') && 
            in_array(session()->get('locale'), config('app.available_locales', ['en', 'es']))) {
            App::setLocale(session()->get('locale'));
        }

    }
}
