<?php

use App\Http\Controllers\GradController;
use App\Http\Controllers\RubrikaController;
use App\Http\Controllers\UcenikController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Gradovi
Route::post('/gradovi/dodaj', [GradController::class, 'create']);
Route::post('/gradovi/uredi/{id}', [GradController::class, 'edit']);
Route::get('/gradovi/dohvati', [GradController::class, 'index']);
Route::get('/gradovi/izbrisi/{id}', [GradController::class, 'destroy']);


// Učenici
Route::post('/ucenici/dodaj', [UcenikController::class, 'create']);
Route::post('/ucenici/uredi/{id}', [UcenikController::class, 'edit']);
Route::get('/ucenici/dohvati', [UcenikController::class, 'index']);
Route::get('/ucenici/izbrisi/{id}', [UcenikController::class, 'destroy']);


// Rubrike
Route::post('/rubrike/dodaj', [RubrikaController::class, 'create']);
Route::post('/rubrike/uredi/{id}', [RubrikaController::class, 'edit']);
Route::get('/rubrike/dohvati', [RubrikaController::class, 'index']);
Route::get('/rubrike/izbrisi/{id}', [RubrikaController::class, 'destroy']);


/*
Route::get('/prva_ruta', function() {
    return 'Dobar dan.';
});

Route::get('/kvadriraj/{broj}', function($broj) {
    return $broj * $broj;
});

Route::get('/zbroji/{broj1}/{broj2}', function($broj1, $broj2) {
    return $broj1 + $broj2;
});

// localhost:8000/api/pretvori_datum/2020-06-15
Route::get('/pretvori_datum/{datum}', function($datum) {
    \Carbon\Carbon::setLocale('hr');
    return \Carbon\Carbon::parse($datum)->diffForHumans(\Carbon\Carbon::now());
});
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
