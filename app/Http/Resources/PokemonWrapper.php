<?php

namespace App\Http\Resources;

use App\Models\Pokemon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use PokePHP\PokeApi;

class PokemonWrapper
{
    protected PokeApi $api;

    public function __construct()
    {
        $this->api = new PokeApi();
    }

    public function getAll()
    {
        $pokemon = $this->api->resourceList('pokemon', 898, 0);
        return collect(json_decode($pokemon, true));
    }

    public function getPaginated()
    {
        $pokemon = $this->api->resourceList('pokemon', 20, 0);
        return collect(json_decode($pokemon, true));
    }

    public function singlePokemon($id)
    {
        $pokemon = $this->api->resourceList("pokemon/$id", 20, 0);
        return collect(json_decode($pokemon, true));
    }

    public function getType($id)
    {
        $pokemon = $this->singlePokemon($id)->toArray();
        return $pokemon['types'][0]['type']['name'];
    }

    public function getName($id)
    {
        $pokemon = $this->singlePokemon($id)->toArray();
        return $pokemon['name'];
    }

    public function getSprite($id)
    {
        $pokemon = $this->singlePokemon($id)->toArray();
        return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{$pokemon['id']}.png";
    }

    public function getMoves($id)
    {
        $data = [];
        $pokemon = $this->singlePokemon($id)->toArray();
        for ($i = 0; $i < count($pokemon); $i++){
            $moves = Arr::get($pokemon, "moves.$i.move.name");
            $data[] = $moves;
        }
        return $data;
    }

    public function getLocations($id)
    {
        $locations = $this->api->resourceList("pokemon/$id/encounters");
        return collect(json_decode($locations, true));
    }
}
