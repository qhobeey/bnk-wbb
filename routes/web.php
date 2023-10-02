<?php

use App\Http\Controllers\AdminModuleController;
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
    return view('frontend.home');
})->name('index');
Route::get('login', function () {
    return view('frontend.login');
})->name('login');
Route::get('admin', [AdminModuleController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
Route::get('transfer', [AdminModuleController::class, 'transfer'])->middleware('auth')->name('admin.transfer');
Route::post('login', [AdminModuleController::class, 'login'])->name('login');
Route::get('logout', [AdminModuleController::class, 'logout'])->name('logout');
