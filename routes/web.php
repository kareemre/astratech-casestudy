<?php

use App\Http\Controllers\impexp\ExportController;
use App\Http\Controllers\impexp\ImportController;
use App\Http\Controllers\UserController;
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


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/export', [ExportController::class, 'export'])->name('export');
Route::post('/import', [ImportController::class, 'import'])->name('import');

