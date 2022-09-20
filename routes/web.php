<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DetailController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NextOfKinController;
use App\Http\Controllers\RefereeController;
use App\Http\Controllers\SecurityController;
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
Route::resource('tenants', TenantController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('departments', DepartmentController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('buildings', BuildingController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('users', UserController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('assets', AssetController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('items', ItemController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('members', MemberController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('securities', SecurityController::class)->middleware(['auth', 'verified', 'is_admin']);
Route::resource('details', DetailController::class)->middleware(['auth', 'verified', 'is_admin']);

Route::get('new/{tenant}/member', [App\Http\Controllers\MemberController::class, 'new'])->name('new.tenant.member')->middleware('auth', 'verified', 'is_admin');
Route::get('families/tenant', [App\Http\Controllers\TenantController::class, 'families'])->name('families')->middleware('auth', 'verified', 'is_admin');
Route::get('singles/tenant', [App\Http\Controllers\TenantController::class, 'singles'])->name('singles')->middleware('auth', 'verified', 'is_admin');
Route::get('t/department_id/{id}', [App\Http\Controllers\TenantController::class, 'department'])->name('department.tenant')->middleware('auth', 'verified', 'is_admin');
Route::get('t/building_id/{id}', [App\Http\Controllers\TenantController::class, 'building'])->name('building.tenant')->middleware('auth', 'verified', 'is_admin');

Route::get('error/404', [App\Http\Controllers\ErrorController::class, 'index'])->name('unAuthorized')->middleware('auth', 'verified');


require __DIR__.'/auth.php';
