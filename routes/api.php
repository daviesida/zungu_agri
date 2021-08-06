<?php
use App\Http\Controllers\FarmController;
use App\Http\Controllers\cropController;
use App\Http\Controllers\cropPesticideController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Routes to Farm Controller
Route::get('/farms',[FarmController::class,'index']);
Route::post('/add_farm',[FarmController::class,'store']);
Route::get('/farms/{id}',[FarmController::class,'show']);
Route::put('/farms/{id}',[FarmController::class,'update']);
Route::delete('/farms/{id}',[FarmController::class,'destroy']);

//Routes to Crop Controller
Route::get('/crop',[cropController::class,'index']);
Route::post('/add_crop',[cropController::class,'store']);
Route::get('/crop/{id}',[cropController::class,'show']);
Route::put('/crop/{id}',[cropController::class,'update']);
Route::delete('/crop/{id}',[cropController::class,'destroy']);

//Routes to CropPesticides Controller
Route::get('/crop',[cropPesticideController::class,'index']);
Route::post('/add_crop',[cropPesticideController::class,'store']);
Route::get('/crop/{id}',[cropPesticideController::class,'show']);
Route::put('/crop/{id}',[cropPesticideController::class,'update']);
Route::delete('/crop/{id}',[cropPesticideController::class,'destroy']);