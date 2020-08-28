<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use User;
use Lesson;

class LessonUser extends Model
{
    use SoftDeletes;
    protected $table = 'lesson_user';
    protected $filleable = [
        'lesson_id', 'user_id',
    ];
}
