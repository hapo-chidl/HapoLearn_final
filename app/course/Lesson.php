<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use LessonUser;
use Review;
use Course;

class Lesson extends Model
{
    use SoftDeletes;
    protected $table= 'lessons';
    protected $filleable = [
        'name', 'requements', 'description', 'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function lesson_user ()
    {
        return $this->belongsToMany(LessonUser::class);
    }
    public function reviews()
    {
        return $this->belongsTo(Review::class);
    }
}
