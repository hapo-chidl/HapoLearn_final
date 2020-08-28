<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Course;

class Tag extends Model
{
    use SoftDeletes;
    protected $filleable = [
        'name', 
    ];

    public function courses()
    {
        return $this->belongsToMany(CourseTag::class,'course_id');
    }
}
