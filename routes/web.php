<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EleveController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ActiviteController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('eleves', EleveController::class);
Route::resource('clubs', ClubController::class);
Route::resource('activites', ActiviteController::class);
