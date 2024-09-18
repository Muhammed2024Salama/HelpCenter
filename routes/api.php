<?php

use App\Http\Controllers\Api\ContactSupportController;
use App\Http\Controllers\Api\HelpCenterController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');


Route::apiResource('help-centers',HelpCenterController::class);
Route::apiResource('/contact-support', ContactSupportController::class);
