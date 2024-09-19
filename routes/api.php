<?php

use App\Http\Controllers\QrCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/qrcode', [QrCodeController::class, 'store']);
Route::get('/qrcode', [QrCodeController::class, 'indexAPI']);