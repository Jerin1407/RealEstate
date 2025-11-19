<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{
    protected $table = 'localities';
    protected $primaryKey = 'locality_id';
    public $timestamps = false;

    protected $fillable = [
        'locality_name',
        'is_active',
    ];
}
