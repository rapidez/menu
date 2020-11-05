# Rapidez Menu

This package provides a menu Blade component which uses the default Magento categories:
```
<x-menu/>
```

## Configuration

You can change the classes with the configuration file by publishing it with `php artisan vendor:publish --provider="Rapidez\Menu\MenuServiceProvider" --tag=config`.

## Full control

If you need more control you can publish the views as well with: `php artisan vendor:publish --provider="Rapidez\Menu\MenuServiceProvider" --tag=views`.
