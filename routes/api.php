<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamecategoryController;
use App\Http\Controllers\GameController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/gamecategories/{id}/games', [GameController::class, 'getGamecategoriesByGames']);
Route::get('/games?sort={veld}', [GameController::class, 'index']);

Route::apiResource('games', GameController::class);
Route::apiResource('gamecategories', GamecategoryController::class)
?>