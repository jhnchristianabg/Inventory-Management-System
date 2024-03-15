<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/device', function () {
    return view('device');
})->middleware(['auth'])->name('device');

Route::get('/cablesandperipherals', function () {
    return view('cablesandperipherals');
})->middleware(['auth'])->name('cablesandperipherals');

Route::get('/consumables', function () {
    return view('consumables');
})->middleware(['auth'])->name('consumables');
