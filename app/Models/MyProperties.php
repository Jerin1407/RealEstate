<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyProperties extends Model
{
    protected $table = 'my_properties';
    protected $fillable = ['property_name'];
}
