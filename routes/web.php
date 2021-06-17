<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');

