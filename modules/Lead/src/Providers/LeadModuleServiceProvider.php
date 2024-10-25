<?php

namespace Modules\Lead\Providers;

use Illuminate\Support\ServiceProvider;

class LeadModuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->mergeConfigFrom(__DIR__.'/../../config/lead.php', 'lead');
    }
}
