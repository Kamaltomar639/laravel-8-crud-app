<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/hello', function () {
    return "Hello World";
});


Route::resource('contacts', ContactController::class);

/*

Route::resource('butterfly', \App\Http\Controllers\ButterflyController::class);[It is equivalent to all 7 routes]

Route::get('butterfly', [\App\Http\Controllers\ButterflyController::class, 'index'])->name('butterfly.index');
Route::post('butterfly', [\App\Http\Controllers\ButterflyController::class, 'store'])->name('butterfly.store');
Route::get('butterfly/create', [\App\Http\Controllers\ButterflyController::class, 'create'])->name('butterfly.create');
Route::get('butterfly/{butterfly}', [\App\Http\Controllers\ButterflyController::class, 'show'])->name('butterfly.show');
Route::put('butterfly/{butterfly}', [\App\Http\Controllers\ButterflyController::class, 'update'])->name('butterfly.update');
Route::delete('butterfly/{butterfly}', [\App\Http\Controllers\ButterflyController::class, 'destroy'])->name('butterfly.destroy');
Route::get('butterfly/{butterfly}/edit', [\App\Http\Controllers\ButterflyController::class, 'edit'])->name('butterfly.edit');

*/



