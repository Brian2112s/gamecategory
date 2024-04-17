<?php

use App\Models\Game;
use App\Models\Gamecategory;
use App\Http\Controllers\GamecategoryController;
use App\Http\Controllers\GameController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/gamecategories/{id}/games', Gamecategory::class);
Route::get('/scripts?sort={veld}', [Gamecategory::class]);


Route::apiResource('games', Game::class);
Route::apiResource('gamecategories', GameCategory::class);
