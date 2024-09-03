<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
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



Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/product', [UserController::class, 'product'])->name('product');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::post('/maildata', [MailController::class, 'Maildata'])->name('maildata');


//authentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('form-login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('authAdmin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('Dashboard');
    Route::post('/admin/upload-banner', [AdminController::class, 'uploadBanner'])->name('admin.upload.banner');
    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::post('/admin/galeri', [GaleriController::class, 'create'])->name('galeri.create');
    Route::delete('/admin/galeri/{id}', [GaleriController::class, 'delete'])->name('galeri.delete');
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::post('/admin/kategori', [KategoriController::class, 'create'])->name('kategori.create');
    Route::put('/admin/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/admin/kategori/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::get('/admin/produk', [ProdukController::class, 'index'])->name('produk');
    Route::post('/admin/produk', [ProdukController::class, 'create'])->name('produk.create');
    Route::delete('/admin/produk/{id}', [ProdukController::class, 'delete'])->name('produk.delete');
    Route::put('/admin/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
});
