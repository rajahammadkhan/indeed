<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_email',
        'country_code',
        'mobile_phone',
        'additional_question',
        'proficiency_level',
        'document_pdf',
        'agreed',
    ];

    public function username()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
