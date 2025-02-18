<?php

namespace App\Domain\Roles\Application;

use App\Infrastructure\Persistence\RolesRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class GetRoles
{
    private RolesRepositoryInterface $rolesRepository;

    public function __construct(RolesRepositoryInterface $rolesRepository)
    {
        $this->rolesRepository = $rolesRepository;
    }

    public function execute(int $perPage = 10): LengthAwarePaginator
    {
        return $this->rolesRepository->getAllRoles($perPage);
    }
}
