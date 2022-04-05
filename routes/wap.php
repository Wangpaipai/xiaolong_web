<?php

use App\Http\Controllers\Wap\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/map4565erwedfs', [IndexController::class, 'map'])->name('wap.map');
Route::get('/', [IndexController::class, 'index'])->name('wap.index');
