<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferencesController;

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

Route::get('/','App\Http\Controllers\ConferencesController@index');
Route::get('/','App\Http\Controllers\ConferencesController@index')->name('index');
Route::get('/create', [ConferencesController::class, 'create'])->name('create');
Route::post('/', [ConferencesController::class, 'fill'])->name('fill');
Route::get('/{id}/edit', [ConferencesController::class, 'edit'])->name('edit');
Route::get('/{id}/display', [ConferencesController::class, 'display'])->name('display');
Route::put('/{id}', [ConferencesController::class, 'update'])->name('update');

