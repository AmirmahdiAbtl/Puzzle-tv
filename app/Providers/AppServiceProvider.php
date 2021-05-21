<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\Course;

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
    //    View::share('recent_course',Course::orderBy('created_at','desc')->limit('10')->get());
        // View::share('popular_course',Course::orderBy('views','desc')->limit('10')->get());
    }
}
