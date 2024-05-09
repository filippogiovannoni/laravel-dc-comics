<?php

use App\Http\Controllers\ComicController;
use App\Models\Comic;
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
    return view('guests.welcome');
})->name('home');

Route::get('/admin/comics', [ComicController::class, 'index'])->name('admin.comics.index');

Route::get('/admin/comics/create', [ComicController::class, 'create'])->name('admin.comics.create');

Route::post('/admin/comics', [ComicController::class, 'store'])->name('admin.comics.store');

Route::get('/admin/comics/{comic}', [ComicController::class, 'show'])->name('admin.comics.show');

Route::get('/admin/comics/{comic}/edit', [ComicController::class, 'edit'])->name('admin.comics.edit');

Route::put('/admin/comics/{comic}', [ComicController::class, 'update'])->name('admin.comics.update');







// All 7 CRUD Operations
// Route::resource('comics', ComicController::class);
