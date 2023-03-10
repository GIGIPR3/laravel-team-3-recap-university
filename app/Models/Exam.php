<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'date',
        'hour',
        'location',
        'address',
        'course_id'
    ];

    public function course(){

        return $this->BelongsTo('App\Models\Course');
    }

}
