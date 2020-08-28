<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;

class LessonUser extends Model
{
    use SoftDeletes;
    protected $table = 'lesson_user';
    protected $fillable = [
        'lesson_id', 'user_id',
    ];
}
