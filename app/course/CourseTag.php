<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Course;
use Tag;

class CourseTag extends Model
{
    use SoftDeletes;
    protected $table= 'course_tag';
    protected $filleable = [
        'course_id', 'tag_id',
    ];

    public function courses ()
    {
        return $this->belongsToMany(Course::class, 'course_id');
    }

    public function tags ()
    {
        return $this->belongsToMany(Tag::class, 'tag_id');
    }
}
