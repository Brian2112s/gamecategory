<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($sortField)
    {
        if (isset($sortField)) 
        {
            $$games = Game::orderBy($sortField)->get();
        } 

        else 
        {
            $games = Game::all();
        }
        return $games;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateddata = Validator::make($request->all(),
        ['naam' => 'required'
  
          ]);
          if ($validateddata->fails()) {
              return response('{"Foutmelding":"Data invalid"}', 400)
              ->header('Content-Type','application/json');
              }
              else return Game::create($request->all()); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Game::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->route('update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = Game::find($id);
        $game->update($request->all());
        return $game;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::find($id);
        $game->destroy();
    }

    public function getGamecategoriesByGames($gamecategoryId)
    {
        $query = Game::where('category_id', $gamecategoryId);

        return $query;
    }
}