<?php

use App\Http\Controllers\Api\BukuController;
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

// Route::get('buku', [BukuController::class, 'index']);
// Route::get('buku/{id}', [BukuController::class, 'show']);

// Route::post('buku', [BukuController::class, 'store']);

// Route::put('buku/{id}', [BukuController::class, 'update']);

// Route::delete('buku/{id}', [BukuController::class, 'destroy']);


//OPSI AGAR BISA DENGAN 1 ROUTE SAJA
Route::apiResource('buku', BukuController::class)->middleware('checkHost');
