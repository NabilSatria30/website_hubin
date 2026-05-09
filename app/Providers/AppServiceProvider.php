<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\URL; //ini termasuk
//use Carbon\Carbon; //nyalakan untuk bulan nama

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //jika pakai localhost matikan, jika pakai ngrok nyalakan
        // URL::forceScheme('https');
        //Carbon::setLocale('id'); //nyalakan juga jika ingin muncul nama dalam bulan

    }
}
