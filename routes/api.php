<?php

use App\Http\Controllers\ChosenproductController;
use App\Http\Controllers\makeupController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\skincareController;
use App\Models\Chosenproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('/products', productsController::class);
Route::apiResource('/makeup_products', makeupController::class);
Route::apiResource('/chosen', ChosenproductController::class);
Route::apiResource('/skincare_products', skincareController::class);
