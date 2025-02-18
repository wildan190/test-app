<?php

namespace App\Domain\Reports\Domain;

class ReportEntity
{
    private string $itemName;

    private string $itemSupplier;

    private float $itemPrice;

    private int $itemQty;

    private float $itemTotalPrice;

    public function __construct(string $itemName, string $itemSupplier, float $itemPrice, int $itemQty)
    {
        $this->itemName = $itemName;
        $this->itemSupplier = $itemSupplier;
        $this->itemPrice = $itemPrice;
        $this->itemQty = $itemQty;
        $this->itemTotalPrice = $itemPrice * $itemQty;
    }

    public function getItemName(): string
    {
        return $this->itemName;
    }

    public function getItemSupplier(): string
    {
        return $this->itemSupplier;
    }

    public function getItemPrice(): float
    {
        return $this->itemPrice;
    }

    public function getItemQty(): int
    {
        return $this->itemQty;
    }

    public function getItemTotalPrice(): float
    {
        return $this->itemTotalPrice;
    }
}
