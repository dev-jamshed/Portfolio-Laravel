<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'pricing_id',
        'feature',
    ];

    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }
}
