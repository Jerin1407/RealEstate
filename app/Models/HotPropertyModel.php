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
    ];
}
