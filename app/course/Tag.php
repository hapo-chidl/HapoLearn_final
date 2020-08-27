<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use CourseTag;

class Tag extends Model
{
    use SoftDeletes;
    protected $table = 'tags';
    protected $filleable = [
        'name', 
    ];

    public function course_tag()
    {
        return $this->belongsToMany(CourseTag::class);
    }
}
