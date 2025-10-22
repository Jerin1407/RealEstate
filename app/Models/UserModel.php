<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = ['user_type_id', 'login_name', 'password', 'fullname', 'contact_number', 'contact_address', 'email'];
}
