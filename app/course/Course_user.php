<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;

class Course_user extends Model
{
    use SoftDeletes;
    protected $table= 'course_user';
    protected $filleable = [
        'course_id', 'user_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_id');
    }
}
