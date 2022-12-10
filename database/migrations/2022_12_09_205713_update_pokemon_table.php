<?php

use App\Http\Resources\PokemonWrapper;
use App\Models\Pokemon;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        $repo = new PokemonWrapper();
        $id = 0;
        $allPokemon = $repo->getAll();
        $pokemonCollection = collect(json_decode($allPokemon, true));
        for ($i = 0; $i < count($pokemonCollection['results']); $i++){
            $total = count($pokemonCollection['results']);

            while($id < $total){
                $id++;
                $sprite = $repo->getSprite($id);
                $type = $repo->getType($id);
                $name = $repo->getName($id);
                Pokemon::query()->upsert(
                    ['id' => $id, 'name' => $name, 'sprite' => $sprite, 'type' => $type],
                    ['id', 'name', 'sprite', 'type']
                );
            }
        }
    }

    public function down()
    {
        //
    }
};
