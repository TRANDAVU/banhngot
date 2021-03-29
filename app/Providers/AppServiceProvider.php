<?php

namespace App\Providers;

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
        $this->app->singleton(
            \App\Repositories\admin\qlUser\userRepositoryInterface::class,
            \App\Repositories\admin\qlUser\userRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.Admin_master'],function($view){
            $menus=config('menu');
            $view->with('menus',$menus);
        });
    }
}
