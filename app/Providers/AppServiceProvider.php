<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Pastikan URL asset yang benar digunakan
        if (config('app.env') !== 'local') {
            \URL::forceScheme('https');
        }
        
        // Pastikan URL storage yang benar
        \Illuminate\Support\Facades\URL::macro('storage', function ($path) {
            return url('storage/' . $path);
        });
    }
}
