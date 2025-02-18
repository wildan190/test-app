<?php

namespace App\Http\Controllers;

use App\Domain\Reports\Application\CreateReport;
use App\Domain\Reports\Application\GetReport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReportController extends Controller
{
    private GetReport $getReport;

    private CreateReport $createReport;

    public function __construct(GetReport $getReport, CreateReport $createReport)
    {
        $this->getReport = $getReport;
        $this->createReport = $createReport;
    }

    public function index(): View
    {
        $reports = $this->getReport->execute();

        return view('pages.reports.index', compact('reports'));
    }

    public function create(): View
    {
        return view('pages.reports.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'item_name' => 'required|string',
            'item_supplier' => 'required|string',
            'item_price' => 'required|numeric|min:0',
            'item_qty' => 'required|integer|min:1',
        ]);

        $this->createReport->execute(
            $request->item_name,
            $request->item_supplier,
            $request->item_price,
            $request->item_qty
        );

        return redirect()->route('reports.index')->with('success', 'Report created successfully');
    }
}
