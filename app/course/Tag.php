<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use SoftDeletes;
    protected $table= 'tags';
    protected $filleable = [
        'name', 
    ];

    public function course_tag()
    {
        return $this->belongsToMany(Course_tag::class);
    }
}
