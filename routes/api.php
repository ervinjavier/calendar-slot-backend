<?php

use App\Http\Controllers\SlotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/slot', SlotController::class);
Route::post('/slot/deduct', [SlotController::class, 'deduct']);