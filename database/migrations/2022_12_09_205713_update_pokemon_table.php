<?php

use App\Http\Resources\PokemonWrapper;
use App\Models\Pokemon;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        $api = new PokemonWrapper();
        $id = 0;
        $allPokemon = $api->getAll();
        $pokemonCollection = collect(json_decode($allPokemon, true));
        for ($i = 0; $i < count($pokemonCollection['results']); $i++){
            $total = count($pokemonCollection['results']);
            while($id < $total){
                $id++;
                $this->addPkmnToDatabase($api, $id);
            }
        }
    }

    public function down()
    {
        //
    }

    public function addPkmnToDatabase(PokemonWrapper $api, int $id): void
    {
        $sprite = $api->getSprite($id);
        $type = $api->getType($id);
        $name = $api->getName($id);
        $moves = $api->getMoves($id);
        Pokemon::query()->upsert(
            ['id' => $id, 'name' => $name, 'sprite' => $sprite, 'type' => $type, 'moves' => collect($moves)],
            ['id', 'name', 'sprite', 'type', 'moves']
        );
    }
};
