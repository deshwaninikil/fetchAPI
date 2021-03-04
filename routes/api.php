<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Devicecontroller;

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

Route::get("list/{id?}",[Devicecontroller::class,'list']);

Route::post("add",[Devicecontroller::class,'add']);

Route::put("update",[Devicecontroller::class,'update']);

Route::get("search/{name}",[Devicecontroller::class,'search']);

Route::delete("delete/{id?}",[Devicecontroller::class,'delete']);