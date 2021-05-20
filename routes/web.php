<?php

use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware'=>'auth'],function(){


Route::get('/',[TaskController::class,'index'])->name('/');
Route::get('add-new',[TaskController::class,'create'])->name('add-new');
Route::post('save',[TaskController::class,'store'])->name('save');
Route::delete('deleteTask/{id}',[TaskController::class,'destroy'])->name('deleteTask');
Route::get('edit-task/{id}',[TaskController::class,'edit'])->name('edit-task');
Route::put('update-task/{id}',[TaskController::class,'update'])->name('update-task');


Route::post('saveSubTask',[SubTaskController::class,'store'])->name('saveSubTask');
Route::delete('deleteSubTask/{id}',[SubTaskController::class,'delete'])->name('deleteSubTask');
Route::put('update-subTask/{id}',[SubTaskController::class,'update'])->name('update-subTask');
});
Auth::routes();

