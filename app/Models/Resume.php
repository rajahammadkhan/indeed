<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email', 
        'phone', 
        'role', 
        'website', 
        'social', 
        'social_url', 
        'resume_summary', 
    ];
}