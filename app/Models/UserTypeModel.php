<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTypeModel extends Model
{
    protected $table = 'usertypes';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'type_name',
        'is_admin'
    ];
}
