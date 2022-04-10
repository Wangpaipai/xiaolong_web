<?php

use App\Http\Controllers\Wap\AboutController;
use App\Http\Controllers\Wap\IndexController;
use App\Http\Controllers\Wap\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/map4565erwedfs', [IndexController::class, 'map'])->name('wap.map');
Route::get('/', [IndexController::class, 'index'])->name('wap.index');
Route::get('/about', [AboutController::class, 'index'])->name('wap.about');
Route::get('/service', [ServiceController::class, 'index'])->name('wap.service');
