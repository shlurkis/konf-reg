<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/client', [ClientController::class, 'index']);
Route::get('/client/conference/{id}', [ClientController::class, 'show']);
Route::post('/client/register/{id}', [ClientController::class, 'register']);
