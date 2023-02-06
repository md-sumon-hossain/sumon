<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ExperienceController;
use App\Http\Controllers\backend\SkillController;
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
Route::post('/login-post',[AuthController::class,'loginPost'])->name('loginPost');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::prefix('/admin')->group(function(){
    Route::name('admin.')->group(function(){
        #dashboard
        Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
        #user
        Route::controller(UserController::class)->group(function(){
            Route::get('/user-profile','profile')->name('profile');
            Route::get('/edit-profile/{id}','edit')->name('profile.edit');
            Route::put('/update-profile/{id}','update')->name('profile.update');
        });
        #Skill
        Route::controller(SkillController::class)->group(function(){
            Route::get('/skill-index','index')->name('skill.index');
            Route::get('/skill-create','create')->name('skill.create');
            Route::post('/skill-store','store')->name('skill.store');
            Route::get('/skill-edit/{id}','edit')->name('skill.edit');
            Route::put('/skill-update/{id}','update')->name('skill.update');
            Route::get('/skill-delete/{id}','delete')->name('skill.delete');
        });
        Route::resource('experience',ExperienceController::class);
    });
});

