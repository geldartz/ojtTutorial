<?php

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
    return view('app');
});


Route::get('/crud', [App\Http\Controllers\DevelopersController::class, 'index'])->name('developers');
Route::post('/save-data', [App\Http\Controllers\DevelopersController::class, 'store'])->name('store');
Route::get('/delete/{id}', [App\Http\Controllers\DevelopersController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [App\Http\Controllers\DevelopersController::class, 'edit'])->name('edit');

Route::put('/update-data', [App\Http\Controllers\DevelopersController::class, 'update'])->name('update');


Route::get('/about-us', function () {
    return view('about');
});

Route::get('/add', function () {
    return view('form');
});
