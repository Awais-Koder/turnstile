<?php

namespace Turnstile\Turnstile\Providers;
use Illuminate\Support\ServiceProvider;

class TurnstileServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('turnstile', function () {
            return new \Turnstile\Turnstile\Turnstile();
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/turnstile.php', 'turnstile');
    }

    public function boot()
    {
        $this->publishes([
            base_path('vendor\turnstile\turnstile\src\config\turnstile.php') => config_path('turnstile.php'),
            base_path('vendor\turnstile\turnstile\src\Rules\TurnstileVerification.php') => app_path('Rules/TurnstileVerification.php'),
        ], 'turnstile-config');
    }
}
