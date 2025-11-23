<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotPropertyModel extends Model
{
    protected $table = 'adds';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'type',
        'title',
        'description',
        'url',
        'add_thumb',
        'add_thumb_pdf',
        'add_pdf_img',
        'add_date',
        'modified_date',
        'is_active'
    ];

    // Relationship with images
    public function images()
    {
        return $this->hasMany(PropertyImageModel::class, 'hot_property_id', 'id');
    }

    // Relationship with cover image
    public function coverImage()
    {
        return $this->hasOne(PropertyImageModel::class, 'hot_property_id', 'id')
            ->where('is_cover', 1);
    }
}
