<?php

namespace App\Providers;
use\App\Category;
use View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer('font-end.include.header',function ($view){
            $view->with('categories',Category::where('status','1')->get());
        });
    }
}
