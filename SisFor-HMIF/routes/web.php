<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeControllerUsers;

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


Route::get('/', [HomeControllerUsers::class, 'index'])->name('home')->withoutMiddleware(['auth']);
Route::get('/', [PostController::class, 'indexUser'])->name('home');
Route::get('/home', [HomeControllerUsers::class, 'index'])->name('home')->middleware('auth');

Route::middleware(['auth', 'admin'])->get('/adminHM', [App\Http\Controllers\HomeControllerAdmin::class, 'index'])->name('homeAdmin');

Route::get('/admin/users', [UserController::class, 'index'])->name('userList');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/berita', [PostController::class, 'index'])->name('posts.index');
    Route::get('/berita/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/berita', [PostController::class, 'store'])->name('posts.store');
    Route::get('/berita/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/berita/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/berita/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
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

Route::get('/home', [App\Http\Controllers\HomeControllerUsers::class, 'index'])->name('home');
