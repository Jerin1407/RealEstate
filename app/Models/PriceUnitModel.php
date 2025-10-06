<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceUnitModel extends Model
{
    protected $table = 'priceunit';
    protected $primaryKey = 'price_unit_id';
    public $timestamps = false;

    protected $fillable = [
        'unit_name'
    ];
}
