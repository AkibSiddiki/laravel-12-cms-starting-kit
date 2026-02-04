<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Back\CkEditorUploadController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->get('/demo/edit-create-page', function () {
    return view('demo.demo-edit-create-page');
})->name('demo.edit-create-page');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('/upload/ckeditor', [CkEditorUploadController::class, 'store'])->name('upload.ckeditor');
});

// Protected admin routes
Route::middleware('auth')->prefix('admin')->name('back.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // user
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::post('/update/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('delete');
    });
});
