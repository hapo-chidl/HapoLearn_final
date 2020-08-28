<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use User;
use Review;
use Course;

class Lesson extends Model
{
    use SoftDeletes;
    protected $filleable = [
        'name', 'requements', 'description', 'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class,'lesson_id');
    }

    public function users ()
    {
        return $this->belongsToMany(LessonUser::class,'leson_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
