<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileDetails extends Model
{
    protected $table = 'profile_details';
    protected $fillable = ['full_name', 'address', 'contact_number', 'email', 'type'];
}
