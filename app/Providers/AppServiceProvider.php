<?php

namespace App\Providers;

use App\Models\Setting;
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
        //
        $setting = Setting::firstor(function () {
            return Setting::create([
                'title' => 'site_name',
                'description' => 'laravel'
            ]);
        });
        view()->share('setting', $setting);
    }
}
