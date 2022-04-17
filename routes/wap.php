<?php

use App\Http\Controllers\Wap\AboutController;
use App\Http\Controllers\Wap\GoodsController;
use App\Http\Controllers\Wap\IndexController;
use App\Http\Controllers\Wap\ProjectController;
use App\Http\Controllers\Wap\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/map4565erwedfs', [IndexController::class, 'map'])->name('wap.map');
Route::get('/', [IndexController::class, 'index'])->name('wap.index');
Route::get('/about', [AboutController::class, 'index'])->name('wap.about');
Route::get('/service', [ServiceController::class, 'index'])->name('wap.service');
Route::get('/project/list', [ProjectController::class, 'index'])->name('wap.project.list');
Route::get('/project/detail/{id}', [ProjectController::class, 'detail'])->name('wap.project.detail');
Route::get('/goods/list', [GoodsController::class, 'index'])->name('wap.goods.list');
Route::get('/goods/detail/{id}', [GoodsController::class, 'detail'])->name('wap.goods.detail');
