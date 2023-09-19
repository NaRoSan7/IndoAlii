<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\IndoaliController;

Route::get('/', function(){
    return response()->json([
        'Success' => true
    ]);
});

Route::get('/Indoali',[IndoaliController::class,'index']);
Route::get('/Indoali/{id}',[IndoaliController::class,'show']);
Route::post('/Indoali',[IndoaliController::class,'store']);
Route::delete('/Indoali/{id}',[IndoaliController::class,'destroy']);
Route::put('/Indoali/{id}',[IndoaliController::class,'update']);