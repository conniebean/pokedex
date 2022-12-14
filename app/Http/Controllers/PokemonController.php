<?php

namespace App\Http\Controllers;

use App\Repositories\PokemonRepository;
use Inertia\Inertia;

class PokemonController extends Controller
{
    private PokemonRepository $repo;

    public function __construct()
    {
        $this->repo = new PokemonRepository();
    }

    public function index()
    {
        return Inertia::render('Pokemon', [
            'pokemon' => $this->repo->getAll()
        ]);
    }

    public function show($id)
    {
        Return Inertia::render('SinglePokemon', [
            'singlePokemon' => $this->repo->findById($id),
            'moves' => $this->repo->getMoves($id)
        ]);
    }
}
