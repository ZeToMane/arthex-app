<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userChoiseController;
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

Route::get('/', [userChoiseController::class, 'index']);
Route::post('/uniqueid', [userChoiseController::class, 'store']);
Route::inertia('/global', 'test-global');

