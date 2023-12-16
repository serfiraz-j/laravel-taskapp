<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


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

Route::get('/',[TaskController::class, 'index'])->name('home');
Route::get('/tasks',[TaskController::class, 'index'])->name('index');
Route::get('/tasks/create',[TaskController::class, 'create'])->name('create');
Route::post('/tasks/store',[TaskController::class, 'store'])->name('store');
Route::get('/tasks/{task}',[TaskController::class, 'show'])->name('show');
Route::get('/tasks/{task}/edit',[TaskController::class, 'edit'])->name('edit');
Route::put('/tasks/{task}',[TaskController::class, 'update'])->name('update');
Route::delete('/tasks/{task}',[TaskController::class, 'delete'])->name('delete');





