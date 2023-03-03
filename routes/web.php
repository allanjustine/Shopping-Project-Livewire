<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingController;

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
    return view('welcome');
});

Route::get('/shopping', [ShoppingController::class, 'index']);
Route::get('/create', [ShoppingController::class, 'create']);
Route::get('/edit/{shopping}', [ShoppingController::class, 'edit']);
Route::get('/view/{shopping}', [ShoppingController::class, 'view']);
