<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseAllocation extends Model
{
    protected $fillable = [
        'lecturer_id',
        'course_id',
        'academic_year',
        'semester',
    ];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}