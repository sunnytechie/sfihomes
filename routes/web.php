<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\DepartmentController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);
//Route::get('/dashboard/{any}', [HomeController::class, 'index'])->where('any', '.*')->middleware(['auth', 'verified']);

//route resource
Route::resource('tenants', TenantController::class)->middleware(['auth', 'verified']);
Route::resource('departments', DepartmentController::class)->middleware(['auth', 'verified']);
Route::resource('buildings', BuildingController::class)->middleware(['auth', 'verified']);
Route::resource('users', UserController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
