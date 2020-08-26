<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use SoftDeletes;
    protected $table= 'reviews';
    protected $filleable = [
        'rating', 'comment', 'user_id', 'lesson_id', 'date',
    ];

    public function lessons()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}