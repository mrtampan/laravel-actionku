<?php

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

Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/createuser', [UserController::class, 'create'])->name('createuser');

Route::post('/saveuser', [UserController::class, 'store'])->name('saveuser');

Route::get('/edituser/{userid}', [UserController::class, 'edit'])->name('edituser');

Route::post('/updateuser', [UserController::class, 'update'])->name('updateuser');