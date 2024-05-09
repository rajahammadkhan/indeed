<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'degree',
        'school',
        'edu_from',
        'edu_to',
        'description', 
    ];
}
