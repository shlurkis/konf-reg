<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/client', [ClientController::class, 'index']);
Route::get('/client/conference/{id}', [ClientController::class, 'show']);
Route::post('/client/conference/register/{id}', [ClientController::class, 'register']);

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/conference/{id}', [EmployeeController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::get('/conferences', [ConferenceController::class, 'index']);
    Route::get('/conference/create', [ConferenceController::class, 'create']);
    Route::post('/conference', [ConferenceController::class, 'store']);
    Route::get('/conference/edit/{id}', [ConferenceController::class, 'edit']);
    Route::put('/conference/{id}', [ConferenceController::class, 'update']);
    Route::delete('/conference/{id}', [ConferenceController::class, 'destroy']);
});
