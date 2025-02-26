<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'email',
        'location',
        'phone',
        'footer_desc',
        'sidebar_image',
        'sidebar_title',
        'sidebar_description'
    ];
}
