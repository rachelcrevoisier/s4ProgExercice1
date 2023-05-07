<?php

use App\Http\Controllers\Controleur;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [Controleur::class, 'index']);
Route::get('/portail', [Controleur::class, 'portail']);
Route::get('/encheresEncours', [Controleur::class, 'encheresEncours']);
Route::get('/encheresTerminees', [Controleur::class, 'encheresTerminees']);
Route::get('/inscription', [Controleur::class, 'inscription']);
Route::post('/inscription', [Controleur::class, 'reponsesFormulaire']);
