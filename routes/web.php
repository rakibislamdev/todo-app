<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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



Route::get('/', [TodoController::class, 'index']);

Route::get('/create', [TodoController::class, 'create']);

Route::get('/store', [TodoController::class, 'store']);

Route::get('/edit/{todo}', [TodoController::class, 'edit']);

Route::get('/update/{todo}', [TodoController::class, 'update']);

Route::get('/delete/{todo}', [TodoController::class, 'destroy']);
