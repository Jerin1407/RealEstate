<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyImageModel extends Model
{
    protected $table = 'property_thumbs';
    protected $primaryKey = 'property_thumb_id';
    public $timestamps = false;

    protected $fillable = [
        'property_id',
        'hot_property_id',
        'filename',
        'is_cover'
    ];
}
