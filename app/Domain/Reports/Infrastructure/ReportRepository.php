<?php

namespace App\Domain\Reports\Infrastructure;

use App\Domain\Reports\Domain\ReportEntity;
use App\Infrastructure\Persistence\ReportRepositoryInterface;
use App\Models\Report;
use Illuminate\Database\Eloquent\Collection;

class ReportRepository implements ReportRepositoryInterface
{
    public function getAllReports(): Collection
    {
        return Report::all();
    }

    public function createReport(ReportEntity $report): void
    {
        Report::create([
            'item_name' => $report->getItemName(),
            'item_supplier' => $report->getItemSupplier(),
            'item_price' => $report->getItemPrice(),
            'item_qty' => $report->getItemQty(),
            'item_total_price' => $report->getItemTotalPrice(),
        ]);
    }
}
