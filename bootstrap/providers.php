<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\BladeComponentsServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,

    // Modules
    Modules\Lead\Providers\LeadModuleServiceProvider::class,
];
