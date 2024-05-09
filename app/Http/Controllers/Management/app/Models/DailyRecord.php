<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyRecord extends Model
{
    use HasFactory;
    protected $fillable =[
        "Project",
        "Paid",
        "Credit",
        "Debit",
    ];
}