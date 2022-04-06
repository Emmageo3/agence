<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\TypeproprieteController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\RegionController;

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

Route::resource('proprietes', ProprieteController::class)->middleware(['auth']);

Route::resource('proprietaires', ProprietaireController::class)->middleware(['auth']);

Route::resource('/typeproprietes', TypeproprieteController::class)->middleware(['auth']);

Route::resource('/pays', PaysController::class)->middleware(['auth']);

Route::resource('/regions', RegionController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
