<?php

// web.php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameAccountController;
use App\Http\Controllers\MatchmakingController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Routes d'authentification
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    // Déconnexion
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Page d'accueil après l'authentification
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Liaison des comptes de jeu
    Route::post('/link-game-account/{gameType}/{gameAccountId}', [GameAccountController::class, 'link']);

    // Matchmaking
    Route::post('/start-search', [MatchmakingController::class, 'startSearch']);
    Route::post('/stop-search', [MatchmakingController::class, 'stopSearch']);
    Route::post('/match-found/{matchedUser}', [MatchmakingController::class, 'matchFound']);

    // Profil utilisateur
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');
});
