<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\website\HomeController;
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

#FRONTEND
Route::get('/',[HomeController::class,'home'])->name('home');

#BACKEND
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::prefix('/admin')->group(function(){
    Route::name('admin.')->group(function(){
        #dashboard
        Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
        #user
        Route::controller(UserController::class)->group(function(){
            Route::get('/user-create','create')->name('user.create');
        });
    });
});

