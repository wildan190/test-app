<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Permissions\Domain\PermissionsEntity;
use Illuminate\Pagination\LengthAwarePaginator;

interface PermissionsRepositoryInterface
{
    public function getAllPermissions(int $perPage): LengthAwarePaginator;

    public function createPermission(PermissionsEntity $permissionEntity): void;
}
