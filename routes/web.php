<?php
use App\Http\Controllers\HarvestController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\cropController;
use App\Http\Controllers\CropPesticideController;
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
Route::get('/view_farm',[FarmController::class,'index']);
Route::post('/add_farm',[FarmController::class,'store']);
Route::get('/farms/{id}',[FarmController::class,'show']);
Route::put('/farms/{id}',[FarmController::class,'update']);
Route::delete('/farms/{id}',[FarmController::class,'destroy']);

//Crop Routes
Route::get('/add_crop', [PagesController::class, 'add_crop']);
Route::get('view_crop',[cropController::class,'index']);
Route::post('/add_crop',[cropController::class,'store']);
Route::get('/crop/{id}',[cropController::class,'show']);
Route::put('/crop/{id}',[cropController::class,'update']);
Route::delete('/crop/{id}',[cropController::class,'destroy']);


//Crop Pesticide
Route::get('/add_crop_pesticide', [PagesController::class, 'add_crop_pesticide']);
Route::get('/add_crop_pests', [PagesController::class, 'add_crop_pests']);
Route::get('/add_seed', [PagesController::class, 'add_seed']);


//Routes to CropPesticides Controller
Route::get('/crop',[cropPesticideController::class,'index']);
Route::post('/add_crop_pesticide',[cropPesticideController::class,'store']);
Route::get('/crop_pesticide/{id}',[cropPesticideController::class,'show']);
Route::put('/crop_pesticide/{id}',[cropPesticideController::class,'update']);
Route::delete('/crop_pesticide/{id}',[cropPesticideController::class,'destroy']);


//Harvest Routes
Route::get('add_harvest', [HarvestController::class, 'add_harvest']);
Route::get('view_harvest',[HarvestController::class,'index']);
Route::get('/harvest/{id}',[HarvestController::class,'show']);
Route::put('/harvest/{id}',[HarvestController::class,'update']);
Route::delete('/harvest/{id}',[HarvestController::class,'destroy']);
