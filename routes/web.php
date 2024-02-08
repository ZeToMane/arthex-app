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


Route::get('/test-decrire', [userChoiseController::class, 'index']);
Route::post('/uniqueid', [userChoiseController::class, 'store']);
Route::inertia('/', 'index');
Route::inertia('/global', 'test-global');
Route::inertia('/accueil', 'accueil');
Route::inertia('/credits', 'credits');
Route::inertia('/histoire', 'histoire');
Route::inertia('/comprendre', 'comprendre');
Route::inertia('/step-one-intro', 'step-one-intro');
Route::inertia('/step-one-desc', 'step-one-desc');
Route::inertia('/step-one-test-one', 'step-one-test-one');
