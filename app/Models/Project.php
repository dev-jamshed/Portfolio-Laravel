<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $table = 'projects';

    protected $fillable = [
        'name',
        'description',
        'main_image',
        'service_id',
        'author',
        'date',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function videos()
    {
        return $this->hasMany(ProjectVideo::class);
    }
}
