<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;

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

Route::middleware('auth:api')->prefix('v1')->group(function () { 
    Route::get('/user', function(Request $request){
        return $request->user();
    });

  //Route::get('/departments/{department}', [DepartmentsController::class, 'show']);

  //Route::get('/departments', [DepartmentsController::class, 'index']);

  Route::apiResource('/departments', DepartmentsController::class);
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});
