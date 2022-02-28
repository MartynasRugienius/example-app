<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views;
use App\Http\Controllers\Logic;
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

Route::get('/', [Views::class, 'index']);

Route::get('/all', [Views::class, 'all']);

Route::get('/create', [Views::class, 'create']);

Route::get('/company/{id}', [Views::class, 'company']);

Route::get('/update/{id}', [Views::class, 'update']);

Route::post('/create', [Logic::class, 'create']);

Route::post('/search', [Logic::class, 'search']);

Route::post('/update/{id}',[Logic::class, 'update']);