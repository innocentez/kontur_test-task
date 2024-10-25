<?php

if (!function_exists('active_route')) {
    function active_route($route): string
    {
        return request()->routeIs($route) ? '--active' : '';
    }
}
