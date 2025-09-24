<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageDetails extends Model
{
    protected $table = 'package_details';
    protected $fillable = ['package_name', 'renewal_date', 'allowed_properties', 'remaining_properties', 'my_properties', 'approved_properties', 'not_approved_properties'];
}
