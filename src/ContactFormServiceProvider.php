<?php

namespace Vishal\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->make('vishal\contactform\ContactFormController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'contactform');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vishal/contactform'),
            __DIR__.'/Controllers' => app_path('Http/Controllers/vishal'),
        ]);
    }
}
