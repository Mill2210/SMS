<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'program_id',
        'course_code',
        'course_name',
        'year_of_study',
        'semester',
        'credit_hours',
        'description',
        'status',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function enrollments()
{
    return $this->hasMany(Enrollment::class);
}

public function students()
{
    return $this->belongsToMany(
        Student::class,
        'enrollments'
    )
    ->withPivot('academic_year','semester')
    ->withTimestamps();
}

public function courseAllocations()
{
    return $this->hasMany(CourseAllocation::class);
}

public function results()
{
    return $this->hasMany(Result::class);
}
}