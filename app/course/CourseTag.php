<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;

class CourseTag extends Model
{
    use SoftDeletes;
    protected $table = 'course_tag';
    protected $fillable = [
        'course_id', 'tag_id',
    ];
}
