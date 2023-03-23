<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login',[App\Http\Controllers\loginController::class,'login'])->name('login');
Route::get('/register',[App\Http\Controllers\registerController::class,'register'])->name('register');
 Route::get('/export-product',[App\Http\Controllers\ExcelController::class,'exportProduct'])->name('export-product');
 Route::post('/import-product',[App\Http\Controllers\ExcelController::class,'importProduct'])->name('import-product');

