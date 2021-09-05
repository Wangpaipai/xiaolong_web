<?php

use App\Http\Controllers\Admin\IndexController;
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

    Route::get('/home', [IndexController::class, 'index'])->name('admin.home');

    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/logOut', [UserController::class, 'logOut'])->name('admin.logout');


    Route::prefix('users')->group(function() {
        Route::get('/index', [UserController::class, 'userList'])->name('admin.user.index');
        Route::post('/delete', [UserController::class, 'userDelete'])->name('admin.user.delete');
        Route::get('/detail', [UserController::class, 'userDetail'])->name('admin.user.detail');
        Route::post('/edit', [UserController::class, 'userEdit'])->name('admin.user.edit');
        Route::get('/create/create', [UserController::class, 'userCreate'])->name('admin.user.create');
        Route::post('/register', [UserController::class, 'register'])->name('admin.register');
    });

    Route::get('/system', [IndexController::class, 'systemView'])->name('admin.system.view');
    Route::post('/system/udpate', [IndexController::class, 'updateSystem'])->name('admin.system.update');

    Route::get('/about', [IndexController::class, 'about'])->name('admin.about');
    Route::post('/about/update', [IndexController::class, 'updateAbout'])->name('admin.about.update');
});


