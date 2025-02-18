<?php

namespace App\Domain\Reports\Application;

use App\Domain\Reports\Domain\ReportEntity;
use App\Infrastructure\Persistence\ReportRepositoryInterface;

class CreateReport
{
    private ReportRepositoryInterface $repository;

    public function __construct(ReportRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function execute(string $itemName, string $itemSupplier, float $itemPrice, int $itemQty): void
    {
        $report = new ReportEntity($itemName, $itemSupplier, $itemPrice, $itemQty);
        $this->repository->createReport($report);
    }
}
