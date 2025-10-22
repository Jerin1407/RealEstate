<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyProperties extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'property_id';
    public $timestamps = false;

    protected $fillable = [
        'posted_by',
        'locality_id',
        'category_id',
        'price_range_id',
        'area_unit_id',
        'approved_by',
        'property_code',
        'price',
        'property_title',
        'bhk',
        'property_description',
        'youtubeurl',
        'contact_name',
        'contact_number',
        'post_date',
        'modified_date',
        'is_approved',
        'is_modified',
        'priority',
    ];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'category_id');
    }

    // Relationship with Location
    public function locality()
    {
        return $this->belongsTo(LocationModel::class, 'locality_id', 'locality_id');
    }

    // Relationship with Image
    public function images()
    {
        return $this->hasMany(PropertyImageModel::class, 'property_id', 'property_id');
    }
}
