<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    public function definition(): array
    {
        $item_price = $this->faker->randomFloat(2, 1000, 5000);
        $item_qty = $this->faker->numberBetween(1, 50);
        $item_total_price = $item_price * $item_qty;

        return [
            'item_name' => $this->faker->word(),
            'item_supplier' => $this->faker->company(),
            'item_price' => $item_price,
            'item_qty' => $item_qty,
            'item_total_price' => $item_total_price,
        ];
    }
}
