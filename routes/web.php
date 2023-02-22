<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ClothingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/admin/clothing', ClothingController::class);
// <!-- Route::get('/admin/clothing/{id}/{slug}', [ClothingController::class, 'edit'])->name('clothing.edit'); -->

// user
Route::get('/', [AppController::class, 'index']);