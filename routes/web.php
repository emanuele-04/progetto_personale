<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/contattami', [PublicController::class, 'contattami'])->name('contattami');

Route::get('/esperienze', [PublicController::class, 'esperienze'])->name('esperienze');