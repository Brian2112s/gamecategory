<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Gamecategory;

class GamecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Gamecategory::all();
        return $game;
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
              else return Gamecategory::create($request->all()); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Gamecategory::find($id);
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
        $game = Gamecategory::find($id);
        $game->update($request->all());
        return $game;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Gamecategory::find($id);
        $game->destroy();
    }
}
