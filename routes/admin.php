<?php

use App\Http\Controllers\Admin\GoodsController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\QiniuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProjectController;
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

    Route::prefix('project')->group(function() {
        Route::get('/list', [ProjectController::class, 'projectList'])->name('admin.project.list');
        Route::get('/create', [ProjectController::class, 'createProject'])->name('admin.project.create');
        Route::get('/update', [ProjectController::class, 'updateProject'])->name('admin.project.update');
        Route::post('/add', [ProjectController::class, 'addProject'])->name('admin.project.add');
        Route::post('/delete', [ProjectController::class, 'deleteProject'])->name('admin.project.delete');
        Route::post('/edit', [ProjectController::class, 'editProject'])->name('admin.project.edit');
    });

    Route::prefix('goods')->group(function() {
        Route::get('/list', [GoodsController::class, 'goodsList'])->name('admin.goods.list');
        Route::post('/remove', [GoodsController::class, 'goodsRemove'])->name('admin.goods.delete');
        Route::get('/add', [GoodsController::class, 'addGoodsView'])->name('admin.goods.add');
        Route::post('/create', [GoodsController::class, 'createGoods'])->name('admin.goods.create');
        Route::get('/edit', [GoodsController::class, 'editGoods'])->name('admin.goods.edit');
        Route::post('/update', [GoodsController::class, 'updateGoods'])->name('admin.goods.update');
    });

    Route::prefix('image')->group(function() {
        Route::get('/list', [ImageController::class, 'imageList'])->name('admin.image.list');
        Route::get('/add', [ImageController::class, 'imageAddView'])->name('admin.image.add');
        Route::post('/create', [ImageController::class, 'imageCreate'])->name('admin.image.create');
        Route::post('/delete', [ImageController::class, 'imageRemove'])->name('admin.image.remove');
        Route::post('/update', [ImageController::class, 'imageUpdate'])->name('admin.image.update');
        Route::get('/edit', [ImageController::class, 'imagEditView'])->name('admin.image.edit');
    });

    Route::get('/system', [IndexController::class, 'systemView'])->name('admin.system.view');
    Route::post('/system/udpate', [IndexController::class, 'updateSystem'])->name('admin.system.update');

    Route::get('/about', [IndexController::class, 'about'])->name('admin.about');
    Route::post('/about/update', [IndexController::class, 'updateAbout'])->name('admin.about.update');

    Route::get('/qiniu/token', [QiniuController::class, 'getToken'])->name('admin.qiniu.token');
});


