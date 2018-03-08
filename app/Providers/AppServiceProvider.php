<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MenuModel as MenuModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $menuModel = new MenuModel();
        $menu = $menuModel->readTopMenu();
        view()->composer('common.layout',function($view)use($menu){
            $view->with('menu',$menu);
        });
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
