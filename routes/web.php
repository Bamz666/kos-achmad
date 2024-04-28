<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PesanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/success', function () {
    return view('front/success');
})->name('front.success')->middleware('auth');

Route::get('/fasilitas', function () {
    return view('front/fasilitas');
})->name('fasilitas');

Route::get('/about', function () {
    return view('front/about');
})->name('about');

Route::get('/', [KamarController::class, 'index'])->name('awal');
Route::get('/kosan', [KamarController::class, 'index_kosan'])->name('kosan');
Route::get('/dalam', [KamarController::class, 'index_km_dalam'])->name('dalam');
Route::get('/luar', [KamarController::class, 'index_km_luar'])->name('luar');
Route::get('/show/{id}', [KamarController::class, 'show'])->name('show')->middleware('auth');
Route::post('/store/{id}', [KamarController::class, 'store'])->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/data', [AdminController::class, 'index'])->name('datakamar');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/back/store', [AdminController::class, 'store'])->name('back.store');
    Route::get('/destroy/{id}', [AdminController::class, 'destroy'])->name('destroy');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('back.update');
});
