<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);