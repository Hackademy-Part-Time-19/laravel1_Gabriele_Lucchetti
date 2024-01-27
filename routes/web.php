<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[\App\Http\Controllers\homePage::class,'homepage']) ->name('home');

Route::get('/articoli', [\App\Http\Controllers\pageController::class,'index'])->name('articoli');

Route::get('/chisono', function () {
    return view('chisono', ['descrizione' => 'Sono Gabriele Lucchetti vengo da Ceccano(FR)']);
})->name('chisono');

Route::get('/articolo/{id}',[\App\Http\Controllers\pageController::class,'show'])->name('articolo');

