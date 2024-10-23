<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::anonymousComponentPath(__DIR__.'/../../resources/views/layouts', 'layout');
        Blade::anonymousComponentPath(__DIR__.'/../../resources/views/ui', 'ui');
        Blade::anonymousComponentPath(__DIR__.'/../../resources/views/widgets', 'widget');
        Blade::anonymousComponentPath(__DIR__.'/../../resources/views/content', 'content');
        Blade::anonymousComponentPath(__DIR__.'/../../resources/views/components');
    }
}
