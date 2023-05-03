<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'arabic_name',
        'english_name',
        'credit',
        'type',
        'stage_id',
        'user_id',
        'is_active',
    ];
}
