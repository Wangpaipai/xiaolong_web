<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('admin.login');

Route::post('/login/store', [UserController::class, 'login'])->name('admin.login.store');

Route::middleware(['auth_check'])->group(function() {

    Route::get('/home', function () {
        return view('admin.index');
    })->name('admin.home');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/logOut', [UserController::class, 'logOut'])->name('admin.logout');

    Route::post('/register', [UserController::class, 'register'])->name('admin.register');
});


