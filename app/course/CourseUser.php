<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    use SoftDeletes;
    protected $table = 'course_user';
    protected $fillable = [
        'course_id', 'user_id',
    ];
}
