<?php

namespace App\Providers;

use App\Picture;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $filename = Picture::get()->last() ? Picture::get()->last()->filename : 'No Picture';
        View::share('lastPostedPicture', $filename);
    }
}
