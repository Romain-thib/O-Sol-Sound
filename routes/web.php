<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/statiques/welcome');
})->name("accueil");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/home', function () {
    return view('profil.show');
})->name("home");

Route::get('/profil', [UserController::class, 'show'])->name('profil.show');
Route::get('/home', fn() => redirect()->route('profil.show'));

