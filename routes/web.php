<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerrainController;

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


Route::get('/', [TerrainController::class, 'index'])->name('home');

Route::get('/create-terrain', [TerrainController::class, 'create'])->name('create-terrain');
Route::post('/process-create', [TerrainController::class, 'process_create'])->name('process-create');

Route::get('/update-terrain/{id}', [TerrainController::class, 'update'])->name('update-terrain');
Route::put('/process-update:{id}', [TerrainController::class, 'process_update'])->name('process-update');

Route::get('/delete-terrain/{id}', [TerrainController::class, 'destroy'])->name('delete-terrain');
Route::delete('/process-delete/{id}', [TerrainController::class, 'process_destroy'])->name('process-delete');
