<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'review',
        'service_id',
        'image',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
