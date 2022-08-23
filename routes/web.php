<?php

use App\Http\Controllers\StudentsController;
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

Route::get('/', [StudentsController::class, 'index'])->name('home');

// delete
Route::delete('/delete/{id}', [StudentsController::class, 'destroy'])->name('delete');

// create
Route::get('/create', [StudentsController::class, 'create'])->name('createStudent');
Route::post('/', [studentsController::class, 'store'])->name('store');

// update
Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('editStudent');
Route::patch('/student/{id}', [studentsController::class, 'update'])->name('updateStudent');