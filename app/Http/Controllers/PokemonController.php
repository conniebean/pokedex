<?php

namespace App\Http\Controllers;

use App\Http\Resources\PokemonWrapper;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Inertia\Inertia;
use PokePHP\PokeApi;

class PokemonController extends Controller
{
    private $api;
    private PokemonWrapper $repo;

    public function __construct()
    {
        $this->api = new PokeApi();
        $this->repo = new PokemonWrapper();
    }

    public function index()
    {
        return Inertia::render('Pokemon', [
            'pokemon' => $this->repo->getPaginated()
        ]);
    }

    public function show($id)
    {
        Return Inertia::render('SinglePokemon', [
            'singlePokemon' => $this->repo->singlePokemon($id),
            'sprite' => $this->repo->getSprite($id),
            'location' => $this->repo->getLocations($id),
        ]);
    }
}
