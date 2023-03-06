<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\AdminLoginController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin/login', [ClothingController::class, 'login'])->name('clothing.order');
Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin', [AdminLoginController::class, 'admin']);
    Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'login']);
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/logout', [AdminLoginController::class, 'logout']);
    Route::get('/admin/clothing/order', [ClothingController::class, 'order'])->name('clothing.order');
    Route::delete('/admin/clothing/order/{id}', [ClothingController::class, 'order'])->name('clothing.hapusOrder');
    Route::resource('/admin/clothing', ClothingController::class);
});
// <!-- Route::get('/admin/clothing/{id}/{slug}', [ClothingController::class, 'edit'])->name('clothing.edit'); -->

// user
Route::get('/', [AppController::class, 'index']);
Route::get('/produk/{id}', [AppController::class, 'show'])->name('user.show');
Route::get('/produk/{id}/pengiriman/create', [AppController::class, 'createPengiriman'])->name('user.dibuat');
Route::get('/produk/{id}/pengiriman', [AppController::class, 'showPengiriman'])->name('user.lihat');
Route::post('/produk/pengiriman', [AppController::class, 'storePengiriman'])->name('user.pengiriman');