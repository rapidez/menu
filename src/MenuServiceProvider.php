<?php

namespace Rapidez\Menu;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Rapidez\Menu\ViewComponents\MenuComponent;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rapidez');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/rapidez'),
        ], 'views');

        $this->mergeConfigFrom(__DIR__.'/../config/rapidez/menu.php', 'rapidez.menu');

        $this->publishes([
            __DIR__.'/../config/rapidez/menu.php' => config_path('rapidez/menu.php'),
        ], 'config');

        Blade::component('menu', MenuComponent::class);
    }
}
