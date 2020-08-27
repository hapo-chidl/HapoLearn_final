<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use CourseTag;
use CourseUser;
use Lesson;


class Course extends Model
{
    use SoftDeletes;
    protected $table = 'courses';
    protected $filleable = [
        'name', 'image', 'requements', 'description', 'price', 'time',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function course_tag ()
    {
        return $this->belongsToMany(CourseTag::class);
    }

    public function course_user ()
    {
        return $this->belongsToMany(CourseUser::class);
    }
}
