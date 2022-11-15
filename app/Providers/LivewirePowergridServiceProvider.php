<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PowerComponents\LivewirePowerGrid\Button;

class LivewirePowergridServiceProvider extends ServiceProvider
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
        Button::macro('icon', function (string $icon) {
            $this->dynamicProperties['icon'] = $icon;

            return $this;
        });
    }
}
