<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Review;
use LessonUser;
use CourseUser;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'users';
    protected $filleable = [
        'name', 'avatar', 'role', 'password', 'link_facebook', 'email', 'link_slack', 'introduction',
    ];

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function lesson_user()
    {
        return $this->belongsToMany(LessonUser::class);
    }

    public function course_user()
    {
        return $this->belongsToMany(CourseUser::class);
    }
}
