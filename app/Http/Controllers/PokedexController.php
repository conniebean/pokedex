<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pokemon::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function show(Pokedex $pokedex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokedex $pokedex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokedex $pokedex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokedex  $pokedex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokedex $pokedex)
    {
        //
    }
}
