<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Models\About;
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

// Route::get('/', [HomeController::class, 'halamandepan'])->name('home');
Auth::routes(['register' => false]);

Route::get('/', [FrontController::class, 'index']);
Route::post('/store', [FrontController::class, 'store']);

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserController::class], 'edit')->name('profile.edit');
    Route::post('/profile', [UserController::class], 'update')->name('profile.update');
    

    // Kategori
    Route::get('/menu/kategori/', [KategoriController::class, 'index'])->name('menu.kategori');
    Route::get('/menu/kategori/create', [KategoriController::class, 'create'])->name('menu.kategori.create');
    Route::post('/menu/kategori/create', [KategoriController::class, 'store'])->name('menu.kategori.create');
    Route::get('/menu/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('menu.kategori.edit');
    Route::post('/menu/kategori/{id}/update', [KategoriController::class, 'update'])->name('menu.kategori.update');
    Route::post('/menu/kategori/{id}/delete', [KategoriController::class, 'destroy'])->name('menu.kategori.delete');

    // Pesan
    Route::get('/menu/kontak/', [ContactController::class, 'index'])->name('menu.kontak');

    // Produk
    Route::get('/menu/produk/', [ProdukController::class, 'index'])->name('menu.produk');
    Route::get('/menu/produk/create', [ProdukController::class, 'create'])->name('menu.produk.create');
    Route::post('/menu/produk/create', [ProdukController::class, 'store'])->name('menu.produk.store');
    Route::get('/menu/produk/{id}/edit', [ProdukController::class, 'edit'])->name('menu.produk.edit');
    Route::post('/menu/produk/{id}/update', [ProdukController::class, 'update'])->name('menu.produk.update');
    Route::post('/menu/produk/{id}/delete', [ProdukController::class, 'destroy'])->name('menu.produk.delete');
    
    // About
    Route::get('/menu/about/', [AboutController::class, 'index'])->name('menu.about');
    Route::get('/menu/about/create', [AboutController::class, 'create'])->name('menu.about.create');
    Route::post('/menu/about/create', [AboutController::class, 'store'])->name('menu.about.create');
    Route::get('/menu/about/{id}/edit', [AboutController::class, 'edit'])->name('menu.about.edit');
    Route::post('/menu/about/{id}/update', [AboutController::class, 'update'])->name('menu.about.update');
    Route::post('/menu/about/{id}/delete', [AboutController::class, 'destroy'])->name('menu.about.delete');
    
    // Slider
    Route::get('/menu/slider/', [SliderController::class, 'index'])->name('menu.slider');
    Route::get('/menu/slider/create', [SliderController::class, 'create'])->name('menu.slider.create');
    Route::post('/menu/slider/create', [SliderController::class, 'store'])->name('menu.slider.create');
    Route::get('/menu/slider/{id}/edit', [SliderController::class, 'edit'])->name('menu.slider.edit');
    Route::post('/menu/slider/{id}/update', [SliderController::class, 'update'])->name('menu.slider.update');
    Route::post('/menu/slider/{id}/delete', [SliderController::class, 'destroy'])->name('menu.slider.delete');
    
    

    // Profil web
    Route::get('/menu/profil/', [ProfilController::class, 'index'])->name('menu.profil');
    Route::get('/menu/profil/create', [ProfilController::class, 'create'])->name('menu.profil.create');
    Route::post('/menu/profil/create', [ProfilController::class, 'store'])->name('menu.profil.create');
    Route::get('/menu/profil/{id}/edit', [ProfilController::class, 'edit'])->name('menu.profil.edit');
    Route::post('/menu/profil/{id}/update', [ProfilController::class, 'update'])->name('menu.profil.update');

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
