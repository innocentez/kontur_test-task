<?php

use Illuminate\Support\Facades\Route;
use Modules\Lead\Http\Controllers\LeadController;

Route::group(['prefix' => 'lead', 'as' => 'lead'], function ()
{
    Route::post('create', [LeadController::class, 'store'])->name('.store');
});
