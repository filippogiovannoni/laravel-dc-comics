<?php

use App\Http\Controllers\ComicController;
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
});

Route::get('/admin/comics', [ComicController::class, 'index'])->name('admin.comics.index');

Route::get('/admin/comics/{comic}', [ComicController::class, 'show'])->name('admin.comics.show');




// All 7 CRUD Operations
// Route::resource('comics', ComicController::class);
