<?php
use App\Http\Controllers\FarmController;
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

Route::get('/farms',[FarmController::class,'index']);
Route::post('/add_farm',[FarmController::class,'store']);
Route::get('/farms/{id}',[FarmController::class,'show']);
Route::put('/farms/{id}',[FarmController::class,'update']);
Route::delete('/farms/{id}',[FarmController::class,'destroy']);