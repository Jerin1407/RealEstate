<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResetModel extends Model
{
    protected $table = 'password_resets';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'email',
        'token',
        'created_at',
    ];
}
