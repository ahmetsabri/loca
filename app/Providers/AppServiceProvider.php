<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        app()->setLocale('tr');
        if (!app()->isLocal()) {
            URL::forceScheme('https');
        }
        Model::preventLazyLoading(app()->isLocal());
    }
}
