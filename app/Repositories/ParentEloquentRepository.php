<?php

declare(strict_types=1);

namespace App\Repositories;

class ParentEloquentRepository implements IParentRepository
{
    abstract protected static function model(): string;

    abstract protected static function dto(): string;

    /**
     *
     */
    public function search(string $filter, array $relations = [])
    {
        $result = static::model()::with($relations)->filter($filter)->get();

        return new (static::dto())(items: $result->toArray());
    }

    /**
     *
     */
    public function first(string $filter, array $relations = [])
    {
        $result = static::model()::with($relations)->filter($filter)->first();

        return new (static::dto())($result?->toArray() ?? []);
    }
}
