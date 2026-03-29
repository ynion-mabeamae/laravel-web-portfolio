<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PortfolioController::class, 'index']);
Route::post('/contact', [PortfolioController::class, 'storeMessage'])->name('contact.store');
