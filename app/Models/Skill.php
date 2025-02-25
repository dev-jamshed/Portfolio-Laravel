<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'range',
        'show_on_homepage',
        'description',
        'icon',
        'best_skill',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(SkillCategory::class);
    }
}
