<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\SeriesController;
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/{url}',[SeriesController::class, 'show']);
Route::get('/series/Commentaire/{url}',[SeriesController::class, 'showCom']);


use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
//Route::resource('/contact', ContactController::class); //gère toutes les routes de contactcontroller


use App\Http\Controllers\AdminController;
Route::resource('admin/series', AdminController::class);
// Route::get('admin/series/{url}', [AdminController::class, 'update']);

