<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/games', [GameController::class, 'index'])->name('games.index');
    Route::post('/games/search', [GameController::class, 'startSearch'])->name('games.search');
    Route::post('/games/call', [GameController::class, 'initiateCall'])->name('games.call');
});
