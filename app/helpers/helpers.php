<?php

use Illuminate\Support\Facades\Route;


function isActive($route_name) {
    return (Route::currentRouteName() == $route_name) ? 'active' : '';
}
