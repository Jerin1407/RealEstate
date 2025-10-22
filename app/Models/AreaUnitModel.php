<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaUnitModel extends Model
{
    protected $table = 'areaunit';
    protected $primaryKey = 'area_unit_id ';
    public $timestamps = false;

    protected $fillable = [
        'unit_name'
    ];
}
