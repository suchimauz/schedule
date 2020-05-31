<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'group_id',
        'week',
        'type',
        'first_lesson_name',
        'first_lesson_teacher',
        'first_lesson_cabinet',
        'second_lesson_name',
        'second_lesson_teacher',
        'second_lesson_cabinet',
        'third_lesson_name',
        'third_lesson_teacher',
        'third_lesson_cabinet',
        'fouth_lesson_name',
        'fouth_lesson_teacher',
        'fouth_lesson_cabinet',
        'fifth_lesson_name',
        'fifth_lesson_teacher',
        'fifth_lesson_cabinet',
        'sixth_lesson_name',
        'sixth_lesson_teacher',
        'sixth_lesson_cabinet',
        'seventh_lesson_name',
        'seventh_lesson_teacher',
        'seventh_lesson_cabinet',
        'eight_lesson_name',
        'eight_lesson_teacher',
        'eight_lesson_cabinet',
    ];
}
