<?php

use Illuminate\Support\Facades\Route;


function isActive($route_name, $class) {
    return (Route::currentRouteName() == $route_name) ? $class : '';
}
