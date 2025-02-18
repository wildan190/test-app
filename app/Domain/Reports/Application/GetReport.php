<?php

namespace App\Domain\Reports\Application;

use App\Infrastructure\Persistence\ReportRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetReport
{
    private ReportRepositoryInterface $repository;

    public function __construct(ReportRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(): Collection
    {
        return $this->repository->getAllReports();
    }
}
