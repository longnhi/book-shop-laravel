<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Publisher;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \View::composer('shop.layouts.header', function ($view) {
            $categories= Category::all();
            $view->with('categories',  $categories);
        });

        \View::composer('shop.layouts.header', function ($view) {
            $main_publishers= Publisher::all();
            $view->with('main_publishers',  $main_publishers);
        });
    }
}
