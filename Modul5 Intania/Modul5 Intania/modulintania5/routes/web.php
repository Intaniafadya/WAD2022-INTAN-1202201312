<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::post('profile', [HomeController::class, 'update'])->name('profile.update');

Route::get('rent', [RentController::class, 'index'])->name('rent');
Route::get('rent/add', [RentController::class, 'add'])->name('rent.add');
Route::post('rent/add', [RentController::class, 'create'])->name('rent.store');
Route::get('rent/detail/{id}', [RentController::class, 'detail'])->name('rent.detail');
Route::get('rent/edit/{id}', [RentController::class, 'edit'])->name('rent.edit');
Route::post('rent/edit', [RentController::class, 'update'])->name('rent.edit.action');
Route::get('rent/hapus/{id}', [RentController::class, 'hapus'])->name('rent.hapus');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login_action'])->name('login.action');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_action'])->name('register.action');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
