<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    protected $fillable =[
        "Name",
        "BANK",
        "Account_number",
        "Current_balance",
        "Branch_address	",
    ];
}
