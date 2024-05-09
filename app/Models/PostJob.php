<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'industry_id',
        'department_id',
        'job_type_id',
        'location_id',
        'status',
        'job_title',
        'job_status',
        'postcode',
        'advertise_job',
        'minimum_pay',
        'maximum_pay',
        'pay_rate',
        'start_date',
        'screening_question',
        'question_answer',
        'job_description',
        'agreed',
        ];

    public function username()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class,'industry_id');
    }
    public function depart()
    {
        return $this->belongsTo(Department::class,'department_id');
    }
    public function job()
    {
        return $this->belongsTo(JobType::class,'job_type_id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }



}
