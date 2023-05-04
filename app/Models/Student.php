<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'gov',
        'address',
        'study_type',
        'acceptance_year',
        'is_parallel',
    ];
}
