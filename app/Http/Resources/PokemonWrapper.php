<?php

namespace App\Http\Resources;

use PokePHP\PokeApi;

class PokemonWrapper
{
    protected PokeApi $api;

    public function __construct()
    {
        $this->api = new PokeApi();
    }
    
    public function getPaginated()
    {
        $pokemon = $this->api->resourceList('pokemon', 20, 0);
        return collect(json_decode($pokemon, true));
    }

    public function singlePokemon($id)
    {
        $pokemon = $this->api->resourceList("pokemon/$id");
        return collect(json_decode($pokemon, true));
    }

    public function getSprite($id)
    {
        return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/$id.png";
    }

    public function getLocations($id)
    {
        $locations = $this->api->resourceList("pokemon/$id/encounters");
        return collect(json_decode($locations, true));
    }
}
