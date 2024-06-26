<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Route::get('/', HomeController::class);

Route::prefix('berita')->group(function() {
    Route::get('/', [PostController::class, 'index']);
    Route::get('/detail/{id}', [PostController::class, 'show']);
});

Route::prefix('peraturan')->group(function() {
    Route::get('/', [PeraturanController::class, 'index']);
    Route::get('/detail/{id}', [PeraturanController::class, 'show']);
});

Route::get('sejarah', [PagesController::class, 'sejarah']);
Route::get('dasar-hukum', [PagesController::class, 'dasarhukum']);
Route::get('visi-misi', [PagesController::class, 'visi']);
Route::get('ikm', [PagesController::class, 'ikm']);

Route::get('/cari', SearchController::class);

Route::get('/auth/google/redirect', [AuthGoogleController::class, 'redirect']);
Route::get('/auth/google/callback', [AuthGoogleController::class, 'callback']);
