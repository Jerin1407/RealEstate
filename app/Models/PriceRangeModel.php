<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceRangeModel extends Model
{
    protected $table = 'price_ranges';
    protected $primaryKey = 'price_range_id';
    public $timestamps = false;

    protected $fillable = [
        'price_range'
    ];
}
