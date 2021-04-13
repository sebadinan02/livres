<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliothequeController;
use App\Http\Controllers\AuteursController;
use App\Http\Controllers\LivresController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\StatistiqueController;
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

Route::get('/', [ BibliothequeController::class, "index"]);
Route::get('/accueil', [ AccueilController::class, "index"]);
Route::get('/author', [ AuteursController::class, "index"]);
Route::get('/book', [ LivresController::class, "index"]);
Route::get('/style', [ TypeController::class, "index"]);
Route::get('/statistique', [ StatistiqueController::class, "index"]);

Route::post('/', [ BibliothequeController::class, "traitement"]);
Route::post('/admin', [ AccueilController::class, "traitement"]);
Route::post('/auteurs', [ AuteursController::class, "traitement"]);
Route::post('/livres', [ LivresController::class, "traitement"]);
Route::post('/type', [ TypeController::class, "traitement"]);

