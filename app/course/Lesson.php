<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use LessonUser;
use Review;
use Course;

class Lesson extends Model
{
    use SoftDeletes;
    protected $table = 'lessons';
    protected $filleable = [
        'name', 'requements', 'description', 'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class,'lesson_id');
    }

    public function User ()
    {
        return $this->belongsToMany(LessonUser::class,'leson_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
