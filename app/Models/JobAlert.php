<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAlert extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_title',
        'location_name',
        'email',
        'status',
    ];
}
