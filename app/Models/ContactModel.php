<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'fullname',
        'email',
        'message',
        'contact_number',
        'created_at',
    ];
}
