<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPackagesModel extends Model
{
    protected $table = 'user_packages';
    protected $primaryKey = 'package_id ';
    public $timestamps = false;

    protected $fillable = [
        'package_name',
        'package_type',
        'is_unlimited_properties',
        'is_unlimited_images',
        'is_unlimited_days',
        'is_contact_disabled',
        'property_count',
        'image_count',
        'day_count',
    ];
}
