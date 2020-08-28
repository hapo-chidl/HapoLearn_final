<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Course;

class Tag extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_id');
    }
}
