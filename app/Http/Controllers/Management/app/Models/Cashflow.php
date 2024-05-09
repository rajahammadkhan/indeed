<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashflow extends Model
{
    use HasFactory;
    protected $fillable =[
        "Customer",
        "Issue_date",
        "Due_date",
        "Due_amount",
        "Status",
    ];
}
