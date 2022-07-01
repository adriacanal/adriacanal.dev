<?php

namespace App\Providers;

use Blade;
use Config;
use Illuminate\Support\ServiceProvider;
use Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Set a default cookie prefix
         * Spec https://tools.ietf.org/html/draft-ietf-httpbis-cookie-prefixes-00#section-3
         */
        if ((!preg_match('/^__/', Config::get('session.cookie'))) && (Config::get('session.secure') == true) && (Request::secure())) {
            // Set the host prefix
            if (strtolower(Config::get('session.cookie_prefix')) === 'host') {
                // Set the host prefix
                Config::set('session.cookie', '__Host-' . Config::get('session.cookie'));
                Config::set('session.secure', true);
                Config::set('session.path', '/');
            } elseif (strtolower(Config::get('session.cookie_prefix')) !== 'none') {
                // Set the secure prefix
                Config::set('session.cookie', '__Secure-' . Config::get('session.cookie'));
                Config::set('session.secure', true);
            }
        }

        Blade::directive('vite', function () {
            return vite();
        });
    }
}
