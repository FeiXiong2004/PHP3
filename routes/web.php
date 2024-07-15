<?php

use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\CategoryController;
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
//Admin
Route::prefix('admin')->as('admin.')->group(function () {
    Route::prefix('categories')->as('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');

    });
    Route::prefix('books')->as('books.')->group(function () {
        Route::get('/', [BooksController::class, 'index']);
        Route::get('/create', [BooksController::class, 'create'])->name('create');
        Route::post('/store', [BooksController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BooksController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [BooksController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [BooksController::class, 'destroy'])->name('delete');

    });
    
});