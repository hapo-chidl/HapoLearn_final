<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use CourseTag;

class Tag extends Model
{
    use SoftDeletes;
    protected $filleable = [
        'name', 
    ];

    public function course()
    {
        return $this->belongsToMany(CourseTag::class,'course_id');
    }
}
