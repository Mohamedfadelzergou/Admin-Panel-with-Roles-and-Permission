<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user',App\Http\Controllers\UserController::class);
Route::get('/profile',[App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::post('/profile',[App\Http\Controllers\UserController::class, 'postProfile'])->name('user.postProfile');
Route::get('/password/change',[App\Http\Controllers\UserController::class, 'getPassword'])->name('userGetPassword');
Route::post('/password/change',[App\Http\Controllers\UserController::class, 'postPassword'])->name('userPostPassword');
Route::resource('permission',App\Http\Controllers\PermissionController::class);
Route::resource('role',App\Http\Controllers\RoleController::class);
//axios Routes
Route::get('/getPermission',[App\Http\Controllers\PermissionController::class,'getAllPermission']);
Route::post('/postRole',[App\Http\Controllers\RoleController::class,'store']);
