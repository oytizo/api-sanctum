<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\MembarController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get('membar',[MembarController::class,'index']);
    Route::get('membar1',[MembarController::class,'create']);
    });
// Route::apiResource('membar',MembarController::class);
// Route::get('membar',[MembarController::class,'index']);
// Route::get('membar1',[MembarController::class,'create']);

Route::post('login',[UserController::class,'index']);

