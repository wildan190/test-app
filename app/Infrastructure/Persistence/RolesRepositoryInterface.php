<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Roles\Domain\RolesEntity;
use Illuminate\Pagination\LengthAwarePaginator;

interface RolesRepositoryInterface
{
    public function getAllRoles(int $perPage): LengthAwarePaginator;

    public function createRole(RolesEntity $roleEntity): void;
}
