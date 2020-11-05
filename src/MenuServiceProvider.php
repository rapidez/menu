<?php

namespace Rapidez\Menu;

use Rapidez\Menu\ViewComponents\MenuComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'menu');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/menu'),
        ], 'views');

        $this->mergeConfigFrom(__DIR__.'/config/menu.php', 'menu');

        $this->publishes([
            __DIR__.'/config/menu.php' => config_path('menu.php'),
        ], 'config');

        Blade::component('menu', MenuComponent::class);
    }
}
