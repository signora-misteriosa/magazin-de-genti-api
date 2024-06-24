<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShishaController;

Route::get('/bag', [ShishaController::class, 'index']);
Route::post('/bag', [ShishaController::class, 'store']);
Route::get('/bag/{id}', [ShishaController::class, 'show']);
Route::patch('/bag/{id}', [ShishaController::class, 'update']);
Route::delete('/bag/{id}', [ShishaController::class, 'destroy']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
