<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;

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

Route::get('/', [SitioController::class, 'goToLandingPage']);

Route::get('/contact/{id?}', [SitioController::class, 'validarParametro']);

Route::post('/contact', [SitioController::class, 'formReceive']);
