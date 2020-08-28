<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Review;
use LessonUser;
use CourseUser;

class User extends Model
{
    use SoftDeletes;
    protected $filleable = [
        'name', 'avatar', 'role', 'password', 'link_facebook', 'email', 'link_slack', 'introduction',
    ];

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class,'lesson_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_id');
    }
}
