<?php

use Illuminate\Support\Facades\Route;


function isActive($route_name, $class) {
    $current_route_name = Route::currentRouteName();
    $class_return = '';

    if (is_array($route_name)) {
        if (in_array($current_route_name, $route_name)) {
            $class_return = $class;
        }

    } else {
        if ($current_route_name == $route_name) {
            $class_return = $class;
        }
    }

    return $class_return;
}
