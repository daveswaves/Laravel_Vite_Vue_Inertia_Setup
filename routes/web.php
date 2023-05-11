<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', ['time' => date('H:i:s, d M Y'),]);
});

/* 
Note:
Using 'intertia()' saves having to use 'Inertia::render()', which requires a 'use Inertia\ Inertia;' import.
*/
