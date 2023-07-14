<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeControllerUsers;
use App\Http\Controllers\HomeControllerKepengurusan;
use App\Http\Controllers\Admin\KepengurusanController;
use App\Http\Controllers\Admin\DivisiController;
use App\Http\Controllers\Auth\GoogleController; // Tambahkan ini

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

Auth::routes();

Route::get('login/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);

Route::get('/', [HomeControllerUsers::class, 'index'])->name('home')->withoutMiddleware(['auth']);
Route::get('/', [PostController::class, 'indexUser'])->name('home');
Route::get('/home', [HomeControllerUsers::class, 'index'])->name('home')->middleware('auth');

Route::get('/kepengurusan', [HomeControllerKepengurusan::class, 'index'])->name('home')->withoutMiddleware(['auth']);
Route::get('/kepengurusan', [KepengurusanController::class, 'indexUser'])->name('home')->withoutMiddleware(['auth']);
Route::middleware(['auth', 'admin'])->get('/adminHM', [App\Http\Controllers\HomeControllerAdmin::class, 'index'])->name('homeAdmin');

Route::get('/admin/users', [UserController::class, 'index'])->name('userList');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/berita', [PostController::class, 'index'])->name('posts.index');
    Route::get('/berita/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/berita', [PostController::class, 'store'])->name('posts.store');
    Route::get('/berita/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/berita/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/berita/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/kepengurusan', [KepengurusanController::class, 'index'])->name('kepengurusan.index');
    Route::get('/kepengurusan/create', [KepengurusanController::class, 'create'])->name('kepengurusan.create');
    Route::post('/kepengurusan', [KepengurusanController::class, 'store'])->name('kepengurusan.store');
    Route::get('/kepengurusan/{kepengurusan}/edit', [KepengurusanController::class, 'edit'])->name('kepengurusan.edit');
    Route::put('/kepengurusan/{kepengurusan}', [KepengurusanController::class, 'update'])->name('kepengurusan.update');
    Route::delete('/kepengurusan/{kepengurusan}', [KepengurusanController::class, 'destroy'])->name('kepengurusan.destroy');

    Route::get('/divisi', [divisiController::class, 'index'])->name('divisi.index');
    Route::get('/divisi/create', [divisiController::class, 'create'])->name('divisi.create');
    Route::post('/divisi', [divisiController::class, 'store'])->name('divisi.store');
    Route::get('/divisi/{divisi}/edit', [divisiController::class, 'edit'])->name('divisi.edit');
    Route::put('/divisi/{divisi}', [divisiController::class, 'update'])->name('divisi.update');
    Route::delete('/divisi/{divisi}', [divisiController::class, 'destroy'])->name('divisi.destroy');
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

// Tambahkan route untuk menampilkan form registrasi
Route::get('/regis', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/regis', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Tambahkan route untuk menampilkan halaman login setelah registrasi berhasil
Route::get('/register-success', function () {
    return view('auth.register-success');
});

Auth::routes();
