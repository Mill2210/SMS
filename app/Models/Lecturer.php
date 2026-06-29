<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = [
        'department_id',
        'staff_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'qualification',
        'photo',
        'status',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function courseAllocations()
{
    return $this->hasMany(CourseAllocation::class);
}
}