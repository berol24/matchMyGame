<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::middleware('auth:api')->group(function () {
    Route::get('/user', [UserController::class, 'getUser'])->name('api.user.get');
    // Ajoutez d'autres routes API si nécessaire
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::middleware('auth:api')->post('logout', 'AuthController@logout');

