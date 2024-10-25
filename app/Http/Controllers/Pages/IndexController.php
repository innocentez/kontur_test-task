<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __invoke()
    {
        return view('pages.main');
    }
}
