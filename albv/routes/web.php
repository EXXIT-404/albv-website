<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DossierController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// Routes d'authentification
Auth::routes();

// Route de déconnexion personnalisée
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout')->middleware('auth');

// Routes pour les pages
Route::get('/page2', function () {
    return view('page2');
})->name('page2');

// Routes protégées
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::get('/dossiers', [DossierController::class, 'index'])->name('dossiers.index');
