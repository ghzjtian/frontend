<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        https://laravel-china.org/docs/laravel/5.6/blade/1375#displaying-data
//        Blade::withoutDoubleEncoding();

        // 1071 Specified key was too long; max key length is 767 bytes
        //https://laravel-china.org/articles/4195/laravel-54-common-error-specified-key-was-too-long
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
