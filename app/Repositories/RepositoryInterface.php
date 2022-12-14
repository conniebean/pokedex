<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function findById($id);
    public function findMany(array $ids): Collection;
}
