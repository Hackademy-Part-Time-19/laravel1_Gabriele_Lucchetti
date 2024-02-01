<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\pageController;
use App\Http\Controllers\homePage;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
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



Route::get('/',[homePage::class,'homepage']) ->name('home');

Route::get('/articoli', [pageController::class,'index'])->name('articoli');

Route::get('/chisono', function () {
    return view('chisono', ['descrizione' => 'Sono Gabriele Lucchetti vengo da Ceccano(FR)']);
})->name('chisono');

Route::get('/articolo/{id}',[pageController::class,'show'])->name('articolo.show');

Route::get('/articolo/categoria/{category}',[pageController::class,'byCategory'])->name('articles.byCategory');

Route::get('contattaci', [ContactController::class, 'contactUs'])->name('contattaci');

Route::post('contattaci/invio',[MailController::class,'sendMail'])->name('messaggio');