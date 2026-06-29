<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'admission_number',
        'program_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'date_of_birth',
        'phone',
        'email',
        'address',
        'admission_year',
        'status',
        'photo',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function courses()
{
    return $this->belongsToMany(
        Course::class,
        'enrollments'
    )
    ->withPivot(
        'academic_year',
        'semester'
    );
}

public function results()
{
    return $this->hasMany(Result::class);
}
}