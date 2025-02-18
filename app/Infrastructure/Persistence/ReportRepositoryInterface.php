<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Reports\Domain\ReportEntity;
use Illuminate\Database\Eloquent\Collection;

interface ReportRepositoryInterface
{
    public function getAllReports(): Collection;

    public function createReport(ReportEntity $report): void;
}
