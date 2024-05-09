<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'name', 
        'link', 
        'proj_from',
        'proj_to',
        'tags', 
        'description', 
    ];
}
