<?php

namespace App\Repositories;

use App\Models\Pokemon;
use Illuminate\Support\Collection;

class PokemonRepository implements RepositoryInterface
{

    public function findById($id)
    {
        return Pokemon::query()->where('id', $id)->get();
    }

    public function getAll()
    {
        return Pokemon::query()->orderBy('id')->get();
    }

    public function getMoves($id)
    {
        $pokemon = $this->findById($id);

        return $pokemon->value('moves');
    }

    public function findMany(array $ids): Collection
    {
        // TODO: Implement findMany() method.
    }
}
