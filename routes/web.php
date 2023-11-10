<?php

use App\Http\Controllers\HomeController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/' , [HomeController::class , 'index']);
Route::get('store' , [HomeController::class , 'store'])->name('store');
Route::get('update/{id}' , [HomeController::class , 'update'])->name('update');
