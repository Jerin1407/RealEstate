<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetailsModel extends Model
{
    protected $table = 'user_details';
    protected $primaryKey = 'user_details_id';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'user_package_id',
        'rem_properties',
        'is_active',
        'is_post_disabled',
        'register_date',
        'renew_date',
    ];

    // Relationship with User Package
    public function package()
    {
        return $this->belongsTo(UserPackagesModel::class, 'user_package_id', 'package_id');
    }
}
