<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_supplier',
        'item_price',
        'item_qty',
        'item_total_price',
    ];
}
