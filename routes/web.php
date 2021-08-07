<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'home']);

//Farm Routes
Route::get('/add_farm', [PagesController::class, 'add_farm']);
Route::get('/view_farm', [PagesController::class, 'view_farm']);

//Crop Routes
Route::get('/add_crop', [PagesController::class, 'add_crop']);
Route::get('/view_crop', [PagesController::class, 'view_crop']);

//Crop Pesticide
Route::get('/add_crop_pesticide', [PagesController::class, 'add_crop_pesticide']);
Route::get('/add_crop_pests', [PagesController::class, 'add_crop_pests']);
Route::get('/add_seed', [PagesController::class, 'add_seed']);

