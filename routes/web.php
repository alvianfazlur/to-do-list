<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/hapus/{id}', [BlogController::class,'hapus']);
Route::get('/blog/edit/{id}', [BlogController::class,'edit']);
Route::get('/blog/tambah', [BlogController::class,'tambah']);
Route::get('/blog/tambahTodo', [BlogController::class,'tambahTodo']);
Route::post('/blog/store', [BlogController::class,'store']);
Route::post('/blog/store1', [BlogController::class,'store1']);
Route::post('/blog/update', [BlogController::class,'update']);