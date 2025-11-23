<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeLoanModel extends Model
{
    protected $table = 'homeloan_enquiry';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'fullname',
        'contact_number',
        'email',
        'loan_amount',
        'comments',
        'created_at',
    ];
}
