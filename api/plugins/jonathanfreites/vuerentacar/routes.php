<?php

use JonathanFreites\Vuerentacar\Models\Vehicle;

Route::get('vehicles', function () {
    $vehicles = Vehicle::all();

    return $vehicles;
});