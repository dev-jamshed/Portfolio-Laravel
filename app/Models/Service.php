<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model 
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'projects_done',
        'show_on_homepage',
        'category_id',
        'long_description',
        'show_latest_service'
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
