<?php

use App\Http\Controllers\MaestroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::group(['prefix'=> 'maestro'], function () {
    Route::get('/m',[MaestroController::class, 'get']);
});