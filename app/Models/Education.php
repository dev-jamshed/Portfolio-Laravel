<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    public $table = 'educations';

    protected $fillable = [
        'title',
        'institution',
        'year',
        'description',
    ];
}
