<?php

use App\Http\Controllers\Pages\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('main');
