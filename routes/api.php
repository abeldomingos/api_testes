<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data", [dummyAPI::class,'getData']);

Route::get("list/{id?}", [DeviceController::class, "list"]);

Route::post("add", [ClienteController::class, "add"]); 

Route::put('update', [ClienteController::class, "update"]);

Route::delete("delete/{id}", [ClienteController::class, 'delete']);

Route::get('search/{nome}', [ClienteController::class, 'search']);

Route::post('save',[ClienteController::class,'testarDados']);