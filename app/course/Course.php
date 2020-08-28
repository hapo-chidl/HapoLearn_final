<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use CourseTag;
use CourseUser;
use Lesson;

class Course extends Model
{
    use SoftDeletes;
    protected $filleable = [
        'name', 'image', 'requements', 'description', 'price', 'time',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function tags ()
    {
        return $this->belongsToMany(Tag::class,'tag_id');
    }

    public function users ()
    {
        return $this->belongsToMany(User::class,'user_id');
    }
}
