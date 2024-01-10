<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PizzaApiController;
use App\Http\Controllers\Api\FileApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//For Pizza
Route::get('pizzas', [PizzaApiController::class, 'getPizzas']);
Route::get('pizzas/search/{name}', [PizzaApiController::class, 'search']);
Route::get('pizzas/{id}', [PizzaApiController::class, 'getPizzaById']);
Route::post('pizzas', [PizzaApiController::class, 'insert']);
Route::put('pizzas', [PizzaApiController::class, 'update']);
Route::delete('pizzas/{id}', [PizzaApiController::class, 'delete']);


//For File
Route::post('files', [FileApiController::class, 'upload']);
Route::get('files', [FileApiController::class, 'getAll']);
Route::get('files/{id}', [FileApiController::class, 'getById']);
