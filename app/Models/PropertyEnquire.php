<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyEnquire extends Model
{
    protected $table = 'property_enquire';
    protected $primaryKey = 'enquire_id';
    public $timestamps = false;

    protected $fillable = [
        'property_id', 'fullname', 'contact_number', 'email', 'property_code', 'message', 'captcha_code', 'created_at'
    ];
}
