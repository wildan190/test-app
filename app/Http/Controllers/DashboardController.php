<?php

namespace App\Http\Controllers;

use App\Domain\Reports\Application\GetReport;

class DashboardController extends Controller
{
    private GetReport $getReport;

    public function __construct(GetReport $getReport)
    {
        $this->getReport = $getReport;
    }

    public function index()
    {

        $reports = $this->getReport->execute();
        $labels = $reports->pluck('item_name')->toArray();
        $prices = $reports->pluck('item_total_price')->toArray();

        return view('dashboard', compact('labels', 'prices'));
    }
}
