<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
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
Route::inertia('/login', 'login');
Route::inertia('/global', 'test-global');
Route::inertia('/accueil', 'accueil');
Route::inertia('/credits', 'credits');
Route::inertia('/histoire', 'histoire');
Route::inertia('/comprendre', 'comprendre');
Route::inertia('/step-one-intro', 'step-one-intro');
Route::inertia('/step-two-intro', 'step-two-intro');
Route::inertia('/step-one-desc', 'step-one-desc');
Route::inertia('/step-one-test-one', 'step-one-test-one');
Route::inertia('/step-one-desc-two', 'step-one-desc-two');
Route::inertia('/step-one-test-two', 'step-one-test-two');
Route::inertia('/step-one-desc-third', 'step-one-desc-third');
Route::inertia('/step-one-test-third', 'step-one-test-third');


Route::get('/{filename}', function ($filename) {
    $path = resource_path('content/' . $filename);
    if (file_exists($path)) {
        return Response::file($path);
    } else {
        abort(404);
    }
})->where('filename', '.*\.ttf');
